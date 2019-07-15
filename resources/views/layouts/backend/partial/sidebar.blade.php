<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
         <div class="media">
            <div class="media-left">
                <div class="image">
                    <img class="media-object image-circle" src="{{asset('images/profile/'.Auth::user()->image)}}" width="48" height="48" alt="User">
                </div>
            </div>
            <div class="media-body">
                <p class="media-heading" aria-haspopup="true" aria-expanded="false" style="font-size: 14px; color: skyblue;">{{ Auth::user()->name }}
                </p>
                <p class="email" style="font-size: 12px; color: skyblue;">{{ Auth::user()->email }}</p>
            </div>
        </div>
        
        <div class="info-container">
            
            <div class="btn-group user-helper-dropdown"  style="color: skyblue;">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">

                    <li>
                        <a href="{{ Auth::user()->role->id == 1 ? route('admin.settings') : route('teacher.settings')}}"><i class="material-icons">settings</i>Settings</a>
                    </li>

                    <li role="seperator" class="divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="material-icons">input</i>Sign Out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>

          @if(Request::is('admin*'))
                <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/tag*') ? 'active' : '' }}">
                    <a href="{{ route('admin.tag.index') }}">
                        <i class="material-icons">label</i>
                        <span>Subject</span>
                    </a>
                </li>
                
                  <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                    <a href="{{ route('admin.category.index') }}">
                        <i class="material-icons">apps</i>
                        <span>Category</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/question*') ? 'active' : '' }}">
                    <a href="{{ route('admin.question.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>Question Paper</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/post*') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>Posts</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/pending/post') ? 'active' : '' }}">
                    <a href="{{ route('admin.post.pending') }}">
                        <i class="material-icons">library_books</i>
                        <span>Pending Posts</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/favorite') ? 'active' : '' }}">
                    <a href="{{ route('admin.favorite.index') }}">
                        <i class="material-icons">favorite</i>
                        <span>Favorite Posts</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/comments') ? 'active' : '' }}">
                    <a href="{{ route('admin.comment.index') }}">
                        <i class="material-icons">comment</i>
                        <span>Comments</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/teacher') ? 'active' : '' }}">
                    <a href="{{ route('admin.teacher.index') }}">
                        <i class="material-icons">account_circle</i>
                        <span>Teacher</span>
                    </a>
                </li>
                <li class="{{ Request::is('admin/student') ? 'active' : '' }}">
                    <a href="{{ route('admin.student.index') }}">
                        <i class="material-icons">account_circle</i>
                        <span>Student</span>
                    </a>
                </li>
<!--                <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}">
                    <a href="">
                        <i class="material-icons">library_books</i>
                        <span>Question Paper</span>
                    </a>
                </li>-->
                
                <li class="header">System</li>
                <li class="{{ Request::is('admin/settings') ? 'active' : '' }}">
                    <a href="{{ route('admin.settings') }}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
                
              
            @endif
            @if(Request::is('teacher*'))
                <li class="{{ Request::is('teacher/dashboard') ? 'active' : '' }}">
                    <a href="{{ route('teacher.dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>
             
                  <li class="{{ Request::is('teacher/post*') ? 'active' : '' }}">
                    <a href="{{ route('teacher.post.index') }}">
                        <i class="material-icons">library_books</i>
                        <span>Posts by Own</span>
                    </a>
                </li>
<!--                whos page teacher can access-->

                <li class="{{ Request::is('teacher/teacher_post*') ? 'active' : '' }}">
                    <a href="{{ route('teacher.show.teacher_all_post') }}">
                        <i class="material-icons">library_books</i>
                        <span>Teacher All Post</span>
                    </a>
                </li>
                <li class="{{ Request::is('teacher/favorite_post*') ? 'active' : '' }}">
                    <a href="{{ route('teacher.favorite.post') }}">
                        <i class="material-icons">favorite</i>
                        <span>Favorite Post</span>
                    </a>
                </li>
                <li class="{{ Request::is('teacher/all_question*') ? 'active' : '' }}">
                    <a href="{{ route('teacher.show.all_question') }}">
                        <i class="material-icons">library_books</i>
                        <span>Question Paper</span>
                    </a>
                </li>
                <li class="{{ Request::is('teacher/faculty_member*') ? 'active' : '' }}">
                    <a href="{{ route('teacher.show.all_faculty') }}">
                        <i class="material-icons">library_books</i>
                        <span>Faculty Member</span>
                    </a>
                </li>
                
<!--                end access page-->
                
               

                <li class="{{ Request::is('teacher/comments') ? 'active' : '' }}">
                    <a href="{{ route('teacher.comment.index') }}">
                        <i class="material-icons">comment</i>
                        <span>Comments</span>
                    </a>
                </li>

                <li class="header">System</li>
                 <li class="{{ Request::is('teacher/settings') ? 'active' : '' }}">
                    <a href="{{ route('teacher.settings') }}">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="material-icons">input</i>
                        <span>Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @endif

        </ul>
    </div>
    <!-- #Menu -->
    <!-- Footer -->
    <div class="legal">
        <div class="copyright">
            &copy; 2019 <a href="javascript:void(0);">DIU Tutorial</a>
        </div>
        <div class="version">
<!--            <b>Version: </b> 1.0.5-->
        </div>
    </div>
    <!-- #Footer -->
</aside>