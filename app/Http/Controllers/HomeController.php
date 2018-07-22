<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$products = Product::orderBy('id', 'desc')->limit(20)->get()->chunk(4);
        return view('home.index', ['products' => $products]);
    }
}
