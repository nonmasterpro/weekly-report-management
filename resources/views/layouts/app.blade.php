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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js" ></script>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://printjs-4de6.kxcdn.com/print.min.js" ></script>
  <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">



    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};


    </script>
</head>
<body>
    <div id="wrapper">

    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <div class="sidebar-brand text-center"> Tecmove</div>

       @if (Auth::guest())
        <span style="margin-left: 20px;">Hi Guest</span>
       @elseif (Auth::user()->role==1)
        <li>
          <a class="current-parent current" href="/weekly/user" > <i class="fa fa-eye"></i> <span class="menu_title"> My Weekly Reports</span></a>
        </li>
        <li>
          <a class="current-parent current" href="/weekly/create" > <i class="fa fa-calendar-plus-o"></i> <span class="menu_title"> Create Weekly Report</span></a>
        </li>
        @elseif (Auth::user()->role==2)
        <li>
          <a class="current-parent current" href="/weekly" > <i class="fa fa-eye"></i> <span class="menu_title"> Weekly Reports</span></a>
        </li>
        @elseif (Auth::user()->role==3)
        <li>
          <a class="current-parent current" href="/user" > <i class="fa fa-eye"></i> <span class="menu_title"> Users Management</span></a>
        </li>
        @endif

       
        

      </ul>
    </div>

      <div >
        <nav id="topbar" class="navbar navbar-default navbar-static-top topbarr aaaaa">
            <div class="col-md-12">
                <div class="navbar-header">


                    <a style="color: white;" class="navbar-brand" href="#menu-toggle" id="menu-toggle">
                    <span class="fa fa-align-justify" aria-hidden="true"></span></a>


                    <!-- Branding Image -->
                    <a id="aa"class="navbar-brand topbarr" href="{{ url('/') }}">
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
                        <li><a style="color: white;" href="{{ url('/') }}"><span style="color: white;" class="fa fa-home" aria-hidden="true"></span> Home</a></li>

                        @if (Auth::guest())
                            <li><a id="aa"href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                            <li><a id="aa"href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
                        @else

                            <li class="dropdown topbarr">
                                <a id="topbar"href="#" class="dropdown-toggle topbarr" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul id="topbar" class="dropdown-menu topbarr" role="menu">
                                    <li>

                                        <a class="topbarr"id="topbar" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout
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

    <script>
  $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
});
</script>

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
