<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Recursos para autosuficiencia</title>

    <!-- Bootstrap core CSS -->
{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css') !!}

<!-- Custom styles for this template -->
{!! Html::style('css/navbar-top-fixed.css') !!}


<!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
{!! Html::style('css/font-awesome.min.css') !!}

{!! Html::style('css/AdminLTE.min.css') !!}

{!! Html::style('css/_all-skins.min.css') !!}
{!! Html::style('css/google_fonts.css') !!}

<!-- Theme style -->
</head>

<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">Recursos de autosuficiencia</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('members')}}">Miembros <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
    </div>
</nav>

<div class="container">
    <br>
    @yield('content')
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{!! Html::script("https://code.jquery.com/jquery-3.2.1.min.js") !!}
<script>window.jQuery || document.write('<script src="{{ url('https://code.jquery.com/jquery-3.2.1.min.js') }}"><\/script>')</script>
{!! Html::script('js/popper.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
{!! Html::script('js/ie10-viewport-bug-workaround.js') !!}
<!-- AdminLTE App -->
{!! Html::script('js/adminlte.min.js') !!}
{!! Html::script('js/icheck.js') !!}


@yield('scripts')

</body>
</html>
