<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view("auth.register");
    }

    public function register(Request $request) {
        $user_exists = User::where("email", $request->email)->first();

        if (!$user_exists) {
            $validated = $request->validate([
                "username" => "required",
                "email" => ["required", "unique:users,email"],
                "password" => "required",
            ]);
            
            $user = User::create([
                "name" => $validated["username"],
                "email" => $validated["email"],
                "password" => Hash::make($validated["password"])
            ]);
            
            session(["user_id" => $user->id]);
            return to_route("posts.index");
        } else {
            return back()->withErrors(["exists" => "The User Is Allready Exists"])->withInput();
        }
    }
}
