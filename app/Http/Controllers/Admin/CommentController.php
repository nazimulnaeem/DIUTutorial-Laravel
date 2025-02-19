<?php

namespace App\Http\Controllers\Admin;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::latest()->get();
        return view('admin.comments', compact('comments'));
    }
    
    public function destroy($id){
        Comment::findOrfail($id)->delete();
        Toastr::success('Comment Successfully deleted','Success');
        return redirect()->back();
    }
}
