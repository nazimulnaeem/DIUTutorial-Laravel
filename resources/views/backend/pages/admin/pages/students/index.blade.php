


@extends('backend.pages.admin.layouts.master')

@section('title')
Manage Student
@endsection
@section('content')


<div class="main-panel">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <!-- Material form subscription -->

                <div class="card col-md-12 mt-2 mb-3">

                    <div class="card-header ">
                        <strong>Manage Student</strong>
                    </div>


                    
                    <table class="table table-hover table-striped mt-3 mb-3">
                        <tr>
                            <th>#</th>
                            <th>Student name</th>
                            <th>Email account</th>
                            <th>Action</th>
                        </tr>
                        @foreach($students as $student)

                        <tr>
                            <td>#</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                           
                            <td>
                                <a href="{{ route('admin.student.edit',$student->id) }}" class="btn btn-success btn-sm">Edit</a>
                              
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
                                                <form method="post" action="{!! route('admin.student.delete',$student->id) !!}">
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