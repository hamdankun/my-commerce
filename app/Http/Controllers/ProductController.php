<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
	/**
	 * Method untuk menampilkan halaman daftar product
	 * @return \Illuminate\Http\Response
	 */
    public function index() {
    	return view('product.index');
    }
}
