<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Articles') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" >
  </head>
  <body>
	  <div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
			  </div>
			  <div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				@if(Auth::check())
				  <li class="{{ Request::is('new-article') ? "active" : "" }}"><a href="{{ url('/new-article') }}">New article</a></li>
					<li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
							</form>
					</li>
                @else
                  <li class="{{ Request::is('login') ? "active" : "" }}"><a href="{{ url('/login') }}">Login</a></li>
				  <li class="{{ Request::is('register') ? "active" : "" }}"><a href="{{ url('/register') }}">Register</a></li>
				@endif
				</ul>
			  </div>
			</div>
		  </nav>
			@yield('main')
	</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>