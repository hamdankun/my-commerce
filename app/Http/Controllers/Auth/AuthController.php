<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
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
    public function login(LoginRequest $request) {

    	if (Auth::attempt($this->request->only('email', 'password'), $this->request->has('remember'))) {
        	 toast()->info('Successfully for login, welcome', 'Info');
    		 return redirect()->intended(route('member.index'));
    	}

    	return redirect()->back();
    }

    public function logout() {
    	Auth::logout();
        toast()->info('Successfully for logout, good bye', 'Info');
    	return redirect()->intended(route('member.index'));
    }
}
