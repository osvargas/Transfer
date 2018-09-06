<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <div id="wrapper">
           <nav class="nav-extended">
               <div class="row">
            <div class="col s12">
                <div class="col s3">k</div>
                <div class="col s3">k</div>
                <div class="col s3">k</div>
                <div class="col s3">k</div>
            </div>
</div>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo"><img src="img/logotipo.png"></a>
                <a data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">HOME</a></li>
                    <li><a href="badges.html">TRANSPORTATION</a></li>
                    <li><a href="collapsible.html">VIP</a></li>
                    <li><a href="sass.html">ABOUT US</a></li>
                    <li><a href="sass.html">HOTEL TO HOTEL</a></li>
                    <li><a href="sass.html">HOLBOX</a></li>
                    <li><a href="sass.html">TOURS</a></li>
                    <li><a href="sass.html">PRIVATE TOURS</a></li>
                    <li><a href="sass.html">MAPS</a></li>
                    <li><a href="sass.html">BLOG</a></li>
                    <li><a href="sass.html">CONTACT</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
        </ul>
        <div class="carousel carousel-slider">
    <a class="carousel-item" href="#one!"><img src="img/banner01.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="img/baner02.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="img/banner03.jpg"></a>
  </div>
    </div>
    
    <script type="text/javascript" src="js/jquery.js"></script>

    <script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
    $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: false,
    duration:100,
  });
  });

  
  
  
        </script>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>
