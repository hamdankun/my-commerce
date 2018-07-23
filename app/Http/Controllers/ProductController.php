<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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
	 * Method untuk menampilkan halaman daftar product
	 * @return \Illuminate\Http\Response
	 */
    public function index() {
    	$products = $this->product->paginate(12);
    	return view('product.index', ['products' => $products]);
    }
}
