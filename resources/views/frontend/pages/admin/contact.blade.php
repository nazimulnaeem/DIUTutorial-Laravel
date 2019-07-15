


@extends('frontend.pages.students.classroom.layouts.master1')

@section('title')
Contact with us
@endsection

@section('content')

        <!-- Material form contact -->
        <div class="container" style="margin-top: 20px; margin-bottom: 10px;">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-6">
                    <div class="card">

                        <h5 class="card-header info-color white-text text-center py-4">
                            <strong>Contact us</strong>
                        </h5>

                        <!--Card content-->
                        <div class="card-body px-lg-5 pt-0">

                            <!-- Form -->
                            <form class="text-center" style="color: #757575;">

                                <!-- Name -->
                                <div class="md-form mt-3">
                                    <input type="text" id="materialContactFormName" class="form-control">
                                    <label for="materialContactFormName">Name</label>
                                </div>

                                <!-- E-mail -->
                                <div class="md-form">
                                    <input type="email" id="materialContactFormEmail" class="form-control">
                                    <label for="materialContactFormEmail">E-mail</label>
                                </div>


                                <!--Message-->
                                <div class="md-form">
                                    <textarea type="text" id="materialContactFormMessage" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="materialContactFormMessage">Message</label>
                                </div>

                                <!--             Copy 
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="materialContactFormCopy">
                                                <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
                                            </div>-->

                                <!-- Send button -->
                                <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit"
                                        style="border-radius: 25px;">Send</button>

                            </form>
                            <!-- Form -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Material form contact -->
@endsection