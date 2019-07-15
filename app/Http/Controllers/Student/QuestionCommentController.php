<?php

namespace App\Http\Controllers\Student;

use App\Models\Comment;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QuestionCommentController extends Controller
{
    
    public function store(Request $request, $question){
        $this->validate($request, [
            'comment'=>'required'
        ]);
        
        $comment = new Comment();
        $comment->question_id = $question;
        $comment->user_id = Auth::id();
        $comment->comment = $request->comment;
        $comment->save();
        Toastr::success('Comment Successfully done ','Success');
        return redirect()->back();
    }
}
