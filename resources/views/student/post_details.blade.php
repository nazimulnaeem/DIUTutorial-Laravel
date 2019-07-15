@extends('student.layouts.frontend.app')

@section('title')
{{ $post->title }}
@endsection

@push('css')
    <link href="{{ asset('assets/frontend/css/home/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">
    
      <link href="{{ asset('assets/frontend/css/single-post/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/single-post/responsive.css') }}" rel="stylesheet">
    
    <style>
        .favorite_posts{
            color: blue;
        }
        .embed-responsive-item{
            min-height: 500px !important;
        }
    </style>
@endpush

@section('content')
   
    
    
    
   <section class="post-area section mt-3">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-12 no-right-padding">

                    <div class="main-post">

                        <div class="blog-post-inner">

                            <div class="post-info">

                                <div class="left-area">
                                <a class="avatar" href=""><img src="{{asset('images/profile/'.\App\Models\User::where('id',$post->user_id)->first()->image)}}" alt="Profile Image"></a>
                                </div>

                                <div class="middle-area">
                                    <a class="name" href="#"><b>{{ $post->user->name }}</b></a>
                                    <h6 class="date">on {{ $post->created_at->diffForHumans() }}</h6>
                                </div>

                            </div><!-- post-info -->
                            <div class="para">
                                {!! html_entity_decode($post->body) !!}
                            </div>
                            <embed class="d-block w-100 embed-responsive-item" src="{!! asset('upload/file/'.$post->image) !!}"></embed>

                        </div><!-- blog-post-inner -->

                        


                    </div><!-- main-post -->
                </div><!-- col-lg-8 col-md-12 -->

                <div class="col-lg-4 col-md-12 no-left-padding">

                    <div class="single-post info-area">

                        <div class="sidebar-area about-area">
                            <h4 class="title"><b>ABOUT POST</b></h4>
                            
                            <h3 class="title"><a href="#"><b>{{ $post->title }}</b></a></h3>
                        </div>

<!--             <div class="widget">
                 <p>{{ $post->created_at->diffForHumans() }}</p>
            </div>-->

                    </div><!-- info-area -->

                            <a  class="btn btn-success m-t-15 waves-effect ml-3" href="{{ route('student.show.teacher_all_post') }}">BACK</a>
                </div><!-- col-lg-4 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
    </section><!-- post-area -->
    
    <section class="recomended-area section mt-3">
        <div class="container">
            <div class="row">
                @foreach($randomposts as $randompost)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="single-post post-style-1">

                                  @foreach($post->tags as $key=>$tag)
                                @if ($loop->first)
                                <div class="tag-image"><img src="{{asset('images/tag/'.$tag->image)}}" alt="{{ $randompost->title }}"></div>
                                @endif
                                @endforeach
                                
                                <a class="avatar" href=""><img src="{{asset('images/profile/'.\App\Models\User::where('id',$post->user_id)->first()->image)}}" alt="Profile Image"></a>

                                <div class="blog-info">

                                    <h4 class="title"><a href=""><b>{{ $randompost->title }}</b></a></h4>

                                    <ul class="post-footer">

                                        <li>
                                            @guest
                                                <a href="javascript:void(0);" onclick="toastr.info('To add favorite list. You need to login first.','Info',{
                                                    closeButton: true,
                                                    progressBar: true,
                                                })"><i class="ion-heart"></i>{{ $randompost->favorite_to_users->count() }}</a>
                                            @else
                                                <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $randompost->id }}').submit();"
                                                   class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$randompost->id)->count()  == 0 ? 'favorite_posts' : ''}}"><i class="ion-heart"></i>{{ $post->favorite_to_users->count() }}</a>

                                                <form id="favorite-form-{{ $randompost->id }}" method="POST" action="{{ route('student.post.favorite',$randompost->id) }}" style="display: none;">
                                                    @csrf
                                                </form>
                                            @endguest

                                        </li>
                                        <li><a href="#"><i class="ion-chatbubble"></i>{{ $randompost->comments->count() }}</a></li>
                                        <li><a href="#"><i class="ion-eye"></i>{{ $randompost->view_count }}</a></li>
                                    </ul>

                                </div><!-- blog-info -->
                            </div><!-- single-post -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endforeach
            </div><!-- row -->

        </div><!-- container -->
    </section>
    
       <section class="comment-section mt-3">
        <div class="container">
            <h4><b>ADD COMMENT</b></h4>
            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="comment-form">
                       
                            <form method="post" action="{{ route('student.comment.store',$post->id) }}">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="comment" rows="2" class="text-area-messge form-control"
                                                  placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >
                                    </div><!-- col-sm-12 -->
                                    <div class="col-sm-12">
                                        <button class="submit-btn" type="submit" id="form-submit"><b>SUBMIT COMMENT</b></button>
                                    </div><!-- col-sm-12 -->

                                </div><!-- row -->
                            </form>
                    </div><!-- comment-form -->

                    <h4><b>COMMENTS({{ $post->comments()->count() }})</b></h4>
                    @if($post->comments->count() > 0)
                        @foreach($post->comments as $comment)
                            <div class="commnets-area ">

                                <div class="comment">

                                    <div class="post-info">
                                        <div class="left-area">
                                           <img class="img rounded-circle mr-1" src="{{asset('images/profile/'.Auth::user()->image)}}"   alt="User">
                     <span class="caret"></span>
                 </div>
                                        <div class="middle-area">
                                            <a class="name" href="#"><b>{{ $comment->user->name }}</b></a>
                                            <small class="date">on {{ $comment->created_at->diffForHumans()}}</small>
                                        </div>

                                    </div><!-- post-info -->

                                    <p>{{ $comment->comment }}</p>

                                </div>

                            </div><!-- commnets-area -->
                        @endforeach
                    @else

                    <div class="commnets-area ">

                        <div class="comment">
                            <p>No Comment yet.</p>
                    </div>
                    </div>

                    @endif

                </div><!-- col-lg-8 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
    </section>
    
     
    
@endsection

@push('js')

@endpush