<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	 protected $fillable = [
        'description', 'user_id', 'unique_code','code','unit_price','u_o_m','category_id'
    ];

}
