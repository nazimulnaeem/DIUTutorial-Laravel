<header>
    <div class="container-fluid position-relative no-side-padding">

        <a href="{{ route('index') }}" class="logo">DIU Tutorial</a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{ route('user.dashboard') }}">Home</a></li>
            <li><a href="">Posts</a></li>
             <li><a href="">Faculty Member</a></li>
             <li><a href="{{ route('contact') }}">Contact Us</a></li>
            
            
        </ul><!-- main-menu -->

        <div class="src-area">
            <form method="GET" action="{{ route('search') }}">
                <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                <input class="src-input" value="{{ isset($query) ? $query : '' }}" name="query" type="text" placeholder="Type of search">
            </form>
        </div>

    </div><!-- conatiner -->
</header>
