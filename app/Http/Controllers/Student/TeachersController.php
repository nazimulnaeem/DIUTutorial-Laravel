<?php

namespace App\Http\Controllers\Student;

use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;
use Image;
use App\Http\Controllers\Controller;

class TeachersController extends Controller
{
    public function teacher_all_post(){
        
        $posts = Post::with('categories')->latest()->approved()->published()->paginate(9);
        $tags = Tag::all();
        $category = Category::all();
        return view('student.teacher_all_post',compact('posts','tags','category'));
    }
    
     // all faculty member
    public function all_faculty(){
        $teachers = User::where('role_id',3)->get();
        return view('student.faculty_member', compact('teachers'));
        
    }
    
    // teacher post
     public function postByTeacher(Request $request)
    {
        $teacher = User::find($request->id);
        $posts = $teacher->posts()->approved()->published()->paginate(9);
        $tags = Tag::all();
        return view('student.post_by_teacher',compact('teacher','posts','tags'));
    }
    
    
}
