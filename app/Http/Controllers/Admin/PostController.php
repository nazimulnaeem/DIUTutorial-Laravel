<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $posts = Post::latest()->get();
        return view('admin.post.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'image' => 'mimes:pdf,ppt,docx,doc,pptx|max:10000',
//            'image' => 'mimes:png,jpg|max:10000',
            'categories' => 'required',
            'tags' => 'required',
            'body' => 'required',
        ]);

        $post = new Post();
        $slug = str_slug($request->title);

        if ($request->hasFile('image')) {
            $imageName = $slug . '-' . $request->image->getClientOriginalName();
            $request->image->move(public_path('upload/file'), $imageName);
            $post->image = $imageName;
        }


        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imageName;
        $post->body = $request->body;
        if (isset($request->status)) {
            $post->status = true;
        } else {
            $post->status = false;
        }
        $post->is_approved = true;
        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        Toastr::success('Post Successfully Saved', 'Success');
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) {
//        if($post->user_id != Auth::id()){
//             Toastr::success('You are not authorized to access this post', 'Error');
//             return redirect()->back();
//        }
        return view('admin.post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post) {
       
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post) {

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
        $post->is_approved = true;
        $post->save();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        Toastr::success('Post Successfully Update', 'Success');
        return redirect()->route('admin.post.index');
    }

    public function pending() {
        $posts = Post::where('is_approved', false)->get();
        return view('admin.post.pending', compact('posts'));
    }

    public function approval($id) {
        $post = Post::find($id);
        if ($post->is_approved == false) {
            $post->is_approved = true;
            $post->save();
            
            Toastr::success('Post Successfully Approved', 'Success');
        } else {
            Toastr::info('This Post is already approved', 'Info');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post) {
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
