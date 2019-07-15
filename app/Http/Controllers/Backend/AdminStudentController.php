<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AdminStudentController extends Controller
{
    public function index(){
         $students = User::orderBy('id','desc')->get();
        return view('backend.pages.admin.pages.students.index', compact('students'));
    }
    
    
    public function edit($id){
         $students = User::find($id);
        return view('backend.pages.admin.pages.students.edit', compact('students'));
    }
    
       public function update(Request $request,$id) {
        
        
         $validatedData = $request->validate([
             'name' => 'required|max:150',
             'email' => 'required',
             
    ]);
        
        
        $student = User::find($id);

        $student->name = $request->name;
        $student->email = $request->email;
        
        $student->save();
        return redirect()->route('admin.students');
    }
    
    
     public function delete($id){
        $student = User::find($id);
        if(!is_null($student)){
            $student->delete();
        }
        session()->flash('success','Student delete successfully !!');
        return back();
    }
    
    
}
