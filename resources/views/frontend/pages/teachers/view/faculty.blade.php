

@extends('frontend.pages.teachers.classroom.layouts.master')
@section('title')
All faculty member
@endsection

@section('content')


<div class="container">
    <div class="row">
        
    @foreach($teachers as $teacher)

        <div class="col-md-4 mt-3">
    <!-- Card -->
    <div class="card">

        <!-- Card image -->
       
        <a href="">
            <img class="card-img-top" src="{{ asset('images/classroomImage/default/classr.jpg') }}" alt="{{ $teacher->name }}">
        </a>
       

        <!-- Card content -->
        <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">
                <a href="{{ route('frontend.teacher.classroom') }}">{{ $teacher->name }}</a>
            </h4>
            <p>{{ $teacher->email }}</p>

            <!-- Text -->
            <p class="card-text"></p>
            <!-- Button -->
            <a href="{{ route('frontend.teacher.classroom') }}" class="btn btn-md btn-primary ">View Material</a>

        </div>

    </div>
    <!-- Card -->
    
        </div>

    @endforeach
    
    </div>
</div>


@endsection