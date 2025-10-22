<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AuthMiddleware;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class BlogController extends BaseController
{

    public function __construct() {
        $this->middleware("auth")->except(['index', 'show']);
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
    public function store(StorePostRequest $request)
    {
            $new_blog = new Blog([
                'username' => Auth::user()->name,
                'title' => $request->title,
                'desc' => $request->desc,
                'user_id' => Auth::id(),
            ]);
            $new_blog->save();
            return redirect()->route('posts.index')->with('success', 'Item created successfully!');
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
    public function update(UpdatePostRequest $request, Blog $post)
    {
        $post->update([
            "title" => $request->title,
            "desc" => $request->desc
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
