<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['blogs']=Blog::orderBy('id','desc')->get();
        $data['serial']=1;
        return view('admin.blog.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
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
            'status'=>'required|in:'.Blog::ACTIVE_STATUS.','.Blog::INACTIVE_STATUS,
            'image'=>'required|mimes:jpeg, png, jpg|max:8192'
        ]);
        $data = $request->except(['_token', 'image']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'images/Blog';
            $file->move($path, $file->getClientOriginalName());
            $data['image'] = $path . '/' . $file->getClientOriginalName();
        }

        Blog::create($data);
        session()->flash('success', 'blog Create Successfully');
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        $data['blog'] = $blog;
        return view('admin.blog.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {

        $request->validate([
            'sub_title'=>'required',
            'title'=>'required',
            'description'=>'required',
            'status'=>'required|in:'.Blog::ACTIVE_STATUS.','.Blog::INACTIVE_STATUS,
            'image'=>'mimes:jpeg, png|max:8192'
        ]);

        $data = $request->except(['_token', 'image']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'images/blog';
            $file->move($path, $file->getClientOriginalName());
            $data['image'] = $path . '/' . $file->getClientOriginalName();
            if($blog->image != null  && file_exists($blog->image)){
                unlink($blog->image);
            }
        }

        $blog->update($data) ;
        session()->flash('success', 'blog Updated Successfully');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        if(file_exists($blog->image))
        {
            unlink($blog->image);
        }
        $blog->delete();
        session()->flash('success', 'blog Delated Successfully');
        return redirect()->back();
    }
}
