<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/MyFirstMVC/public/home">Task Manager</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/MyFirstMVC/public/home">Home</a></li>
                <li><a href="/MyFirstMVC/public/about">About</a></li>
                  <li><a href="/MyFirstMVC/public/contact">Contact</a></li>
            </ul>

        <!-- Login -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="/MyFirstMVC/public/logout" />
                                       <!--onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"-->
                                        Logout
                                    </a>

                                    <form id="logout-form" action="/MyFirstMVC/public/logout" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endguest
            </ul>

        <!-- end of login-->
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</nav><!-- /.navbar -->
<div class="row"></div>
<!--div class="jumbotron"-->
    <div class="row row-offcanvas row-offcanvas-right">

        <!--<div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>

        </div>-->
    </div>
<div class="well-lg"></div>


<!--/div-->



