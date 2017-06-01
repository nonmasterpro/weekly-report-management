<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
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

</head>

<div id="wrapper">
  <div class="clearfix">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav" style="margin-left:0;">
        <li class="sidebar-brand">

          <a href="#menu-toggle" id="menu-toggle" > <i class="fa fa-bars " style="font-size:20px !Important; float: right" aria-hidden="true" aria-hidden="true"></i>

        </li>
        
        <li>
        <a href="#"> <i style="margin-left: 10px;" class="fa fa-sort-alpha-asc " aria-hidden="true"> </i> <span style="margin-left:10px;">Section</span>  </a>
        </li>

        <li>
          <a href="#"> <i style="margin-left: 10px;" class="fa fa-play-circle-o " aria-hidden="true"> </i> <span style="margin-left:10px;">Section</span> </a>
        </li>

        <li>
          <a href="#"> <i style="margin-left: 10px;" class="fa fa-puzzle-piece" aria-hidden="true"> </i> <span style="margin-left:10px;">Section</span> </a>
        </li>

        <li>
          <a href="#"> <i style="margin-left: 10px;" class="fa fa-font" aria-hidden="true"> </i> <span style="margin-left:10px;">Section</span> </a>
        </li>

        <li>
          <a href="#"><i style="margin-left: 10px;" class="fa fa-info-circle " aria-hidden="true"> </i> <span style="margin-left:10px;">Section </span> </a>
        </li>

        <li>
          <a href="#"> <i style="margin-left: 10px;" class="fa fa-comment-o" aria-hidden="true"> </i> <span style="margin-left:10px;">Section</span> </a>
        </li>

      </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
         
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="fa fa-home"></span> Home</a></li>
            <li><a href="#"><span class="fa fa-comment-o" aria-hidden="true"></span> Messages </a></li>
            <li><a href="#"><span class="fa fa-question-circle" aria-hidden="true"></span> Help</a></li>
            <li><a href="#"><span class="fa fa-sign-out" aria-hidden="true"></span> Log Out</a></li>
          </ul>
        </div>
      </nav>

      <div id="page-wrapper" style="min-height:880px">
        <div class="col-lg-12">
          <div class="container-fluid">
            <h1>Simple Sidebar</h1>
            <p>This template has a responsive menu toggling system. The menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will appear/disappear. On small screens,
              the page content will be pushed off canvas.</p>
            <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>.</p>
          </div>
        </div>
      </div>

      <footer id="main_footer">
        <p class="text-muted small"><strong>Sumea Theme </strong> Designed and Created by <a href="http://www.webkom.co">www.webkom.co</a> <span class="text-muted pull-right">© 2009 - 2015. Made by <i class="fa fa-heart text-danger"></i> Kielce, Poland.</span></p>
      </footer>
    </div>
  </div>
</div>


<!-- /#page-content-wrapper -->


<!-- /#wrapper -->

<!-- jQuery -->
<script src="./assets/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="./assets/js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script src="./assets/js/custom.js"></script>

</body>

</html>

<script>
  

  var $body = $('body');

$(function() {

    $('#side-menu').metisMenu();

    //Loads the correct sidebar on window load,
    //collapses the sidebar on window resize.
    // Sets the min-height of #page-wrapper to window size

    $(window).bind("load resize", function() {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100; // 2-row-menu
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });

    var url = window.location;
    var element = $('ul.nav a').filter(function() {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }


    $('#sidebar_toggle').on('click', function(e) {
        e.preventDefault();
        $body.toggleClass('small_sidebar');

        if($body.hasClass('small_sidebar')) {
          //  $('#side-menu').find("li").has("ul").children("a").off("click.metisMenu").removeData("metisMenu");

        } else {
            $('#side-menu').metisMenu();
        }

        if( $body.hasClass('small_sidebar') ) {

            $('#side-menu [data-toggle="side_tooltip"]').tooltip({
                animation: false
            });
            $('#side-menu [data-toggle="side_tooltip_offset"]').tooltip({
                animation: false
            });

            $("[data-toggle=side_tooltip_offset]").hover(
                function(){
                    $('.tooltip').css('left',parseInt($('.tooltip').css('left')) + 160 + 'px')
                });

        } else {
            $('#side-menu [data-toggle="side_tooltip"]').tooltip('destroy');
            $('#side-menu [data-toggle="side_tooltip_offset"]').tooltip('destroy');
        }

    })

});
</script>
<script>
  $("#menu-toggle").click(function(e) {
       e.preventDefault();
       $("#wrapper").toggleClass("toggled");
   });
</script>

<style>
  #wrapper {
  padding-left: 0;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease; }

#wrapper.toggled {
  padding-left: 200px; }

#sidebar-wrapper {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 0;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background-color: #312A25;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease; }

#wrapper.toggled #sidebar-wrapper {
  width: 0; }

#page-content-wrapper {
  position: absolute;
  transition: all 0.5s ease; }

#wrapper.toggled #page-content-wrapper {
  position: absolute;
  margin-left: 50px; }

/* Sidebar Styles */
.sidebar-nav {
  position: absolute;
  top: 0;
  right: 15px;
  width: 200px;
  margin: 0;
  padding: 0;
  list-style: none; }

.sidebar-nav li {
  text-indent: 20px;
  line-height: 40px; }

.sidebar-nav li a {
  display: block;
  text-decoration: none;
  color: #999999; }

.sidebar-nav li a:hover {
  text-decoration: none;
  color: #fff;
  background: #312A25; }

.sidebar-nav li a:active,
.sidebar-nav li a:focus {
  text-decoration: none;
  color: #fff;
  background: #3E474F;
  box-shadow: inset 20px 0 0px -17px #63ce83; }

.sidebar-nav > .sidebar-brand {
  height: 65px;
  font-size: 18px; }

.sidebar-nav > .sidebar-brand a {
  color: #999999; }

.sidebar-nav > .sidebar-brand a:hover {
  color: #fff;
  background: none; }

@media (min-width: 768px) {
  #wrapper {
    padding-left: 220px; }
  #wrapper.toggled {
    padding-left: 0; }
  #sidebar-wrapper {
    width: 220px; }
  #wrapper.toggled #sidebar-wrapper {
    width: 50px; }
  #wrapper.toggled i {
    float: right; }
  #page-content-wrapper {
    position: relative; }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0; } }

@media (max-width: 414px) {
  #wrapper.toggled #page-content-wrapper {
    position: absolute;
    margin-right: 60px; }
  #wrapper.toggled {
    padding-right: 60px; }
  #wrapper {
    padding-left: 20px; }
  #wrapper.toggled {
    padding-left: 0; }
  #sidebar-wrapper {
    width: 50px; }
  #wrapper.toggled #sidebar-wrapper {
    width: 140px; }
  #wrapper.toggled span {
    visibility: visible;
    position: relative;
    left: 70px;
    bottom: 13px; }
  #wrapper.toggled i {
    float: right; }
  #wrapper i {
    float: right; }
  #page-content-wrapper {
    position: relative; }
  #wrapper.toggled #page-content-wrapper {
    position: relative;
    margin-right: 0; } }

#main_footer {
  border-top: 1px solid #e2e5e8;
  background: white;
  padding: 15px;
  position: absolute;
  bottom: 0;
  width: 100%; }

#main_footer, #page-wrapper:after {
  height: 50px; }

.main-content {
  margin: 15px; }
</style>
