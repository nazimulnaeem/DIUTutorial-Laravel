




@extends('frontend.pages.teachers.classroom.layouts.master')

   @section('title')
View page
@endsection

        @section('content')

        
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-weight-bold" style="text-align: center; margin-top: 20px;">Our Features</h2>
                    <div class="underline" style="width:150px; margin: 0 auto; height: 4px; background-color: sandybrown;"></div>
                    <p class="font-weight-normal" style="text-align: center; font-size: 20px; margin-top: 10px; margin-bottom: 30px;">There have some features. which feature you need click there.</p>
                </div>
            </div>
        </div>

        <div class="container ">
      <div class="container container-fluid mt-3">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/viewPage/content4.jpg') }}" alt="question paper" class="img-fluid">
                </div>
               
                   
                <div class="col-md-6">
                    <h2 class="font-weight-bold" style="margin-top: 100px;">There have all course question of Daffodil International University</h2>
                    <a href="{{ route('question.view') }}" class="font-weight-light" style="font-size: 20px; margin-left: 10px; margin-top: 10px;">Load more</a>
                </div>

                <div class="col-md-6">
                    <h2 class="font-weight-bold" style="margin-top: 100px;">All faculty member are here whose slide you need please enter here.</h2>
                    <a href="{{ route('question.view') }}" class="font-weight-light" style="font-size: 20px; margin-left: 10px; margin-top: 10px;">Load more</a>
                </div>

                <div class="col-md-6 mt-4">
                    <img src="{{ asset('images/viewPage/content6.jpg') }}" alt="faculty" class="img-fluid">
                </div>

                <div class="col-md-6 mt-4">
                    <img src="{{ asset('images/viewPage/content5.jpg') }}" alt="tutorial" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <h2 class="font-weight-bold" style="margin-top: 100px;">Here some CSE related tutorial if you are interest you can watch the videos.</h2>
                    <a href="#" class="font-weight-light" style="font-size: 20px; margin-left: 10px; margin-top: 10px;">Load more</a>
                </div>

                <div class="col-md-6">
                    <h2 class="font-weight-bold" style="margin-top: 100px;">There have some question solve your course related.</h2>
                    <a href="#" class="font-weight-light" style="font-size: 20px; margin-left: 10px; margin-top: 10px;">Load more</a>
                </div>

                <div class="col-md-6 mt-4">
                    <img src="{{ asset('images/viewPage/content1.jpg') }}" alt="question solve" class="img-fluid">
                </div>
            </div>
        </div>
        </div>
            @endsection