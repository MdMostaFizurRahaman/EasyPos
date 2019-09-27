<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = User::all();
        return view('auth.user')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {

        return view('auth.add_user');
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return redirect('user/add')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $image = $request->file('image');
            $destination = public_path('/uploads');
            $imageName = $image->getClientOriginalName();
            $image->move($destination,$imageName);

            $data = array (
                'name'=> $request->name,
                'image' => $imageName,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            );



            User::create($data);

            return redirect('user')->with('success', 'User Created Successfully');
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
        $user = User::find($id);
        return view ('auth.edit_user')->with('user', $user);
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
        $user = User::find($id);
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:4'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }else{
            if(Hash::check($request->password, $user->password)){
                $image = $request->file('image');
                $destination = public_path('/uploads');
                $imageName = $image->getClientOriginalName();
                $image->move($destination,$imageName);

                $data = array (
                    'name'=> $request->name,
                    'image' => $imageName,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                );



                User::find($id)->update($data);

                return redirect('user')->with('success', 'User Updated Successfully');
            }else{
                return redirect()->back()->with('error', 'Password does not match !');
            }
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
        $user = User::find($id);
        $user->delete();
        return redirect('user')->with('success', 'User Deleted Successfully');
    }
}
