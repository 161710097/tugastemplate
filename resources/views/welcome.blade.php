<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="1.jpg">
  <link rel="stylesheet" type="text/css" href="">
  <link rel="icon" type="img/png" href="image/chel.png">

  <title>CHELSEA</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    </head>
    <body>

        <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <!--logo start-->
      <a  class="logo">CHEL<span class="lite">SEA</span></a>
      <!--logo end-->
      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          <!-- task notificatoin start -->
        </header>
    </ul>
</div>
</header>
</section>

        <style type="text/css">
            .body{
    background:#0f51bc ;
    max-height: 50px;
    color: #fff;
}
        </style>

        
      
            
          <br><br><br><br><center><img src="image/chel.png"></center>
          <center><p>
              <B><h3>CHELSEA</h3></B>
          </p></center>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <center><button class="btn btn-info"><a href="{{ url('/home') }}">Home</a></button></center>
                    @else
                        <center>
                        <button class="btn btn-info"><a href="{{ url('/login') }}">Login</a></button> &nbsp;&nbsp;
                        <button class="btn btn-info"><a href="{{ url('/register') }}">Register</a></center></button>
                    @endif
                </div>
            @endif
        </div><br><br>

        <style type="text/css">
    *{margin:0px auto;}
#container{
    position:relative;
}
 
#header{
    background:#0cf;
    padding:10px;
}
#content{
    padding:10px;
}
#footer{
    height:50px;
    line-height:50px;
    background:#202428;
    color:#f9fbfc;
}
</style>


<div id="container">
    <div id="footer">
        <center> Copyright &copy; 2018
        Designed by CahayaGilang </center>
    </div>
</div>
             
    </body>
</html>
