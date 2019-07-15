<header>
    <div class="container-fluid position-relative no-side-padding">

        <a href="{{ route('index') }}" class="logo">DIU Tutorial</a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{ route('user.dashboard') }}">Home</a></li>
            <li><a href="{{ route('student.show.teacher_all_post') }}">All Posts</a></li>
            <li><a href="{{ route('student.show.all_question') }}">All question</a></li>
             <li><a href="{{ route('frontend.student.show.all_faculty') }}">Faculty Member</a></li>
             <li><a href="{{ route('contact') }}">Contact Us</a></li>
            
            
        </ul><!-- main-menu -->

           


    </div><!-- conatiner -->
    
</header>
