<nav class="navbar navbar-default navbar-inverse">
    <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('articles') }}">Articles</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li><a href="{{ url('auth/login') }}">Login</a></li>
                <li><a href="{{ url('auth/register') }}">Register</a></li>
            @else
                <li class="dropdown"><a href="#">{{ Auth::user()->name }}</a></li>
                <li><a href="{{ url('auth/logout') }}">Logout</a></li>
            @endif
            </ul>
        </div>
    </div>
</nav>
