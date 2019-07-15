<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function index()
    {
       $students = User::students()->get();
       return view('admin.students',compact('students'));
    }
    public function destroy($id)
    {
        $student = User::findOrFail($id)->delete();
        Toastr::success('Student Successfully Deleted','Success');
        return redirect()->back();
    }
}
