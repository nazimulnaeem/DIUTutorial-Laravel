

@extends('frontend.pages.students.classroom.layouts.master')
@section('title')
All faculty member
@endsection

@section('content')


<div class="container">
    <div class="row">
        
    @foreach($teachers as $teacher)

        <div class="col-md-3 mt-3">
    <!-- Card -->
    <div class="card">

        <!-- Card image -->
       
        <a href="" >
            <img class="card-img-top" src="{{ asset('images/default/user.png') }}" alt="{{ $teacher->name }}" style="height: 160px;">
        </a>
       

        <!-- Card content -->
        <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">
                <a href="">{{ $teacher->name }}</a>
            </h4>
            <p>{{ $teacher->designation }}</p>

            <!-- Text -->
            <p class="card-text"></p>
            <!-- Button -->
            <a href="" class="btn btn-md btn-primary ">View Details</a>

        </div>

    </div>
    <!-- Card -->
    
        </div>

    @endforeach
    
    </div>
</div>


@endsection