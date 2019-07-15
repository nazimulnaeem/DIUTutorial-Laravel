@extends('teacher.layouts.frontend.app')

@section('title','Favorite Post')

@push('css')
    <link href="{{ asset('assets/frontend/css/home/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">
    <style>
        .favorite_posts{
            color: blue;
        }
    </style>
@endpush

@section('content')
   

    <section class="blog-area section">
        <div class="container">

            <div class="row">

                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="single-post post-style-1">

                                @foreach($post->tags as $key=>$tag)
                                @if ($loop->first)
                                <div class="blog-image"><img src="{{asset('images/tag/'.$tag->image)}}" alt="{{ $post->title }}"></div>
                                @endif
                                @endforeach
                                <a class="avatar" href=""><img src="{{asset('images/profile/'.\App\Models\User::where('id',$post->user_id)->first()->image)}}" alt="Profile Image"></a>

                                <div class="blog-info">

                                    <h4 class="title"><a href="{{ route('teacher.post_details',$post->slug) }}"><b>{{ $post->title }}</b></a></h4>
                                    <h5 class="title"><small>post by </small><a href="{{ route('teacher.post_details',$post->slug) }}"> <span class="bagge bg-blue">{{ $post->user->name }}</span></a></h5>

                                    <ul class="post-footer">

                                        <li>
                                           <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();"
                                                   class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}"><i class="ion-heart"></i>{{ $post->favorite_to_users->count() }}</a>

                                                <form id="favorite-form-{{ $post->id }}" method="POST" action="{{ route('student.post.favorite',$post->id) }}" style="display: none;">
                                                    @csrf
                                                </form>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-chatbubble"></i>{{ $post->comments()->count() }}</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-eye"></i>{{ $post->view_count }}</a>
                                        </li>
                                    </ul>

                                </div><!-- blog-info -->
                            </div><!-- single-post -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforeach

            </div><!-- row -->

<!--            <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>-->

        </div><!-- container -->
        </section> <!--section -->
@endsection

@push('js')

@endpush