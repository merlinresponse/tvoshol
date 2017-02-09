<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gasthof 't Voshol Admin</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


    <link href="/slim/slim.min.css" rel="stylesheet">
<!--
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
  -->
    <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Gasthof 't Voshol
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">


                    <li><a href="/reservation">Alle reservaties</a></li>


                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Boodschap<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="/message">Alle boodschappen</a></li>
                              <li><a href="/message/create">Nieuwe boodschap</a></li>
                            </ul>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Uren<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="/hour">Alle openingsuren</a></li>
                              <li><a href="/hour/create">Nieuw openingsuur</a></li>
                            </ul>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Afbeeldingen<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="/picture">Alle afbeeldingen</a></li>
                              <li><a href="/picture/create">Nieuwe afbeelding</a></li>
                            </ul>
                    </li>
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menukaarten<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="/card">Alle kaarten</a></li>
                              <li><a href="/card/create">Nieuwe kaart</a></li>
                            </ul>
                    </li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class ="row">
            <div class="col-md-12">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </div>
        </div>
    </div>

    @yield('content')

    <!-- JavaScripts -->
    <!--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>

    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <script src="/slim/slim.kickstart.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
          $('#datetimepicker1').datetimepicker(
            {
              stepping: 15,
              format: 'D / MM / YYYY, HH:mm',
              sideBySide: true

            }
          );
      });
    </script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
