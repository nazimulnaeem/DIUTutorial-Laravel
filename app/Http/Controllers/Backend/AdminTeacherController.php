<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;

class AdminTeacherController extends Controller
{
    
     public function index(){
         $teachers = Teacher::orderBy('id','desc')->get();
        return view('backend.pages.admin.pages.teachers.index', compact('teachers'));
    }
    
    
    public function edit($id){
         $teachers = Teacher::find($id);
        return view('backend.pages.admin.pages.teachers.edit', compact('teachers'));
    }
    
       public function update(Request $request,$id) {
        
        
         $validatedData = $request->validate([
             'name' => 'required|max:150',
             'email' => 'required',
            
    ]);
        
        
        $teachers = Teacher::find($id);

        $teachers->name = $request->subject_name;
        $teachers->term = $request->term;
        $teachers->save();
        return redirect()->route('admin.teachers');
    }
    
    
     public function delete($id){
        $teacher = Question::find($id);
        if(!is_null($teacher)){
            $teacher->delete();
        }
        session()->flash('success','Teachers delete successfully !!');
        return back();
    }
    
    
    
}
