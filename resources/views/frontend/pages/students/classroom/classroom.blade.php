

            @extends('frontend.pages.students.classroom.layouts.master1')
            @section('title')
            Teacher Classroom
            @endsection

            @section('content')

            <div class="container-fluid">

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="fluid mt-3">
                                <a>
                                    <img src="{{ asset('images/classroomImage/default/classr.jpg') }}" alt="question paper" class="img-fluid"
                                         style="height: 350px; border-radius: 15px;
                                         padding: strem;  
                                         background-size: cover;
                                         width: 1300px;">
                                </a>

                            </div> 

                        </div>
                    </div>
                </div>

            </div>


            @include('frontend.pages.students.classroom.partial.document')

            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">

                        <div class="card card-body mb-3">
                            <h2>All post</h2>
                            @foreach($posts as $post)
                            <div  class="card card-body mt-2">
                                <h3>{{ $post->title }}</h3>
                                <h5>{{ $post->teacher->name }}</h5>
                                <hr>
                                <div>
                                    {!! $post->description !!}
                                </div>


                            </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>



            @endsection