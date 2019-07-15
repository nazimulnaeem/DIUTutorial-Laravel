<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="{{ route('index') }}">DIU Tutorial</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('teacher.dashboard') }}">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Features</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('teacher.question.view') }}">Question</a>
                     <a class="dropdown-item" href="{{ route('frontend.student.show.all_faculty') }}">Faculty member</a>
                    <a class="dropdown-item" href="frontend.teacher.classroom">Classroom</a>
                    <a class="dropdown-item" href="#">Question solve</a>
                </div>
            </li>
<!--            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
            </li>-->
<!--            <li class="nav-item">
                <a class="nav-link" href="{{ route('about_us') }}">About us</a>
            </li>-->

                <!--      <li class="nav-item ml-5">
                          <form class="form-inline" action="{{ route('search') }}" method="get">
                      <div class="md-form my-0">
                          <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
                      </div>
                    </form>
                      </li>-->

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
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <img src="{{ App\Helpers\ImageHelper::getUserImage(Auth::user()->id) }}" class="img rounded-circle mr-1" style="width:30px;">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </li>
           
            
            <div class="font-weight-normal">
                <ul>
                    <li  class="nav-item">
                        <a class="nav-link" href="" style="color: white;"><i class="fa fa-plus mr-1"></i>Create Class</a>
                    </li>
                </ul>
            </div>
            
            <div class="font-weight-normal">
                <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color: white;"><i class="fa fa-user mr-1"></i>LoginClass</a>
                    </li>
                </ul>
            </div>
            
            
        </ul>


    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->