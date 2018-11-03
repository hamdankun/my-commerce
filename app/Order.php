<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['date', 'shipping_service', 'shipping_cost', 'total', 'grand_total', 'description'];
}
