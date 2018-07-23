<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Product Model instance 
     * @var Product
     */
    protected $product;

    /**
     * Inisialisasi instance class product
     * @param Product $product
     */
    public function __construct(Product $product) {
        $this->product = $product;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$products = $this->product->limit(20)->get()->chunk(4);
        return view('home.index', ['products' => $products]);
    }
}
