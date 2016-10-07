<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Redirect;
use Auth;

class AuthenticationController extends Controller
{
	// show login page
    public function showLogin() {
        return view('login');
    }

    // do the login
    public function doLogin(Request $request) {
        $username = $request->email;
        $password = $request->password;

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            $user = Auth::user();
            // switch ($user->group_name) {
                // case 'group1':
                    // return Redirect::route('get_rooms', ['group_id' => 1]);
                    // break;
                // case 'group2':
                    // return Redirect::route('get_rooms', ['group_id' => 2]);
                    // break;
                // case 'group3':
                    // return Redirect::route('get_rooms', ['group_id' => 3]);
                    // break;
                // case 'group4':
                    // return Redirect::route('get_rooms', ['group_id' => 4]);
            return Redirect::route('home');
                    // break;
            // }
        }else {
        	return redirect()->route('login');
        }
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/');
    }
}
