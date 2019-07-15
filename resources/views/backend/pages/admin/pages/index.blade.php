
@extends('backend.pages.admin.layouts.master')

@section('content')

<div class="main-panel">
        <div class="content-wrapper">
            <div class="card-body">
                <h3>Welcome to our admin pannel</h3>
                <br><br>
                <p>
                    <a href="{{ route('index') }}" class="btn btn-success">Visit main sight</a>
                </p>
            </div>
        
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">DIU_Tutorial 
              <i class="mdi mdi-heart text-danger"></i>
            </span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
      
      
      @endsection