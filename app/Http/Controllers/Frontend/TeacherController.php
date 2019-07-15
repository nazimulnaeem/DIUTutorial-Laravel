<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Question;

class TeacherController extends Controller
{
   
    
     public function postform(){
        return view('frontend.pages.teachers.classroom.partial.postform');
    }
    
    // teacher upload file like pdf ppt 
    public function store(Request $request){
        
         
         $image = new TeacherPostImage;
         
         if($request->hasFile('image')){
            $image->image =  $request->image->store('public/teacherpostimage');
         }
         $image->save();
         return redirect()->route('frontend.teacher.classroom');
    }
    
    
    // whos page are teacher view
    
    public function about_admin(){
        return view('frontend.pages.teachers.view.about_us');
    }
    
    public function contact_with_admin(){
        return view('frontend.pages.teachers.view.contact');
    }
    
     // for classroom 
    public function faculty_member(){
        $teachers = Teacher::orderBy('id','desc')->get();
        return view('frontend.pages.teachers.view.faculty', compact('teachers'));
    }
    
    // for view and show question
    public function question_view(){
          $questions = Question::orderBy('id','desc')->get();
        return view('frontend.pages.teachers.view.questions', compact('questions'));
    }
    
    public function question_show($slug) {
        $question = Question::where('slug',$slug)->first();
        if (!is_null($question)) {
            return view('frontend.pages.teachers.view.show', compact('question'));
        } else {
            session()->flash('errors', 'Sorry !! there is no question in URL..');
            return redirect()->route('teacher.question.view');
        }
    }
    
    // teacher search question
     public function search(Request $request){
    
    $search = $request->search;
    
    $questions = Question::orWhere('subject_name','like','%'.$search.'%')
            ->orWhere('course_code','like','%'.$search.'%')
            ->orWhere('passing_year','like','%'.$search.'%')
            ->orWhere('term','like','%'.$search.'%')
            ->orderBy('id', 'desc')
            ->paginate(9);
    
    return view('frontend.pages.teachers.view.partial.search', compact('search', 'questions'));
}
    
    
    
    
}
