<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    public function index()
    {
       $teachers = User::teachers()
           ->withCount('posts')
//           ->withCount('comments')
//           ->withCount('favorite_posts')
           ->get();
       return view('admin.teachers',compact('teachers'));
    }
    public function destroy($id)
    {
        $teacher = User::findOrFail($id)->delete();
        Toastr::success('Teacher Successfully Deleted','Success');
        return redirect()->back();
    }
}
