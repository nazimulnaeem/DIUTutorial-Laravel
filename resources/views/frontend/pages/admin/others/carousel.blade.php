
  @extends('frontend.layouts.master')
@section('title')
Carousel image
@endsection

@section('content')

<div class="container mt-3">
                <div class="row">

                    <div class=" col-md-5"></div>

                    <!--                    <div class="register col-md-5">-->
                    <div class=" col-md-5 text-white d-flex align-items-center rgba-black-light py-5 px-4">
                        
                        <form class="form-horizontal" method="POST" action="{{ route('carousel_image.store') }}">
                            @csrf
                            <h1 class="text-center">Create Carousel Image</h1>
                             <div class="form-group mt-3">
                        
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
                            <div class="col-md-4">
                                 <input type="file" id="question_image" name="question_image[]" class="form-control">
                            </div>
                            <div class="col-md-4">
                                 <input type="file" id="question_image" name="question_image[]" class="form-control">
                            </div>
                            
                        </div>
                    </div>
                           
                            <!--                            <a href="#"><div class="btn btn-light" name="btn">Submit</div></a>-->
                            <div>
                                <button type="submit" name="btn" class="btn btn-sm btn-gray ">Submit</button>
                                <button type="reset" name="clear" class="btn btn-sm btn-gray">Clear</button>
                            </div>
                            
                        </form>

                    </div>
                </div>

            </div>
@endsection