<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\Question_image;
use Image;


class QuestionController extends Controller
{
    public function question_view(){
          $questions = Question::orderBy('id','desc')->get();
        return view('frontend.pages.question.questions', compact('questions'));
    }
    
    public function question_show($slug) {
        $question = Question::where('slug',$slug)->first();
        if (!is_null($question)) {
            return view('frontend.pages.question.show', compact('question'));
        } else {
            session()->flash('errors', 'Sorry !! there is no question in URL..');
            return redirect()->route('question');
        }
    }
    
    public function insert(){
        return view('frontend.pages.question.create');
    }
    
    
    // for store question
//         public function store(Request $request) {
//        
//        
//         $validatedData = $request->validate([
//             'subject_name' => 'required|max:150',
//             'term' => 'required',
//             'passing_year' => 'required',
//             'description' => 'required',
//    ]);
//        
//        
//        $question = new Question;
//
//        $question->subject_name = $request->subject_name;
//        $question->term = $request->term;
//        $question->course_code = $request->course_code;
//        $question->passing_year = $request->passing_year;
//        $question->description = $request->description;
//        $question->slug = str_slug($question->subject_name);
//
//
//        $question->admin_id = 1;
//        $question->student_id = 1;
//        $question->teacher_id = 1;
//
//        $question->save();
//
//
//        // for multiple image insert
//        if (count($request->question_image) > 0) {
//            foreach ($request->question_image as $image) {
//                $img = time() . '.' . $image->getClientOriginalExtension();
//                $location = public_path('images/questions/' . $img);
//                Image::make($image)->save($location);
//
//                $question_image = new Question_image;
//                $question_image->question_id = $question->id;
//                $question_image->image = $img;
//
//                $question_image->save();
//            }
//        }
//      
//      return redirect()->route('question.view');
//    }
    
    
}
