<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>App Name - @yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    </head>
    <body>
        <!-- @section('sidebar')
            This is the master sidebar.
        @show -->

        <!-- nav -->
        <div id="topbar" class="header">
          <h4 id="title">Webboard
        <div id="loginButton"><button type="button" class="btn btn-primary">Login</button></div>
        <div id="regisButton"><button type="button" class="btn btn-success">Register</button></div>
          </h4>
        </div>


        <div class="body-container">

            <!-- <img id="aa" src="https://camo.mybb.com/e01de90be6012adc1b1701dba899491a9348ae79/687474703a2f2f7777772e6a71756572797363726970742e6e65742f696d616765732f53696d706c6573742d526573706f6e736976652d6a51756572792d496d6167652d4c69676874626f782d506c7567696e2d73696d706c652d6c69676874626f782e6a7067"> -->
        </div>

        <div class="container">
            @yield('content')
        </div>

        <!-- <div class="footer">
            <span class="footer-span">Copyright  © 2017 Webboard </span> -->
        </div>


    </body>
</html>

<style>

html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
}

.body-container {
    padding: 5px 55px;
    >h2 {
        color: #6C7A89;
        border-bottom-style: solid;
        border-bottom-width: 1px;
    }
    > img {
        width:100%;
    }
}

.footer {
    padding: 5px 20px;
    margin-top: 675px;
    background-color: #A7A4A4;
    height: 30px;
    color:white;
    font-size: 15px;


}

.footer-span {
    /*color: white;*/
    float: right;
}

.header {
    padding: 5px 5px;
    height: 50px;

}

#aa{
  width: 100%;
  height: 670px;
}

#loginButton{
  float: right;
  /*padding: 5px 30px;*/
  margin-right: 5px;
  margin-top: -7px;

}

#regisButton{
  float: right;
  /*padding: 5px 30px;*/
  margin-right: 5px;
  margin-top: -7px;

}

#topbar{
  background-color: #A7A4A4;
}

#title{
color: white;
}

</style>
