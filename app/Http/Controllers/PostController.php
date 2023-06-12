<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
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
        $post= post::latest()->paginate(5);
        return view('admins.NewsPost.index',compact('post'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admins.NewsPost.create');
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
            'title' => 'required|unique:posts|max:255',
            'subtitle' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);
          // Upload image
          $ex = $request->file('image')->getClientOriginalExtension();
          $new_img_name = 'final_project_' .time() . '.' . $ex;
          $request->file('image')->move(public_path('uploads'),$new_img_name);

        post::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'image' =>$new_img_name,
            'content' => $request->content 
        ]);

        return redirect()->route('posts.index')->with('success', 'Education added succeffuly')
        ->with('type', 'warning');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        return view('admins.NewsPost.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        $request->validate([
            'title' => 'required|unique:categories|max:255',
            'subtitle' => 'required',
            'image' => 'required',
            'content' => 'required'
        ]);
        $ex = $request->file('image')->getClientOriginalExtension();
        $new_img_name = 'final_project_' .time() . '.' . $ex;
        $request->file('image')->move(public_path('uploads'),$new_img_name);

        $post->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'content' => $request->content,
            'image' => $new_img_name,
            'content' => $request->content
        ]);

        return redirect()->route('categories.index')->
        with('success', 'Category Update succeffuly')->with('type', 'warning');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')->
        with('success', 'Category deleted succeffuly')->with('type', 'danger');
    }
}
