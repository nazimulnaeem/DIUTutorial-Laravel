@extends('student.layouts.frontend.app')

@section('title')
{{ $questions->title }}
@endsection

@push('css')
    <link href="{{ asset('assets/frontend/css/home/styles.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/frontend/css/home/responsive.css') }}" rel="stylesheet">
    
      <link href="{{ asset('assets/frontend/css/single-post/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/single-post/responsive.css') }}" rel="stylesheet">
    
    <style>
        .favorite_posts{
            color: blue;
        }
        .embed-responsive-item{
            min-height: 500px !important;
        }
    </style>
@endpush

@section('content')
   
    
    <section class="post-area section mt-3">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-12 no-right-padding">

                    <div class="main-post">

                        <div class="blog-post-inner">

                            <div class="post-info">

                                <div class="left-area">
                                    <a class="avatar" href="#"><img src="{{asset('images/profile/'.\App\Models\User::where('id',$questions->user_id)->first()->image)}}" alt="Profile Image"></a>
                                </div>

                                <div class="middle-area">
                                    <a class="name" href="#"><b>{{ $questions->user->name }}</b></a>
                                    <h6 class="date">on {{ $questions->created_at->diffForHumans() }}</h6>
                                </div>

                            </div><!-- post-info -->
                            <embed class="d-block w-100 embed-responsive-item" src="{!! asset('upload/question/file/'.$questions->image) !!}"></embed>
                          
                        </div><!-- blog-post-inner -->

                        


                    </div><!-- main-post -->
                </div><!-- col-lg-8 col-md-12 -->

                <div class="col-lg-4 col-md-12 no-left-padding">

                    <div class="single-post info-area">

                        <div class="sidebar-area about-area">
                            <h4 class="title"><b>ABOUT QUESTION</b></h4>
                            
                            <h4 class="title"><a href="#">Subjct Name : <b> {{ $questions->title }}</b></a></h4>
                            <div class="description mt-3">
                           <div class="para">
                               Course Code : 
                          <b> {{ $questions->course_code }}</b>
                            </div>
                            <div class="para">
                                Term :
                           <b>{{ $questions->term }}</b>
                            </div>
                           <div class="para">
                               Passing Year : 
                               <b>{{ $questions->passing_year }}</b>
                           </div><br>
                           <div class="para">
                                {!! html_entity_decode($questions->body) !!}
                            </div>
            </div>
                        </div>
                       <form action="" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group ml-2">
                                
                                <label class="form-label"><h4>Add Question Answer</h4></label>
                                <input type="file" name="image">
                                <p>Must be PDF file</p>
                            </div>

                            <a  class="btn btn-danger m-t-15 waves-effect ml-2" href="{{ route('student.show.all_question') }}">BACK</a>
                            <button type="submit" class="btn btn-primary m-t-15 waves-effect mr-2">SUBMIT</button>
                        </form>


                    </div><!-- info-area -->

                </div><!-- col-lg-4 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
    </section><!-- post-area -->
    
       <section class="comment-section mt-3">
        <div class="container">
            <h4><b>ADD COMMENT</b></h4>
            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="comment-form">
                       
                            <form method="post" action="">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="comment" rows="2" class="text-area-messge form-control"
                                                  placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >
                                    </div><!-- col-sm-12 -->
                                    <div class="col-sm-12">
                                        <button class="submit-btn" type="submit" id="form-submit"><b>SUBMIT COMMENT</b></button>
                                    </div><!-- col-sm-12 -->

                                </div><!-- row -->
                            </form>
                    </div><!-- comment-form -->

                    <h4><b>COMMENTS</b></h4>
                   
                           
                    

                    <div class="commnets-area ">

                        <div class="comment">
                            <p>No Comment yet.</p>
                    </div>
                    </div>


                </div><!-- col-lg-8 col-md-12 -->

            </div><!-- row -->

        </div><!-- container -->
    </section>
    
@endsection

@push('js')

@endpush