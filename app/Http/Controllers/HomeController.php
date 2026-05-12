<?php

namespace App\Http\Controllers;


//use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Models\Category;
use App\Models\Post;

class HomeController extends Controller
{
    //public function __contruct(){
      //  $this->middleware('auth');
   // }
    public function index()
    {

    $data = Post::orderBy('id', 'desc')->get();

        return view('home', compact('data'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('create',compact('categories'));
    }

    public function store(StorePostRequest $request)
    {
        $validated=$request->validated();
        Post::create($validated);
        return redirect('/posts');
    }

    public function show(Post $post)
    {
        //dd($post->categories->name);
        return view('show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories=Category::all();
        return view('edit', compact('post','categories'));
    }

    public function update(StorePostRequest $request, Post $post)
    {
        $validated=$request->validated();
        $post->update($validated);
        return redirect('/posts');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts');
    }
}
