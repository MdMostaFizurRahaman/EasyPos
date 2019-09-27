<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'item_name', 'item_id','challan', 'quantity', 'supplier', 'bill', 'rate'
    ];

    public function item()
    {
        return $this->belongsTo('App\Item');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Supplier');
    }
}
