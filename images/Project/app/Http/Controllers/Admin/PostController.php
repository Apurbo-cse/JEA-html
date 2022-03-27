<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts']=Post::orderBy('id','desc')->paginate(20);
        $data['serial']=1;
        return view('admin.post.index', $data);
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sub_title'=>'required',
            'title'=>'required',
            'description'=>'required',
            'status'=>'required|in:'.Post::ACTIVE_STATUS.','.Post::INACTIVE_STATUS,
            'image'=>'required|mimes:jpeg, png, jpg|max:8192'
        ]);
        $data = $request->except(['_token', 'image']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'images/post';
            $file->move($path, $file->getClientOriginalName());
            $data['image'] = $path . '/' . $file->getClientOriginalName();
        }

        Post::create($data);
        session()->flash('success', 'Post Create Successfully');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $data['post'] = $post;
        return view('admin.post.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        $request->validate([
            'sub_title'=>'required',
            'title'=>'required',
            'description'=>'required',
            'status'=>'required|in:'.Post::ACTIVE_STATUS.','.Post::INACTIVE_STATUS,
            'image'=>'mimes:jpeg, png|max:8192'
        ]);

        $data = $request->except(['_token', 'image']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'images/post';
            $file->move($path, $file->getClientOriginalName());
            $data['image'] = $path . '/' . $file->getClientOriginalName();
            if($post->image != null  && file_exists($post->image)){
                unlink($post->image);
            }
        }

        $post->update($data) ;
        session()->flash('success', 'post Updated Successfully');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if(file_exists($post->image))
        {
            unlink($post->image);
        }
        $post->delete();
        session()->flash('success', 'post Delated Successfully');
        return redirect()->back();
    }
}
