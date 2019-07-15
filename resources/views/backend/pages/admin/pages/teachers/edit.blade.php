


@extends('backend.pages.admin.layouts.master')

@section('title')
Update teacher info
@endsection
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
        <!-- Material form subscription -->
        <div class="col-md-3"></div>
        <div class="card col-md-6">

            <div class="card-header ">
                <strong>Edit teacher info</strong>
            </div>

            <!--Card content-->
            <div class="card-body px-lg-5 ">

                   <!-- Form -->
                <form class="" style="color: #757575;" method="post" action="{{ route('admin.teacher.update',$teachers->id) }}" enctype="multipart/form-data">
                   
                    @csrf
<!--                     for error show -->

                 <div class="form-group">
                                <label for="sname" class="form-control-label">Teacher Name </label>
                                <input type="text" name="teacher_name" class="form-control" value="{{ $teachers->name }}">
                            </div>
                             <div class="form-group">
                                <label for="email" class="form-control-label">Email account</label>
                                <input type="email" name="email" class="form-control" value="{{ $teachers->email }}">
                            </div>
                    
                       <div class="form-group">
                                <label for="phone_no" class="form-control-label">Phone number</label>
                                <input type="number" name="phone_no" class="form-control" value="{{ $teachers->phone_no }}">
                            </div>

                    <!-- Sign in button -->
                    <button class="btn btn-outline-info btn-rounded  waves-effect" type="submit">Update teacher info</button>

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