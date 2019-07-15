

@extends('frontend.layouts.master')
@section('title')
Teacher Classroom
@endsection

@section('content')

<div class="container-fluid"
             style="
             height: 300px;
             padding: strem;
             background-image: url(img/classr.jpg);
             background-size: cover;">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
        
        
        
        
        
        <section id="section" class="py-4 mb-4 bg-faded">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                    
                     <div class="col-md-3">
                        <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#documentModal">
                             Document
                        </a>
                    </div>
                    
                     <div class="col-md-3">
                        <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#fileModal">
                            Upload File
                        </a>
                    </div>
     
                </div>
            </div>
            
        </section>
        
        
          <div class="modal fade" id="fileModal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title">Upload your file</h5>
                        <button class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input type="text" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="category" class="form-control-label">Category</label>
                                <select class="form-control">
                                    <option>Question</option>
                                    <option>Powerpoint Slide</option>
                                    <option>Question Solve</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="category" class="form-control-label">Term</label>
                                <select class="form-control">
                                    <option>Spring</option>
                                    <option>Summer</option>
                                    <option>Fall</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="subjectName" class="form-control-label">Subject Name</label>
                                <input type="text" class="form-control">
                            </div>
                             <div class="form-group">
                                <label for="file">Upload File</label>
                                <input type="file" class="form-control-file" id="file">
                                <small class="form-text text-muted"> Max 5MB</small>
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea name="editor1" class="form-control"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <button class="btn btn-warning" data-dismiss="modal">Upload</button>
                    </div>
                </div>
            </div>
        </div>

@endsection