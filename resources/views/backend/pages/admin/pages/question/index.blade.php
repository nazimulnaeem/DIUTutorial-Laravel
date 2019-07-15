


@extends('backend.pages.admin.layouts.master')

@section('title')
Manage Question 
@endsection
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <!-- Material form subscription -->

                <div class="card col-md-12 mt-2 mb-3">

                    <div class="card-header ">
                        <strong>Manage question</strong>
                    </div>


                    
                    <table class="table table-hover table-striped mt-3 mb-3">
                        <tr>
                            <th>#</th>
                            <th>Subject name</th>
                            <th>Course code</th>
                            <th>Term</th>
                            <th>Passing year</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        @foreach($questions as $question)

                        <tr>
                            <td>#</td>
                            <td>{{ $question->subject_name }}</td>
                            <td>{{ $question->course_code }}</td>
                            <td>{{ $question->term }}</td>
                            <td>{{ $question->passing_year }}</td>
                            <td>
                            <img src="{!! asset('images/questions/'.$question->image) !!}" width="100">
                            </td>
                            <td>
                                <a href="{{ route('question.edit',$question->id) }}" class="btn btn-success btn-sm">Edit</a>
                              
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal">
                                    Delete
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Are you want to delete ?</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="{!! route('question.delete',$question->id) !!}">
                                                    @csrf
                                                    <button type="button" class="btn btn-primary">Permanently Delete</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        @endforeach
                    </table>

                </div>
                <!-- Material form subscription -->

            </div>
        </div>
    </div>
</div>
<!-- main-panel ends -->


@endsection