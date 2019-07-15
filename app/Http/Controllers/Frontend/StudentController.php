<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\TeacherPost;
use App\Models\User;
use App\Models\Role;

class StudentController extends Controller
{
//         public function __construct()
//    {
//        $this->middleware('auth:guard');
//    }
    
     public function view(){
        return view('frontend.pages.students.view');
    }
    
    public function student_reg(){
        return view('frontend.pages.students.student_reg');
    }
    
    public function student_login(){
        return view('frontend.pages.students.student_login');
    }
    
    // for class card whos teacher create class
    public function class_card(){
        $teachers = Teacher::orderBy('id','desc')->get();
        return view('frontend.pages.students.classroom.faculty', compact('teachers'));
    }
    
    // all faculty member
    public function all_faculty(){
        $teachers = User::where('role_id',3)->get();
        return view('frontend.pages.students.faculty_member', compact('teachers'));
        
    }
    
     
    
    // for classroom 
    public function classroom(){
        $posts = TeacherPost::orderBy('id','desc')->get();
        return view('frontend.pages.students.classroom.classroom', compact('posts'));
    }
    
    
}
