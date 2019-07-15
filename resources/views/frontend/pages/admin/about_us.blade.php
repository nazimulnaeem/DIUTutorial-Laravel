
@extends('frontend.pages.students.classroom.layouts.master')
@section('title')
About admin
@endsection

@section('content')

 <div class=" container-fluid" style="background-color: #8FD200; height: 650px;">
        <div class="maincontainer ">
            <div class="row">
                <div class="">
                    <div class="thecard" style=" margin-left: 90%; margin-top: 50px;">
                        <div class="thefront">
                            
                            <img class="rounded-circle" src="{{ asset('images/aboutAdmin/aninda.jpg') }}" style=" width: 200px;
                                 height: 190px; margin-top: 20px; margin-bottom: 20px;" alt="have an image">
                            <h3 class="font-weight-bold" style="margin-top:30px; text-align: center; color: #A6A6A6;">Aninda Debnath</h3>
                            <hr align="center" width="60%">
                            <p class="font-weight-normal" style="text-align:center; font-size: 20px; color: #A6A6A6;">Web Designer</p>
                        </div>
                        <div class="theback">
                            <h4 class="font-weight-bold" style="margin-top:100px; color: #A6A6A6;">About me</h4>
                            <hr align="center" width="50%">
                            <p class="font-weight-normal" style="text-align: left; margin-left: 7px; font-size:18px; margin-top: 20px;">This is Aninda Debnath coming from daffodil international university.
                            Last year last semester in computer science and engineer.</p>
                            
                            <hr align="center" width="90%">
                            <div class="social-icon">
                                <a class="icon" href="" style=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a class="icon" href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a class="icon" href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    

                    <div class="thecard" style=" margin-left: 220%; margin-top: 170px; margin-bottom: 20px;">
                        <div class="thefront">
                            
                            <img class="rounded-circle" src="{{ asset('images/aboutAdmin/naeem.JPG') }}" style=" width: 200px;
                                 height: 190px; margin-top: 20px; margin-bottom: 20px;" alt="have an image">
                            <h3 class="font-weight-bold" style="margin-top:20px; text-align: center; color: #A6A6A6;">Md. Nazimul Islam Naeem</h3>
                            <hr align="center" width="60%">
                            <p class="font-weight-normal" style="text-align:center; font-size: 20px; color: #A6A6A6;">Web Developer</p>
                        </div>
                        <div class="theback">
                            <h4 class="font-weight-bold" style="margin-top:100px; color: #A6A6A6;">About me</h4>
                            <hr align="center" width="50%">
                            <p class="font-weight-normal" style="text-align: left; margin-left: 7px; font-size:18px; margin-top: 20px;">This is Aninda Debnath coming from daffodil international university.
                            Last year last semester in computer science and engineer.</p>
                            
                            <hr align="center" width="90%">
                            <div class="social-icon">
                                <a class="icon" href="" style=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a class="icon" href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a class="icon" href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>
        </div>
        </div>

@endsection