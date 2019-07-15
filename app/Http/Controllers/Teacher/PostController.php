<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $posts = Auth::user()->posts()->latest()->get();
        return view('teacher.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('teacher.post.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'title' => 'required',
            'image' => 'mimes:pdf,ppt,docx,doc,pptx|max:10000',
//            'image' => 'mimes:png,jpg|max:10000',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);
        
         $post = new Post();
        $slug = str_slug($request->title);
        
        if($request->hasFile('image')){
            $imageName = $slug.'-'.$request->image->getClientOriginalName();
            $request->image->move(public_path('upload/file'),$imageName);
            $post->image = $imageName;
        }
         
        if($post->image > 0){
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imageName;
        $post->body = $request->body;
        if(isset($request->status))
        {
            $post->status = true;
        }else {
            $post->status = false;
        }
        $post->is_approved = false;
        $post->save();
        }else{
            $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->body = $request->body;
        if(isset($request->status))
        {
            $post->status = true;
        }else {
            $post->status = false;
        }
        $post->is_approved = false;
        $post->save();
        }
        
        
        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);
        
         Toastr::success('Post Successfully Saved','Success');
        return redirect()->route('teacher.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
          if($post->user_id != Auth::id()){
             Toastr::error('You are not authorized to access this post', 'Error');
             return redirect()->back();
        }
         return view('teacher.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
          if($post->user_id != Auth::id()){
             Toastr::error('You are not authorized to access this post', 'Error');
             return redirect()->back();
        }
         $categories = Category::all();
        $tags = Tag::all();
        return view('teacher.post.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
        $this->validate($request, [
            'title' => 'required',
            'image' => 'mimes:pdf,ppt,docx,doc,pptx|max:10000',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);


        $slug = str_slug($request->title);

        if ($request->hasFile('image')) {
            $imageName = $slug . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('upload/file'), $imageName);
            $post->image = $imageName;
        }

        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
//        $post->image = $imageName;
        $post->body = $request->body;
        if (isset($request->status)) {
            $post->status = true;
        } else {
            $post->status = false;
        }
        $post->is_approved = false;
        $post->save();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        Toastr::success('Post Successfully Update', 'Success');
        return redirect()->route('teacher.post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (!is_null($post)) {
            $post->delete(public_path('upload/file' . $post->image));
        }
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();
        Toastr::success('Post Successfully Deleted', 'Success');
        return redirect()->back();
    }
}
