@extends('student.layouts.frontend.app')

@section('title')
{{ $teacher->name }}
@endsection
@push('css')
    <link href="{{ asset('assets/frontend/css/category/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/category/responsive.css') }}" rel="stylesheet">
    <style>
/*        .slider{
            height: 400px;
            width: 100%;
            background-image: url('images/frontCarousel/0.jpg');
            background-size: cover;
        }*/

        .favorite_posts{
            color: blue;
        }
    </style>
@endpush

@section('content')
    <div class=" slider display-table center-text">
        <h1 class="title display-table-cell"><b>{{ $teacher->name }}</b></h1>
    </div><!-- slider -->

    <div class="container mt-2">
        <div class="row">
       <a  class="btn btn-primary m-t-15 waves-effect mt-1 ml-2" href="{{ route('student.show.all_faculty') }}">BACK</a>
        <div class="col-md-8"></div>
        <div class="col-md-2">
             <form class="form-inline" action="{{ route('post.search') }}" method="get">
                    <div class="md-form my-0 mr-auto">
                        <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search your favorite topics" aria-label="Search">
<!--                <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>-->
                    </div>
                </form>
        </div>
    </div>
</div>
       
       <section class="blog-area section">
        <div class="container">

            <div class="row">
                @if($posts->count() > 0)
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100">
                                <div class="single-post post-style-1">
                                 @foreach($post->tags as $key=>$tag)
                                @if ($loop->first)
                                <div class="blog-image"><img src="{{asset('images/tag/'.$tag->image)}}" alt="{{ $post->title }}"></div>
                                @endif
                                @endforeach
                                    <a class="avatar" href=""><img src="{{ asset('images/profile/'.$teacher->image) }}" alt="Profile Image"></a>

                                    <div class="blog-info">

                                        <h4 class="title"><a href="{{ route('student.post_details',$post->slug) }}"><b>{{ $post->title }}</b></a></h4>
                                    <h5 class="title"><small>post by </small><a href="{{ route('student.post_details',$post->slug) }}"> <span class="bagge bg-blue">{{ $post->user->name }}</span></a></h5>

                                        <ul class="post-footer">

                                            <li>
                                                @guest
                                                    <a href="javascript:void(0);" onclick="toastr.info('To add favorite list. You need to login first.','Info',{
                                                        closeButton: true,
                                                        progressBar: true,
                                                    })"><i class="ion-heart"></i>{{ $post->favorite_to_users->count() }}</a>
                                                @else
                                                    <a href="javascript:void(0);" onclick="document.getElementById('favorite-form-{{ $post->id }}').submit();"
                                                       class="{{ !Auth::user()->favorite_posts->where('pivot.post_id',$post->id)->count()  == 0 ? 'favorite_posts' : ''}}"><i class="ion-heart"></i>{{ $post->favorite_to_users->count() }}</a>

                                                    <form id="favorite-form-{{ $post->id }}" method="POST" action="" style="display: none;">
                                                        @csrf
                                                    </form>
                                                @endguest

                                            </li>
                                            <li><a href="#"><i class="ion-chatbubble"></i>{{ $post->comments->count() }}</a></li>
                                            <li><a href="#"><i class="ion-eye"></i>{{ $post->view_count }}</a></li>
                                        </ul>

                                    </div><!-- blog-info -->
                                </div><!-- single-post -->
                            </div><!-- card -->
                        </div><!-- col-lg-4 col-md-6 -->
                    @endforeach
                @else
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="single-post post-style-1">
                                <div class="blog-info">
                                    <h4 class="title">
                                        <strong>Sorry, There have no post. </strong>
                                    </h4>
                                </div><!-- blog-info -->
                            </div><!-- single-post -->
                        </div><!-- card -->
                    </div><!-- col-lg-4 col-md-6 -->
                @endif


            </div><!-- row -->

            {{--{{ $posts->links() }}--}}

        </div><!-- container -->
    </section><!-- section -->

@endsection

@push('js')

@endpush