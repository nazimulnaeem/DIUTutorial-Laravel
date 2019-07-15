@extends('student.layouts.frontend.app')

@section('title','Question')

@push('css')
    <link href="{{ asset('assets/frontend/css/category/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/category/responsive.css') }}" rel="stylesheet">
    <style>
        
        .favorite_posts{
            color: blue;
        }
    </style>
@endpush

@section('content')
    <div class="slider display-table center-text">
        <h1 class="title display-table-cell"><b>{{ $tag->name }}</b></h1>
    </div><!-- slider -->

       <a  class="btn btn-primary m-t-15 waves-effect mt-1 ml-2" href="{{ route('student.show.all_question') }}">BACK</a>
    <section class="blog-area section">
        <div class="container">

            <div class="row">
                @if($questions->count() > 0)
                    @foreach($questions as $question)
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100">
                                <div class="single-post post-style-1">
                                @foreach($question->tags as $key=>$tag)
                                @if ($loop->first)
                                <div class="blog-image"><img src="{{asset('images/tag/'.$tag->image)}}" alt="{{ $question->title }}"></div>
                                @endif
                                @endforeach
                                <a class="avatar" href=""><img src="{{asset('images/profile/'.\App\Models\User::where('id',$question->user_id)->first()->image)}}" alt="Profile Image"></a>

                                    <div class="blog-info">

                                        <h4 class="title"><a href="{{ route('teacher.question_details',$question->slug) }}"><b>{{ $question->title }}</b></a><br>
                                       <a href="{{ route('teacher.question_details',$question->slug) }}">{{ $question->term }}</a><br>
                                        <a href="{{ route('teacher.question_details',$question->slug) }}">{{ $question->passing_year }}</a></h4>
                                    <h5 class="title"><small>post by </small><a href="{{ route('teacher.question_details',$question->slug) }}"> <span class="bagge bg-blue">{{ $question->user->name }}</span></a></h5>

                                        <ul class="post-footer">

                                            <li>
                                                <a href=""><i class="ion-heart"></i></a>
                                               
                                            </li>
                                            <li><a href="#"><i class="ion-chatbubble"></i></a></li>
                                            <li><a href="#"><i class="ion-eye"></i>{{ $question->view_count }}</a></li>
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
                                        <strong>Sorry, There have no Question. </strong>
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