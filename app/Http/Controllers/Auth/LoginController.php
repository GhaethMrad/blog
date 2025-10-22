<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view("auth.login");
    }

    public function login(LoginRequest $request) {
        if (Auth::attempt(["name" => $request->username, "password" => $request->password])) {
            $request->session()->regenerate();
            return to_route("posts.index");
        }
        return back()->withErrors(['error' => 'The Username or password is failed'])->withInput();
    }
}
