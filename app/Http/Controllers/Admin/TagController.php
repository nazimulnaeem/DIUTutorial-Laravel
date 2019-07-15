<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;


class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tags = Tag::latest()->get();
        return view('admin.tag.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tag.create');
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
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,bmp,png,jpg'
        ]);
        $slug = str_slug($request->name);
         if($request->hasFile('image')){
            $image = $request->file('image');
            $directory = 'images/tag/';
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imagename;
            Image::make($image)->resize(500,333)->save($imageUrl);
        }else{
            $imagename = "default.png";
        }
        $tag = new Tag();
        $tag->user_id = Auth::id();
        $tag->name = $request->name;
        $tag->slug = $slug;
        $tag->image = $imagename;
        $tag->save();
        Toastr::success('Subject Successfully Saved' ,'Success');
        return redirect()->route('admin.tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        return view('admin.tag.edit',compact('tag'));
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
       $this->validate($request,[
            'name' => 'required',
            'image' => 'mimes:jpeg,bmp,png,jpg'
        ]);
        // get form image
        $slug = str_slug($request->name);
        $tag = Tag::find($id);
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $directory = 'images/tag/';
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imagename;
            Image::make($image)->resize(500,333)->save($imageUrl);
            if(file_exists($directory.$tag->image)){
                @unlink($directory.$tag->image);
            }
        }else{
            $imagename = $tag->image;
        }
        $tag->user_id = Auth::id();
        $tag->name = $request->name;
        $tag->slug = $slug;
        $tag->image = $imagename;
        $tag->save();
        Toastr::success('Subject Successfully Updated','Success');
        return redirect()->route('admin.tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Tag::find($id)->delete();
        Toastr::success('Subject Successfully Deleted','Success');
        return redirect()->back();
    }
}
