<?php

namespace App\Http\Controllers\Student;

use App\Models\User;
use App\Models\Tag;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
     public function add($post)
    {
        $user = Auth::user();
        $isFavorite = $user->favorite_posts()->where('post_id',$post)->count();

        if ($isFavorite == 0)
        {
            $user->favorite_posts()->attach($post);
            Toastr::success('Post successfully added to your favorite list','Success');
            return redirect()->back();
        } else {
            $user->favorite_posts()->detach($post);
            Toastr::success('Post successfully removed form your favorite list','Success');
            return redirect()->back();
        }
    }
    
     public function favorite_post(){
        $posts = Auth::user()->favorite_posts;
        $teacher = User::all();
        $tags = Tag::all();
        return view('student.favorite_post',compact('posts','tags','teacher'));
    }
    
    
}
