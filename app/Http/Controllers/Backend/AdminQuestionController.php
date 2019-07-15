<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Question;
use App\Models\Question_image;
use Image;
use Auth;

class AdminQuestionController extends Controller
{
     public function index(){
         $questions = Question::orderBy('id','desc')->get();
        return view('backend.pages.admin.pages.question.index', compact('questions'));
    }
    
    public function create(){
        return view('backend.pages.admin.pages.question.create');
    }
     public function edit($id){
         $question = Question::find($id);
        return view('backend.pages.admin.pages.question.edit', compact('question'));
    }
   
    
     public function store(Request $request) {
        
        
         $validatedData = $request->validate([
             'subject_name' => 'required|max:150',
             'term' => 'required',
             'passing_year' => 'required',
             'description' => 'required',
//              'image' => 'nullable|image',
            
    ]);
        
        
        $question = new Question;

        $question->subject_name = $request->subject_name;
        $question->term = $request->term;
        $question->course_code = $request->course_code;
        $question->passing_year = $request->passing_year;
        $question->description = $request->description;
        $question->slug = str_slug($question->subject_name);
        $question->user_id =  Auth::id();

        $question->save();


        // for multiple image insert
        if (count($request->question_image) > 0) {
            foreach ($request->question_image as $image) {
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('images/questions/' . $img);
                Image::make($image)->save($location);
                
                $validatedData = $request->validate([
                     'question_image' => 'required|image|max:10000|mimes:doc,docx,jpeg,jpg,png,gif'
                ]);
                $validator = validator::make($fileArray,$rules);
                if($validator->fails()){
                    return redirect()->back();
                }

                $question_image = new Question_image;
                $question_image->question_id = $question->id;
                $question_image->image = $img;

                $question_image->save();
            }
        }

        return redirect()->route('question.create');
    }
    
    
   public function update(Request $request,$id) {
        
        
         $validatedData = $request->validate([
             'subject_name' => 'required|max:150',
             'term' => 'required',
             'passing_year' => 'required',
             'description' => 'required',
    ]);
        
        
        $question = Question::find($id);

        $question->subject_name = $request->subject_name;
        $question->term = $request->term;
        $question->course_code = $request->course_code;
        $question->passing_year = $request->passing_year;
        $question->description = $request->description;
        $question->save();
        return redirect()->route('admin.question');
    }
    
    
     public function delete($id){
        $question = Question::find($id);
        if(!is_null($question)){
            $question->delete();
        }
        session()->flash('success','Question delete successfully !!');
        return back();
    }
    
}
