


@extends('backend.pages.admin.layouts.master')

@section('title')
Update student info
@endsection
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        <!-- Material form subscription -->
        <div class="col-md-2"></div>
        <div class="card col-md-7">

            <div class="card-header ">
                <strong>Update Student info</strong>
            </div>

            <!--Card content-->
            <div class="card-body px-lg-5 ">

                   <!-- Form -->
                <form class="" style="color: #757575;" method="post" action="{{ route('admin.student.update',$students->id) }}" enctype="multipart/form-data">
                   
                    @csrf
<!--                     for error show -->

                 <div class="form-group">
                                <label for="student_name" class="form-control-label">Student Name</label>
                                <input type="text" name="student_name" class="form-control" value="{{ $students->name }}">
                            </div>
                             <div class="form-group">
                                <label for="email" class="form-control-label">Email account</label>
                                <input type="email" name="email" class="form-control" value="{{ $students->email }}">
                            </div>
                    
                   
                    <!-- Sign in button -->
                    <button class="btn btn-outline-info btn-rounded  waves-effect" type="submit">Update info</button>

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