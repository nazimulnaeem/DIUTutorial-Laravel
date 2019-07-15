@extends('teacher.layouts.frontend.app')

@section('title','All Faculty Member')

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

                @foreach($teachers as $teacher)
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="single-post post-style-1">

<!--                                <div class="blog-image"><img src="{{ asset('images/teacherpostimage/user-img-background.jpg') }}" alt="{{ $teacher->name }}"></div>-->


<!--                                    <h4 class="title"><a href=""><b></b></a></h4>-->
                                 <a class="avatar mt-3" href="{{ route('teacher.view.teacher_post',['id' =>$teacher->id]) }}"><img src="{{ asset('images/profile/'.$teacher->image) }}" alt="Profile Image"></a>

                                <div class="blog-info">
                                    
                                    <h4 class="title"><a href="{{ route('teacher.view.teacher_post',['id' =>$teacher->id]) }}"><b>{{ $teacher->name }}</b><br></a>
                                        <a href="{{ route('teacher.view.teacher_post',['id' =>$teacher->id]) }}">{{ $teacher->email }}</a><br>
                                    <a href="{{ route('teacher.view.teacher_post',['id' =>$teacher->id]) }}">Designation : <span class="bagge bg-blue">{{ $teacher->designation }}</span></a>
                                    </h4>

                                   

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