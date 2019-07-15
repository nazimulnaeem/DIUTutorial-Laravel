<?php

namespace App\Http\Controllers\Teacher;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    // for teacher dashboard
     public function index(){
         
         $user = Auth::user();
        $posts = $user->posts;
        $popular_posts = $user->posts()
            ->withCount('comments')
            ->withCount('favorite_to_users')
            ->orderBy('view_count','desc')
            ->orderBy('comments_count')
            ->orderBy('favorite_to_users_count')
            ->take(5)->get();
         $total_pending_posts = $posts->where('is_approved',false)->count();
        $all_views = $posts->sum('view_count');
        return view('teacher.dashboard',compact('posts','popular_posts','total_pending_posts','all_views'));
      
    }
    
    // for whos post view teacher
     public function post_details($slug){
        $post = Post::where('slug',$slug)->approved()->published()->first();
        $DIUtutorial = 'DIU_'.$post->id;
        if(!Session::has($DIUtutorial)){
            $post->increment('view_count');
            Session::put($DIUtutorial,1);
        }
        $randomposts = Post::approved()->published()->take(3)->inRandomOrder()->get();
        return view('teacher.teacher_view.post_details', compact('post','randomposts'));
    }
    
     public function postBySubject($slug)
    {
        $tag = Tag::where('slug',$slug)->first();
        $posts = $tag->posts()->approved()->published()->get();
        return view('teacher.teacher_view.tag',compact('tag','posts'));
    }
    
}
