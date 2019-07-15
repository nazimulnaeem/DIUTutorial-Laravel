  

<div class="row">

    @foreach($questions as $question)

        <div class="col-md-4 mt-3">
    <!-- Card -->
    <div class="card">

        <!-- Card image -->
        @php  $i=1; @endphp
        @foreach($question->images as $image)
        @if($i>0)
        <a href="{{ route('question.show',$question->slug) }}">
            <img class="card-img-top" src="{{ asset('images/questions/'. $image->image) }}" alt="{{ $question->subject_name }}">
        </a>
        @endif
        @php $i--; @endphp
        @endforeach


        <!-- Card content -->
        <div class="card-body">

            <!-- Title -->
            <h4 class="card-title">
                <a href="{{ route('question.show',$question->slug) }}">{{ $question->subject_name }}</a>
            </h4>
            <p class="card-text">{{ $question->course_code }}</p>
            <!-- Text -->
            <p>{{ $question->passing_year }}</p>
            <!-- Button -->
            <a href="{{ route('question.show',$question->slug) }}" class="btn btn-primary btn-md">View question</a>

        </div>

    </div>
    <!-- Card -->
    
        </div>

    @endforeach

</div>


