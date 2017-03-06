<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
       
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            #img1{
                width: 300px;
                height: 200px;
            }
            #iconBlog{
                float:right;
                padding-left:5px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>
                    <br>
                    <i class="fa fa-car"></i>
                    <i class="fa fa-car" style="font-size:48px;"></i>
                    <i class="fa fa-car" style="font-size:60px;color:red;"></i>
                    <div> <button type="button" class="btn btn-primary">Primary</button>
                    <div> <button type="button" class="btn btn-success">Success</button>
                    <p>Click me away!</p>
                    <p>Click me too!</p>
                     </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>

        <div>
            <div class="panel panel-default">
                <img id="img1" src="http://www.magazinehive.com/wp-content/uploads/2013/01/nature-view.jpg" alt="Smiley face" width="42" height="42">
                <div class="panel-body">
                    <h6>1 day ago</h6>
                    <h4><strong>A Basic Panel</strong></h4>
                    <h5>
                        Hello, My name is Teerapong Boonmak. <br>
                        I come from Phayao. <br>
                        Test Bootstrap,Jquery,Fontawesome.
                    </h5>
                    <hr>
                    
                    <div>
                    <h6>Posted by <strong>Teerapong</strong> 
                    <i id="iconBlog" class="fa fa-heart" aria-hidden="true"></i>
                    <i id="iconBlog" class="fa fa-comment-o" aria-hidden="true"></i>
                    <i id="iconBlog" class="fa fa-share" aria-hidden="true"></i>
                    </h6>
                    </div>

                    </div>
            </div>   
        </div>

<script>
$(document).ready(function(){
    $("p").click(function(){
        $(this).hide();
    });
});
</script>

        

    </body>
</html>
