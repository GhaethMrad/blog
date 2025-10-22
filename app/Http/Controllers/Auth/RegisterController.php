<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() {
        return view("auth.register");
    }

    public function register(RegisterRequest $request) {
        if (User::where("email", $request->email)->exists()) {
            return back()->withErrors(["exists" => "The User Is Allready Exists"])->withInput();
        }

        $user = User::create([    
            "name" => $request->username,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);
            
        Auth::login($user);
        return to_route("posts.index");
    }
}
