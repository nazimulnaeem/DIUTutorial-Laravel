<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();
        return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name' => 'required|unique:categories',
            'image' => 'nullable|image|mimes:jpeg,bmp,png,jpg'
        ]);
          
        
        $slug = str_slug($request->name);
        /*$image = $request->file('image');
        if (isset($image))
        {
           // make unique name for image4
            $directory = 'images/category/';
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
         //   check category dir is exists
            if (!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }
      //      resize image for category and upload
            $category = Image::make($image)->resize(500,333)->save('foo'.$image->getClientOriginalExtension());
            Storage::disk('public')->put('category/'.$imagename,$category);

        } else {
            $imagename = "default.png";
        }*/
        if($request->hasFile('image')){
            $image = $request->file('image');
            $directory = 'images/category/';
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imagename;
            Image::make($image)->resize(500,333)->save($imageUrl);
        }else{
            $imagename = "default.png";
        }
          
        
        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->image = $imagename;
        $category->save();
        Toastr::success('Category Successfully Saved' ,'Success');
        return redirect()->route('admin.category.index');
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
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
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
//        $category = Category::find($id);
//        $category->name = $request->name;
//        $category->slug = str_slug($request->name);
//        $category->save();
//        Toastr::success('Category Successfully Updated :)' ,'Success');
//        return redirect()->route('admin.category.index');
//        
        
        $this->validate($request,[
            'name' => 'required',
            'image' => 'mimes:jpeg,bmp,png,jpg'
        ]);
        // get form image
        $slug = str_slug($request->name);
        $category = Category::find($id);
        
        if($request->hasFile('image')){
            $image = $request->file('image');
            $directory = 'images/category/';
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $imageUrl = $directory.$imagename;
            Image::make($image)->resize(500,333)->save($imageUrl);
            if(file_exists($directory.$category->image)){
                @unlink($directory.$category->image);
            }
        }else{
            $imagename = $category->image;
        }
        /*if (isset($image))
        {
//            make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//            check category dir is exists
            if (!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }
//            delete old image
            if (Storage::disk('public')->exists('category/'.$category->image))
            {
                Storage::disk('public')->delete('category/'.$category->image);
            }
//            resize image for category and upload
            $categoryimage = Image::make($image)->resize(500,333)->save('foo'.$image->getClientOriginalExtension());
            Storage::disk('public')->put('category/'.$imagename,$categoryimage);

        } else {
            $imagename = $category->image;
        }*/

        $category->name = $request->name;
        $category->slug = $slug;
        $category->image = $imagename;
        $category->save();
        Toastr::success('Category Successfully Updated' ,'Success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        Toastr::success('Category Successfully Deleted','Success');
        return redirect()->back();
    }
}
