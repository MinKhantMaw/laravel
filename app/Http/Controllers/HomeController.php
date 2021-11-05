<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\storePostRequests;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        // $data=Post::all();
        $data = Post::orderBy('id', 'desc')->get();
        // dd($data);
        return view('home', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storePostRequests $request)
    {
        //    $request->validate([
        //         'name' => 'required|unique:posts|max:255',
        //         'description' => 'required',
        //     ]);

        //storepostRequests inject
        // $validated=$request->validate();
        $post = new Post();
        $post->name = $request->name;
        $post->description = $request->description;
        $post->category_id = $request->category;
        $post->save();
        // Post::creat([
        //     'name'=>$request->name,
        //     'description'=>$request->description,
        //     'category_id'=>$request->category_id,
        // ]);
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //Route Model Binding
        //$post=Post::findOrFail($id);
        return view('show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {

        // $post=Post::findOrFail($id);
        $categories = Category::all();
        return view('edit', compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storePostRequests $request, Post $post)
    {
        // $post=Post::findOrFail($id);
        // $request->validate([
        //     'name' => 'required|unique:posts|max:255',
        //     'description' => 'required',
        // ]);
        //storePostRequests inject
        // $post->name=$request->name;
        // $post->description=$request->description;

        // $post->save();
        $post->update([
            'name' => $request->name,
            'description' => $request->description,
             'category_id' => $request->category,
        ]);
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::findOrFail($id)->delete();
        return redirect('/posts');
    }
}