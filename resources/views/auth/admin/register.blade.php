
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            @yield('title','Registration page')
        </title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="{{ asset('bootstrap/css/mdb.min.css') }}" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="{{ asset('bootstrap/css/style.css') }}" rel="stylesheet">
<!--        <link href="{{ asset('css/parsley.css') }}" rel="stylesheet">-->
<!--        <link href="{{ asset('css/style.css') }}" rel="stylesheet">-->
    </head>

    <body>
        
         <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                       <ul class="navbar-nav mr-auto">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('index') }}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false">Features</a>
                                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Question</a>
                                    <a class="dropdown-item" href="#">Faculty</a>
                                    <a class="dropdown-item" href="#">Classroom</a>
                                    <a class="dropdown-item" href="#">Question solve</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Contact us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">About us</a>
                            </li>

                        </ul>


                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>
                     

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">

                                <!-- Authentication Links -->
                                @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('registration') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle mr-1" style="width:30px;">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href=""
                                       onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        
    
        
        <div class="container-fluid registration" style="    margin-top: 0px;
             margin-bottom: 40px;
             height: 600px;
             padding-top: 30px;
             padding-bottom: 80px;
             background-image: url('images/frontCarousel/0.jpg');
             background-attachment: fixed;
             background-size: cover;
             ">
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <!--                    <div class="register col-md-5">-->
                    <div class=" col-md-6 text-white d-flex align-items-center rgba-grey-light py-5 px-6">
                        
                     <form class="" style="color: #757575;" method="post" action="{{ route('registration') }}" enctype="multipart/form-data">

                        @csrf
                        <!--                     for error show -->

                        <div class="form-group row">
                            <label for="name" class="col-md-4 form-control-label  text-md-right" style="color: white; font-size: 18px;"> Name</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="enter your name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 form-control-label  text-md-right" style="color: white; font-size: 18px;">UserName</label>
                            <div class="col-md-6">
                                <input type="text" name="username" class="form-control" placeholder="enter your username">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 form-control-label  text-md-right" style="color: white; font-size: 18px;">Type</label>
                           <div class="col-md-6">
                            <select class="form-control" name="role_id">
                                <option value="2">Student</option>
                                <option value="3">Teacher</option>
                            </select>
                           </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 form-control-label  text-md-right" style="color: white; font-size: 18px;">E-mail</label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="name@diu.edu.bd">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 form-control-label  text-md-right" style="color: white; font-size: 18px;">Password</label>
                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control" placeholder="******">
                            </div>
                        </div>
                       
                         <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 form-control-label  text-md-right" style="color: white; font-size: 18px;">Confirm Password</label>
                            <div class="col-md-6">   
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="******" required>
                            </div>
                        </div>


                       
 <p  style="margin-left: 80px; color: white;">Use 6 or more characters with a mix of letters, numbers & symbols</p>
                       
                        <!-- Sign in button -->
                        <div class="form-group row">
                            <div class="col-md-4">
                            </div>
                        <button class="btn btn-success btn-md" type="submit">Register</button>
                        </div>
                    </form>
                    </div>
                </div>

            </div>
        </div>

<!--<div class="main-panel">
    <div class="content-wrapper">
        <div class="row justify-content-center">
             Material form subscription 
            <div class="col-md-4"></div>
            <div class="card col-md-7 mt-5 mb-3 ">
<div class="card">
                <div class="card-header ">
                    <strong class="">Registration</strong>
                </div>

                Card content
                <div class="card-body px-lg-5 ">

                     Form 
                    <form class="" style="color: #757575;" method="post" action="{{ route('registration') }}" enctype="multipart/form-data">

                        @csrf
                                             for error show 

                        <div class="form-group row">
                            <label for="name" class="col-md-4 form-control-label  text-md-right" style="color: black; font-size: 18px;"> Name</label>
                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="enter your name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="username" class="col-md-4 form-control-label  text-md-right" style="color: black; font-size: 18px;">UserName</label>
                            <div class="col-md-6">
                                <input type="text" name="username" class="form-control" placeholder="enter your username">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role_id" class="col-md-4 form-control-label  text-md-right" style="color: black; font-size: 18px;">Type</label>
                           <div class="col-md-6">
                            <select class="form-control" name="role_id">
                                <option value="2">Student</option>
                                <option value="3">Teacher</option>
                            </select>
                           </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 form-control-label  text-md-right" style="color: black; font-size: 18px;">E-mail</label>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="name@diu.edu.bd">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 form-control-label  text-md-right" style="color: black; font-size: 18px;">Password</label>
                            <div class="col-md-6">
                                <input type="password" name="password" class="form-control" placeholder="******">
                            </div>
                        </div>
                       
                         <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 form-control-label  text-md-right" style="color: black; font-size: 18px;">Confirm Password</label>
                            <div class="col-md-6">   
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="******" required>
                            </div>
                        </div>


                       
 <p  style="margin-left: 80px; color: #6891B1;">Use 6 or more characters with a mix of letters, numbers & symbols</p>
                       
                         Sign in button 
                        <div class="form-group row">
                            <div class="col-md-4">
                            </div>
                        <button class="btn btn-primary btn-md" type="submit">Register</button>
                        </div>
                    </form>
                     Form 

                </div>

            </div>
             Material form subscription 

        </div>
        </div>
    </div>
</div>-->

           <!-- SCRIPTS -->
        <!-- JQuery -->
        <script type="text/javascript" src="{{ asset('bootstrap/js/jquery-3.3.1.min.js') }}"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="{{ asset('bootstrap/js/mdb.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
    </body>



</html>
