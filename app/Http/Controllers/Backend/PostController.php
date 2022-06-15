<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('backend.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post ->title = $request->title;
        $post -> description = $request -> description;

        if($request->hasFile('image')){
            $file = $request->image;
            $newName = time() . $file-> getClientOriginalName();
            $file->move('images',$newName);
            $post -> image = "images/$newName";
        }
        $post -> save();
        return redirect('/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post ->Post::find($id);
        return view("backend.post.show",compact("post"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post ->Post::find($id);
        return view("backend.post.edit",compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post ->title = $request->title;
        $post -> description = $request -> description;

        if($request->hasFile('image')){
            $file = $request->image;
            $newName = time() . $file-> getClientOriginalName();
            $file->move('images',$newName);
            $post -> image = "images/$newName";
        }
        $post -> update();
        return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post ->Post::find($id);
        $post->delete();
        return redirect("/post");
    }
}
