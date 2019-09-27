<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

use App\Item;
use App\Supplier;
use App\Stock;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $items = Item::get();
        $total_price =$items->sum(function($item){
            return $item->stocks->sum('quantity') * $item->rate;
        });
        return view('item')->with('items', $items)
                            ->with('total_price', $total_price)
                            ->with('no', $no=1)
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $suppliers = DB::table('suppliers')->get();
        return view('add_item')->with('suppliers', $suppliers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:items',
            'rate' => 'required',
            'unit' => 'required',
            'supplier' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator);
        }else{
            $item = new Item;
            $item->name = $request->name;
            $item->brand = $request->brand;
            $item->rate = $request->rate;
            $item->requisition = $request->requisition;
            $item->unit = $request->unit;

            $item->save();

            $item_id = $item->id;

            if($request->supplier){
                foreach ($request->supplier as $supplier) {
                    $supplier_id = DB::table('suppliers')->select('id')->where('name', $supplier)->value('id');

                    $data = [
                        'item_id' => $item_id,
                        'item_name' => $item->name,
                        'supplier_id' => $supplier_id,
                        'supplier_name' => $supplier
                    ];
                    DB::table('item_supplier')->insert($data);
                }
            }


            session()->flash("success", "Item Saved Successfully");
            return redirect()->route('item');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::find($id);
        $item_suppliers = $item->suppliers->pluck('name')->toArray();
        $suppliers = DB::table('suppliers')->get();


        $filtered = $suppliers->whereNotIn('name', $item_suppliers);
        $filtered_suppliers = $filtered->all();

        return view ('edit_item')->with('item', $item)->with('suppliers', $suppliers)
                                                        ->with('filtered_suppliers', $filtered_suppliers)
                                                        ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'rate' => 'required',
            'unit' => 'required',
            'supplier' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator);
        }else{
            $item = Item::find($id);
            $item->name = $request->name;
            $item->brand = $request->brand;
            $item->rate = $request->rate;
            $item->requisition = $request->requisition;
            $item->unit = $request->unit;
            $item->save();
            DB::table('item_supplier')->where('item_id', $id)->delete();
            if($request->supplier){

                foreach ($request->supplier as $supplier) {
                    $supplier_id = DB::table('suppliers')->select('id')->where('name', $supplier)->value('id');

                    $data = [
                        'item_id' => $id,
                        'item_name' => $item->name,
                        'supplier_id' => $supplier_id,
                        'supplier_name' => $supplier
                    ];

                    DB::table('item_supplier')->insert($data);
                }


            }
            return redirect()->route("item")
                            ->with('success','Item updated successfully');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::find($id);
        $item->delete();

        return redirect()->route("item")
                        ->with('success','Item Deleted successfully');
    }
}
