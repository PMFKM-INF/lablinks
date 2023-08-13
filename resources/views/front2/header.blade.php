<header id="masthead" class="site-header {{ (Request::is('home') || Request::is('/')) ? 'site-header' : 'site-header-white' }}">


<nav id="primary-navigation" class="site-navigation">
        <div class="container">

            <div class="navbar-header">

                <a class="site-title" href="{{route('home')}}"><span>Lab</span>Links</a>

            </div><!-- /.navbar-header -->

            <div class="collapse navbar-collapse" id="agency-navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                    <li class="{{ Request::routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                    <li class="dropdown {{ Request::routeIs('services') ? 'active' : '' }}">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<i class="fa fa-caret-down hidden-xs" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                            <li><a href="{{route('image-editing')}}">Image Editing</a></li>
                            <li><a href="{{route('custom-illustrations')}}">Custom Illustrations</a></li>
                            <li><a href="{{route('uiux-design')}}">UI/UX Design</a></li>
                        </ul>
                    </li>
                    <li class="{{ Request::routeIs('portfolio') ? 'active' : '' }}"><a href="{{ route('portfolio') }}">Portfolio</a></li>
                    <li class="{{ Request::routeIs('contact.us.index') ? 'active' : '' }}"><a href="{{ route('contact.us.index') }}">Contact</a></li>
                    @if(Auth::check() && Auth::user()->role == 'admin')
                        <li>
                            <a href="{{ route('adminpanel.dashboard') }}">Admin.</a>
                        </li>
                    @endif

                    <li>
                        @guest
                            <a class="btn btn-login btn-sm" href="{{ route('login') }}">
                                <i class="fa fa-user"></i> Login
                            </a>
                        @else
                            <a class="btn btn-login btn-sm" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-user"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest
                    </li>





                </ul>


            </div>

        </div>
    </nav><!-- /.site-navigation -->
</header><!-- /#mastheaed -->
