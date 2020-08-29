<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $username = $request->username;
        $pass = $request->password;
        if(Auth::attempt(['username' => $username, 'password' => $pass])) {
            return redirect()->route('admin.index');
        }
        return back();
    }
}
