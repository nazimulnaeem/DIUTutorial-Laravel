@extends('student.layouts.frontend.app')

@section('title','Question')

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
   
 <div class="container mt-2">
        <div class="row">
        <div class="col-md-10"></div>
        <div class="col-md-2">
             <form class="form-inline" action="{{ route('question.search') }}" method="get">
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

                @foreach($questions as $question)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="single-post post-style-1">

                                <div class="blog-image"><img src="{{ asset('images/classroomImage/default/cse.jpg') }}" alt="{{ $question->title }}"></div>

                                <a class="avatar" href=""><img src="{{ asset('images/default/user1.png') }}" alt="Profile Image"></a>

                                <div class="blog-info">

<!--                                    <h4 class="title"><a href="{{ route('student.question_details',$question->slug) }}"><b>{{ $question->title }}</b></a></h4>-->
                                   
                                   
                                   
                                    <h3> <a href="{{ route('student.question_details',$question->slug) }}"><b>{{ $question->title }}</b></a></h3>
                                    <h4><a href="{{ route('student.question_details',$question->slug) }}"> {{ $question->course_code }}</a></h4>
                                    <a href="{{ route('student.question_details',$question->slug) }}"> {{ $question->passing_year }}</a>
                                    <h5 class="title"><small>post by </small><a href="{{ route('student.question_details',$question->slug) }}"> <span class="bagge bg-blue">{{ $question->user->name }}</span></a></h5>

                                    <ul class="post-footer">

                                       <li>
                                           <a href=""><i class="ion-heart"></i></a>

                                                
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-chatbubble"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-eye"></i>{{ $question->view_count }}</a>
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
    </section><!-- section -->
@endsection

@push('js')

@endpush