<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{

	/**
	 * Request instalce
	 * @var \Illuminate\Http\Request
	 */
	protected $request;

	public function __construct(Request $request) {
		$this->request = $request;
	}

	/**
	 * Authentikasi login user
	 * @return \Illumunate\Http\Response
	 */
    public function login() {

    	if (Auth::attempt($this->request->only('email', 'password'), $this->request->has('remember'))) {
    		 return redirect()->intended('member.index');
    	}

    	return redirect()->back();
    }
}
