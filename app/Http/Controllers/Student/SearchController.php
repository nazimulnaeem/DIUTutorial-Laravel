<?php

namespace App\Http\Controllers\Student;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    
    public function post_search(Request $request){
    
    $postSearch = $request->search;
    
    $posts = Post::orWhere('title','like','%'.$postSearch.'%')
            ->orWhere('slug','like','%'.$postSearch.'%')
            ->orderBy('id', 'desc')
            ->paginate(9);
    $tags = Tag::all();
    return view('student.post_search', compact('postSearch', 'posts','tags'));
}


 public function question_search(Request $request){
    
    $questionSearch = $request->search;
    
    $questions = Question::orWhere('title','like','%'.$questionSearch.'%')
            ->orWhere('course_code','like','%'.$questionSearch.'%')
            ->orWhere('passing_year','like','%'.$questionSearch.'%')
            ->orWhere('term','like','%'.$questionSearch.'%')
            ->orderBy('id', 'desc')
            ->paginate(9);
    
    return view('student.question.question_search', compact('questionSearch', 'questions'));
}

    
}
