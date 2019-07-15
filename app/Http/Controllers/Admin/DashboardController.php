<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    
     public function index()
    {
        $posts = Post::all();
        $popular_posts = Post::withCount('comments')
                            ->withCount('favorite_to_users')
                            ->orderBy('view_count','desc')
                            ->orderBy('comments_count','desc')
                            ->orderBy('favorite_to_users_count','desc')
                            ->take(5)->get();
        $total_pending_posts = Post::where('is_approved',false)->count();
        $all_views = Post::sum('view_count');
        $teacher_count = User::where('role_id',3)->count();
        $new_teacher_today = User::where('role_id',3)
                                ->whereDate('created_at',Carbon::today())->count();
       $active_teacher = User::where('role_id',3)
                                ->withCount('posts')
                                ->withCount('comments')
                                ->withCount('favorite_posts')
                                ->orderBy('posts_count','desc')
                                ->orderBy('comments_count','desc')
                                ->orderBy('favorite_posts_count','desc')
                                ->take(5)->get();
       $category_count = Category::all()->count();
       $tag_count = Tag::all()->count();
       $question_count = Question::all()->count();

        return view('admin.dashboard',compact('posts','popular_posts','total_pending_posts','all_views','teacher_count','new_teacher_today','active_teacher','category_count','tag_count','question_count'));
    }
    
}
