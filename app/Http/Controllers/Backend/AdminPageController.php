<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\CarouselImage;
use App\Models\Admin;
use Image;


class AdminPageController extends Controller
{
//     public function __construct()
//    {
//        $this->middleware('auth:guard');
//    }
//    
    public function index(){
        return view('admin.dashboard');
    }
    
    public function carouselImage_store(Request $request){
        
//        $carousel_image = new CarouselImage;
//        
//        $carousel_image->admin_id = 1;
//        $carousel_image->save();
//        
        // for multiple image insert
        if (count($request->question_image) > 0) {
            foreach ($request->question_image as $image) {
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/carouselImage/' . $img);
                Image::make($image)->save($location);

                $carousel_image = CarouselImage;
                $carousel_image->$carousel_image_id = $carousel_image->id;
                $carousel_image->image = $img;

                $carousel_image->save();
            }
        }

        return redirect()->route('carousel_image');
    }
}
