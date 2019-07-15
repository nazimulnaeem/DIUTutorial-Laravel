<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPagesController extends Controller
{
    public function carouselImage(){
        return view('frontend.pages.admin.others.carousel');
    }
}
