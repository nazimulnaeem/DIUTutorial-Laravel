


@extends('frontend.pages.students.classroom.layouts.master')

@section('title')
Insert Question 
@endsection
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        <!-- Material form subscription -->
        <div class="col-md-2"></div>
        <div class="card col-md-5 mt-4 mb-3">

            <div class="card-header ">
                <strong class="">Add Question</strong>
            </div>

            <!--Card content-->
            <div class="card-body px-lg-5 ">

                <!-- Form -->
                <form class="" style="color: #757575;" method="post" action="{{ route('question.store') }}" enctype="multipart/form-data">
                   
                    @csrf
<!--                     for error show -->

                 <div class="form-group">
                                <label for="sname" class="form-control-label" style="color: black; font-size: 18px;">Subject Name</label>
                                <input type="text" name="subject_name" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="course_code" class="form-control-label" style="color: black; font-size: 18px;">Course Code</label>
                                <input type="text" name="course_code" class="form-control">
                            </div>
                    
                      <div class="form-group">
                                <label for="term" class="form-control-label" style="color: black; font-size: 18px;">Term</label>
                                <select name="term" class="form-control">
                                    <option>Midterm</option> 
                                    <option>Final</option>
                                </select>
                            </div>
                           
                            <div class="form-group">
                                <label for="passing_year" class="form-control-label" style="color: black; font-size: 18px;">Passing Year</label>
                                <select name="passing_year" class="form-control">
                                    <option>Spring 2017</option>
                                    <option>Summer 2017</option>
                                    <option>Fall 2017</option>
                                    <option>Spring 2018</option>
                                    <option>Summer 2018</option>
                                    <option>Fall 2018</option>
                                </select>
                            </div>

                    
                      <div class="form-group mt-3">
                        <label for="question_image" style="color: black; font-size: 18px;">Question Image</label>
                        <div class="row">
                            <div class="col-md-4">
                                 <input type="file" id="question_image" name="question_image[]" class="form-control">
                            </div>
                             <div class="col-md-4">
                                 <input type="file" id="question_image" name="question_image[]" class="form-control">
                            </div>
                             <div class="col-md-4">
                                 <input type="file" id="question_image" name="question_image[]" class="form-control">
                            </div>
                             <div class="col-md-4">
                                 <input type="file" id="question_image" name="question_image[]" class="form-control">
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="description" style="color: black; font-size: 18px;">Description</label>
                        <textarea class="form-control" name="description" rows="5" cols="40"></textarea>
                    </div>

                    <!-- Sign in button -->
                    <button class="btn btn-outline-info btn-rounded  waves-effect" type="submit">Add question</button>

                </form>
                <!-- Form -->

            </div>

        </div>
        <!-- Material form subscription -->

    </div>
    </div>
</div>
<!-- main-panel ends -->


@endsection