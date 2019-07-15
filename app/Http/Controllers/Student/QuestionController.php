<?php

namespace App\Http\Controllers\Student;

use App\Models\Question;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    public function all_question(){
         
        $questions = Question::with('tags')->latest()->approved()->published()->paginate(9);
        $tags = Tag::all();
        return view('student.question.all_question',compact('questions','tags'));
    }
    
     public function question_details($slug){
        $questions = Question::where('slug',$slug)->approved()->published()->first();
        $DIUtutorial = 'DIU_'.$questions->id;
        if(!Session::has($DIUtutorial)){
            $questions->increment('view_count');
            Session::put($DIUtutorial,1);
        }
        return view('student.question.question_details', compact('questions'));
    }
    
      public function add_to_favorite($question)
    {
        $user = Auth::user();
        $isFavorite = $user->favorite_question()->where('question_id',$question)->count();

        if ($isFavorite == 0)
        {
            $user->favorite_question()->attach($question);
            Toastr::success('Question successfully question to your favorite list','Success');
            return redirect()->back();
        } else {
            $user->favorite_question()->detach($question);
            Toastr::success('Question successfully removed form your favorite list','Success');
            return redirect()->back();
        }
    }
    
    // when click one subject view all question about the subject
     public function questionBySubject($slug)
    {
        $tag = Tag::where('slug',$slug)->first();
        $questions = $tag->questions()->published()->get();
        return view('student.question.subject_question',compact('tag','questions'));
    }
    
    
    
}
