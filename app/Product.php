<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	/**
	 * Fillable required if column will modify in the future
	 * @var arrray
	 */
    protected $fillable = ['name', 'brand', 'price', 'category', 'image_path'];
}
