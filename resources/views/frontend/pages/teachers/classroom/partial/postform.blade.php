@extends('auth.partial.master')

@section('title')
Add post
@endsection
@section('content')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-6">
         <div class="card">
                
                 
                <div class="card-body">
                    <h2>Add a Post</h2>
                    <form action="{!! route('teacher.posts.store') !!}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="">Enter post title</label><br/>
                        <input type="text" name="title" class="form-control">
                        <label class="mt-1" for="question_image">Add file</label>
                        <div class="row">
                            <div class="col-md-6">
                                 <input type="file" id="question_image" name="post_image[]" class="form-control">
                            </div>
                        </div><br/>
                        <label for="">Enter Post Description</label><br/>
                        <textarea type="text" name="description" class="form-control" rows="5" cols="10"></textarea>
                         <div class="form-group mt-3">
                        
                    </div>
                       
                        <input type="submit" value="Submit" class="btn btn-success mt-2">
                    </form>
                </div>
            </div>
            </div>
    </div>
</div>

@endsection