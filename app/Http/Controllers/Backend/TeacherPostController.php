<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TeacherPost;

class TeacherPostController extends Controller
{
    public function classroom(){
        $posts = TeacherPost::orderBy('id','desc')->get();
        return view('frontend.pages.teachers.classroom.classroom', compact('posts'));
    }
    
    
    public function post_store(Request $request){
        $this->validate($request, [
             'title'=> 'required',
             'description'=> 'nullable'
         ]);
        
        $post = new TeacherPost;
        
        $post->title = $request->title;
        $post->description = $request->description;
        $post->teacher_id = Auth::id();
        
        $post->save();
        
        return redirect()->route('frontend.teacher.classroom');
    }
}
