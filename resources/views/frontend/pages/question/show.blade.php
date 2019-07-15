 

@extends('frontend.pages.students.classroom.layouts.master')

@section('title')
Question sight
@endsection
@section('content')






<div class="container mrgt-20 mt-3">
    <div class="row">


        <div class="col-md-8">

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    @php $i=1; @endphp
                    @foreach($question->images as $image)
                    <div class=" product-item carousel-item {{ $i==1 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ asset('images/questions/'.$image->image) }}" alt="{{ $question->subject_name }}">
                    </div>
                    @php $i++; @endphp
                    @endforeach 
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="widget">
                <h2>{{ $question->subject_name }}</h2>
            </div>
             <div class="widget">
                 <p>{{ $question->passing_year }}</p>
            </div>
            <div class="product-description">
                {!! $question->description !!}
            </div>
            <div class="widget">

            </div>
        </div>
    </div>
</div>

@endsection
