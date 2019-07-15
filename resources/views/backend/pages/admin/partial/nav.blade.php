<!-- partial:partials/_navbar.html -->
<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{  route('admin.dashboard') }}">
            <img src="{{ asset('images/viewPage/content5.jpg') }}" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{  route('admin.dashboard') }}">
            <img src="{{ asset('images/aboutAdmin/naeem.JPG') }}" alt="logo" />
        </a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Features</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('question.view') }}">Question</a>
                    <a class="dropdown-item" href="{{ route('frontend.student.show.all_faculty') }}">Classroom</a>
                    <a class="dropdown-item" href="{{ route('user.dashboard') }}">Student dashboard</a>
                    <a class="dropdown-item" href="{{ route('teacher.dashboard') }}">Teacher dashboard</a>
                    <a class="dropdown-item" href="#">Question solve</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('about_us') }}">About us</a>
            </li>

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
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>
<!-- partial -->