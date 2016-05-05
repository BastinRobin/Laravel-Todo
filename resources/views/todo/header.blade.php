
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::route('get_home') }}">
          <img alt="Todo" src="{{ URL::asset('img/logo.png')}}" width="150px">
        </a>
        <ul class="nav navbar-nav">

        @if(Auth::check())
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->email }} <span class="caret"></span></a>
           
          </li>
          <li><a href="{{ URL::route('get_logout') }}">Logout</a></li>
        @else
            <li><a href="{{ URL::route('get_login') }}">Login</a></li>
            <li><a href="{{ URL::route('get_signup') }}">Signup</a></li>

        @endif

        </ul>
      </div>
    </div>
  </nav>


  <div class="container">

  @if(Session::has('success'))
  <div class="alert alert-success">
    {{ Session::get('success') }}
  </div>
  @endif

  </div>