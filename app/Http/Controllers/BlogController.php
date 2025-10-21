<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AuthMiddleware;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;

class BlogController extends BaseController
{

    public function __construct() {
        $this->middleware(AuthMiddleware::class)->except(['index', 'show']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("posts.index", ["blogs" => Blog::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("posts.create", ["users" => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $user = User::where("name", $request->username)->first();

            $validated = $request->validate([
                'username' => 'required',
                'password' => "required",
                'title' => 'required',
                'desc' => 'required',
            ]);

            $new_blog = new Blog([
                'username' => $validated['username'],
                'password' => $validated["password"],
                'title' => $validated['title'],
                'desc' => $validated['desc'],
                'user_id' => $user->id,
            ]);

            if (Hash::check($validated["password"], $user->password)) {
                $new_blog->save();
                return redirect()->route('posts.index')->with("success", "Item created successfully!");
            } else {
                return back()->withErrors([
                    "password" => "The User Password Is Not True",
                ])->withInput();
            }

    } 

    /**
     * Display the specified resource.
     */
    public function show(Blog $post)
    {
        return view("posts.show", ["post" => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $post)
    {
        return view("posts.edit", ["post" => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $post)
    {
        $validated = $request->validate([
            'title' => 'required',
            'desc' => 'required',
        ]);

        $post->update([
            "title" => $validated["title"],
            "desc" => $validated["desc"]
        ]);

        $post->save();

        return redirect()->route('posts.index')->with("success", "Item updated successfully!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->with("success", "Item deleted successfully!");
    }
}
