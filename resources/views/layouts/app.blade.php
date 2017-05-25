<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Weekly Report</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">




    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};


    </script>
</head>
<body>
    <div id="app">
      <div >
        <nav id="topbar" class="navbar navbar-default navbar-static-top topbarr aaaaa">
            <div class="col-md-8 col-md-offset-2">
                <div class="navbar-header">

                    <!-- Branding Image -->
                    <a id="aa"class="navbar-brand topbarr" href="{{ url('/home') }}">
                        Weekly Report
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul  class="nav navbar-nav navbar-right topbarr">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a id="aa"href="{{ route('login') }}">Login</a></li>
                            <li><a id="aa"href="{{ route('register') }}">Register</a></li>
                        @else


                        <li class="dropdownBell">
                          <a id="topbar"href="#" class="dropdown-toggle topbarr" data-toggle="dropdown" role="button" aria-expanded="false">
                             <i class="fa fa-bell-o" aria-hidden="true"></i></span>
                          </a>

                          <ul id="topbar" class="dropdown-menu topbarr" role="menu">
                              <li>
                                <form class="" action="" method="post">
                                {{--  @foreach($questions as $question)
                                  <a href="#">{{$question->title}}</a><br />
                                  @endforeach --}}
                                </form>
                              </li>
                          </ul>
                        </li>


                            <li class="dropdown topbarr">
                                <a id="topbar"href="#" class="dropdown-toggle topbarr" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul id="topbar" class="dropdown-menu topbarr" role="menu">
                                    <li>

                                        <a class="topbarr"id="topbar" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form class="topbarr" id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>


                        @endif
                    </ul>
                </div>
            </div>
        </nav>
      </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

<style>
#topbar{
  /*background-color: #5A5656!important;*/
   /*#5A5656*/
  color: white!important;
}
#aa{
  color: white;
}
</style>
