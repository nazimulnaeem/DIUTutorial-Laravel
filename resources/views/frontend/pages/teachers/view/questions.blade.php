


@extends('frontend.pages.teachers.classroom.layouts.master')

@section('title')
Question sight
@endsection
@section('content')

<section id="section" class="py-4 mb-0 bg-primary mt-3">
    <div class="container">
        <div class="row">
<!--            <div class="col-md-4"></div>-->
            <div class="col-md-8">
                <!--                        <div class="input-group">
                                             <input type="text" class="form-control mr-2" placeholder="Course Code">
                                            <input type="text" class="form-control" placeholder="mid or final">
                                            <span class="input-group-btn">
                                                <button class="btn btn-sm btn-light">Search</button>
                                            </span>
                                        </div>-->
                <!--<li class="nav-item ml-5">-->
                <form class="form-inline" action="{{ route('search') }}" method="get">
                    <div class="md-form my-0 mr-auto">
                        <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search question" aria-label="Search">
                    </div>
                </form>
                <!--      </li>-->

            </div>

        </div>
    </div>

</section>


@include('frontend.pages.teachers.view.partial.upload_question')

<div class="container mt-3">
    <div class="row">
        
        @include('frontend.pages.teachers.view.partial.all_question')
      
    </div>
</div>


@endsection