<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    
     public function teacher_all_post(){
        
        $posts = Post::latest()->approved()->published()->paginate(9);
        $tags = Tag::all();
        $category = Category::all();
        return view('teacher.teacher_view.teacher_all_post',compact('posts','tags','category'));
    }
    
     // all faculty member
    public function all_faculty(){
        $teachers = User::where('role_id',3)->get();
        return view('teacher.teacher_view.faculty_member', compact('teachers'));
        
    }
    
    // teacher post
     public function postByTeacher(Request $request)
    {
        $teacher = User::find($request->id);
        $posts = $teacher->posts()->approved()->published()->paginate(9);
        $tags = Tag::all();
        return view('teacher.teacher_view.post_by_teacher',compact('teacher','posts','tags'));
    }

    
}
