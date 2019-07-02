<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="css/style_sheet.css" rel="stylesheet" type="text/css">
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arapey:400,400i&display=swap" rel="stylesheet">
    <link href="css/lightpick.css" rel="stylesheet" />
    <link type="text/css" rel="stylesheet" href="css/featherlight.css" />
    <link type="text/css" rel="stylesheet" href="css/featherlight.gallery.css" />
    <link type="text/css" rel="stylesheet" href="css/testi.css" />
   <link rel="stylesheet" href="css/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <script src="js/npm.js"></script>
   

<script src="js/jquery-2.1.3.min.js"></script>
    <link href="css/pagecrossfade.css" rel="stylesheet" type="text/css">
    <script src="js/pagecrossfade.js"></script>
    <script>
        $(function() {
            $('body').pageCrossFade({
                duration: 500,
                easing: 'swing',
                links: 'internal'
            });
        });

    </script>
    <style>
    body {
  animation: pagecrossfade 1s;
  -webkit-transition-timing-function: ease-in-out;
  transition-timing-function: ease-in-out; }

@keyframe pagecrossfade {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

@-webkit-keyframes pagecrossfade {
  from {
    opacity: 0; }
  to {
    opacity: 1; } }

    </style>
    <script>
    $(window).on('load', function() { // makes sure the whole site is loaded 
  $('#status').fadeOut(); // will first fade out the loading animation 
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
  $('body').delay(350).css({'overflow':'visible'});
})
    
    </script>
    
</head>


<!-- Preloader -->
<!--<div id="preloader">
  <div id="status">&nbsp;</div>
</div>-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
            <a class="navbar-brand linky"  href="index.php"><img src="images/logo.svg" class="img-responsive"></a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"   >


            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Locations<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                         <li><a href="#"><strong>Kodaikanal</strong></a></li>
                        <li><a href="meghadhootam.php" class="linky">&nbsp;&nbsp;Meghadhootam</a></li>
                        <li><a href="birkenhead.php"  class="linky">&nbsp;&nbsp;Birkenhead</a></li>
                        
                          <li role="separator" class="divider"></li>
                        
                        <li><a href="#"><strong>Coonoor</strong></a></li>
                        <li><a href="cliffside.php" class="linky">&nbsp;&nbsp;Xanadu</a></li>
                        <li><a href="birdsong.php" class="linky">&nbsp;&nbsp;Birdsong</a></li>
                        
                          <li role="separator" class="divider"></li>
                            <li><a href="#"><strong>Gudalur</strong></a></li>
               
                        <li><a href="froghill.php" class="linky">&nbsp;&nbsp;Frog hill</a></li>


                    </ul>
                </li>

                <li><a href="#" class="linky">Packages</a></li>
                <li><a href="our-story.php" class="linky">Our Story</a></li>


                <li><a href="experience.php" class="linky">Experiences</a></li>
                <li><a href="faq.php" class="linky">FAQ</a></li>
                <li><a href="contact.php" class="linky">Contact</a></li>
                  <li><a href="#"></a></li>
                 <li><a href="booking.php" class="myButton-header hidden-xs hidden-sm linky">BOOK NOW</a></li>
            </ul>
        </div>


    </div>

</nav>
