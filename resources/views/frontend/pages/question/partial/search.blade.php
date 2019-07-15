


        @extends('frontend.layouts.master')

                @section('title')
                Search Question 
                @endsection
                @section('content')


        <div class="container mrgt-20">
            <div class="row">
                <div class="col-md-2">


                </div>

                <div class="col-md-10">
                    <div class="widget mt-3">
                        <h3>Search question for <span class="badge badge-primary">{{ $search }}</span></h3>

                        @include('frontend.pages.question.partial.all_question')

                    </div>
                </div>

            </div>
        </div>


                @endsection
