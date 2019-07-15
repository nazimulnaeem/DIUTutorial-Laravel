<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //   for admin can see and dellete comment in teacher dashboard
     public function index(){
        $posts = Auth::user()->posts;
        return view('teacher.comments', compact('posts'));
    }
    
    public function destroy($id){
       $comment = Comment::findOrfail($id)->delete();
        if($comment->post->user->id == Auth::id()){
            $comment->delete();
        Toastr::success('Comment Successfully deleted','Success');
        }
        return redirect()->back();
    }
    
    
    // teacher can comment anyone post
     public function store(Request $request, $post){
        $this->validate($request, [
            'comment'=>'required'
        ]);
        
        $comment = new Comment();
        $comment->post_id = $post;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        Toastr::success('Comment Successfully done ','Success');
        return redirect()->back();
    }
    
    
}
