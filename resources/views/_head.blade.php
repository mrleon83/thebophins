<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>The Bophins @yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
   
<style>
.navbar-brand {
  transform: translateX(-50%);
  left: 50%;
  position: absolute;
}
 
 
/* DEMO example styles for logo image */
.navbar-brand {
  padding: 0px;
}
.navbar-brand>img {
  height: 100%;
  width: auto;
  padding: 7px 14px;
}
</style>
  </head>
 
  
  
<body style="background-color: #000;">
  <!--facebook bits-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<div class="container">
<div class="row">
                <div class="col md-12">
    <img src="images/bophinslogo.png" alt="the bophins logo" style="display: block; margin: 0 auto; max-height: 8vw">
    </div>
</div>
<!--start of header-->
<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #000;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse dual-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                      <a class="nav-link" href="/" style="text-align: center">Home |</a>
            </li>
            <li class="nav-item">
                      <a class="nav-link" href="about" style="text-align: center">About |</a>
            </li>
            <li class="nav-item">
                      <a class="nav-link" href="media" style="text-align: center">Media |</a>
            </li>
            <li class="nav-item">
                      <a class="nav-link" href="bookbophins" style="text-align: center">Book The Bophins |</a>
            </li>
        </ul>
    </div>
   
    <div class="navbar-collapse collapse dual-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                              <a class="nav-link" href="https://www.facebook.com/thebophins/" style="text-align: center" target="_BLANK"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
            </li>
            <li class="nav-item">
                               <a class="nav-link" href="https://www.instagram.com/thebophins/" style="text-align: center" target="_BLANK"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a>
            </li>
             <li class="nav-item">
                               <a class="nav-link" href="https://www.youtube.com/thebophins/" style="text-align: center" target="_BLANK"><i class="fa fa-youtube" aria-hidden="true"></i> Youtube</a>
            </li>
            <li class="nav-item">
                  <a class="nav-link" href="https://open.spotify.com/artist/2KeABUnA7sAu5V9xEpMhqO" style="text-align: center" target="_BLANK"><i class="fa fa-spotify" aria-hidden="true"></i> Spotify</a>
            </li>
        </ul>
    </div>
</nav>
</div> 