<?php

namespace App\Http\Controllers\Student;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function post_details($slug){
        $post = Post::where('slug',$slug)->approved()->published()->first();
        $DIUtutorial = 'DIU_'.$post->id;
        if(!Session::has($DIUtutorial)){
            $post->increment('view_count');
            Session::put($DIUtutorial,1);
        }
        $randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        $tags = Tag::all();
        return view('student.post_details', compact('post','randomposts','tags'));
    }
    
     public function postBySubject($slug)
    {
        $tag = Tag::where('slug',$slug)->first();
        $posts = $tag->posts()->approved()->published()->get();
        return view('student.tag',compact('tag','posts'));
    }
    
}
