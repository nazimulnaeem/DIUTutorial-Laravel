<header>
    <div class="container-fluid position-relative no-side-padding">

        <a href="{{ route('index') }}" class="logo">DIU Tutorial</a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{ route('teacher.dashboard') }}">Home</a></li>
            <li><a href="{{ route('teacher.show.teacher_all_post') }}">All Posts</a></li>
            <li><a href="{{ route('teacher.favorite.post') }}">Favorite Post</a></li>
             <li><a href="{{ route('teacher.show.all_faculty') }}">Faculty Member</a></li>
             <li><a href="{{ route('teacher.show.all_question') }}">All question</a></li>
            
            
        </ul><!-- main-menu -->

        <li class="nav-item  ml-auto mb-0">
                <a id="navbarDropdown" style="margin-left: 330px;" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <img class="img rounded-circle mr-1" src="{{asset('images/profile/'.Auth::user()->image)}}" style="width: 30px !important; height:30px !important;"  alt="User">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
             <a class="mr-3" style="margin-left: 400px;"href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                        <i class="icon ion-log-out" style="font-size:16px;"></i>
                        {{ __('Logout') }}
                        <a href="{{ route('student.settings') }}"><i class="icon ion-gear-b mr-1" style="font-size:16px;" ></i>Settings</a>
                    
            </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
           


            </li>


    </div><!-- conatiner -->

</header>
