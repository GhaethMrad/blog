<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index() {
        return view("auth.login");
    }

    public function login(Request $request) {
        $validated = $request->validate([
            "username" => "required",
            "password" => "required",
        ]);

        $user = User::where("name", $validated["username"])->first();

        if (!$user || !Hash::check($validated["password"], $user->password)) {
            return back()->withErrors(['error' => 'The Username or password is failed'])->withInput();
        }

        session(["user_id" => $user->id]);
        return to_route("posts.index");
    }
}
