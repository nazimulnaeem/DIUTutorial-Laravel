


        @extends('frontend.layouts.master')

        @section('title')
        DIU Tutorial
        @endsection
        @section('content')

        <!--Carousel Wrapper-->
        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active" style="max-height: 590px;">
                    <img class="d-block w-100" src="{{ asset('images/frontCarousel/0.jpg') }}" alt="First slide">
                   
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item" style="max-height: 590px;">
                    <img class="d-block w-100" src="{{ asset('images/frontCarousel/tem5.jpg') }}" alt="Second slide">
                    
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item" style="max-height: 590px;">
                    <img class="d-block w-100" src="{{ asset('images/frontCarousel/tem2.jpg') }}" alt="Third slide">
                   
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->


        <div class="container-fluid offer pt-3 pb-3" style="background-color: #DEE1E6; height: 350px; margin-top: 10px;">
            <div class="container mt-5 main-point">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style=" 

                             text-align: center;
                             /*                             margin-top: 20px;
                                                          color: sandybrown;*/
                             background-color: transparent;
                             font-weight: 600;">
                            <i class="fa fa-book" aria-hidden="true" style="color: sandybrown; font-size: 60px; padding-top: 20px;"></i>
                            <div class="card-body">
                                <h2>Question Bank</h2>
                                <p>There have some some question type.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style=" text-align: center;
                             /*                             margin-top: 20px;
                                                          color: sandybrown;*/
                             background-color: transparent;
                             font-weight: 600;">
                            <i class="fa fa-user" aria-hidden="true" style="color: sandybrown; font-size: 60px; padding-top: 20px;"></i>
                            <div class="card-body">
                                <h2>Faculty</h2>
                                <p>There have all faculty member.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="text-align: center;
                             /*                             margin-top: 20px;
                                                          color: sandybrown;*/
                             background-color: transparent;
                             font-weight: 600;">
                            <i class="fa fa-youtube" aria-hidden="true" style="color: sandybrown; font-size: 60px; padding-top: 20px;"></i>
                            <div class="card-body">
                                <h2>Video Tutorial</h2>
                                <p>There have some course related tutorial.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="text-align: center;
                             /*                             margin-top: 20px;
                                                          color: sandybrown;*/
                             background-color: transparent;
                             font-weight: 600;">
                            <i class="fa fa-file" aria-hidden="true" style="color: sandybrown; font-size: 60px; padding-top: 20px;"></i>
                            <div class="card-body">
                                <h2>Upload file's</h2>
                                <p>If you want you can upload file.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        @endsection