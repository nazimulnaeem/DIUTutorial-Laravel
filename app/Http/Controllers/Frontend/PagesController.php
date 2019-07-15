<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;

class PagesController extends Controller
{
    
     public function contact(){
        return view('frontend.pages.admin.contact');
    }
    
    public function about_admin(){
        return view('frontend.pages.admin.about_us');
    }
    
     public function front_page(){
        return view('frontend.pages.others.index');
    }
    
    public function search(Request $request){
    
    $search = $request->search;
    
    $questions = Question::orWhere('subject_name','like','%'.$search.'%')
            ->orWhere('course_code','like','%'.$search.'%')
            ->orWhere('passing_year','like','%'.$search.'%')
            ->orWhere('term','like','%'.$search.'%')
            ->orderBy('id', 'desc')
            ->paginate(9);
    
    return view('frontend.pages.question.partial.search', compact('search', 'questions'));
}
    
}
