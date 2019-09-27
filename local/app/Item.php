<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name', 'brand', 'rate', 'unit', 'requisition'
    ];

    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }

    public function distributes()
    {
        return $this->hasMany('App\Distribute');
    }


    public function suppliers()
    {
        return $this->belongsToMany('App\Supplier')->withPivot('supplier_name');
    }

    public function item_returns (){
        return $this->hasMany ('App\ItemReturn');
    }
    public function requisitions (){
        return $this->hasMany ('App\Requisition');
    }
}
