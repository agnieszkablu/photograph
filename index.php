<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui ">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<title>Izabela Górz FOTOGRAFIA</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/style.css" rel="stylesheet">

</head>
<body>
	  <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.htm">Izabela Górz - Fotografia </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="omnie.html">Kim jestem..</a></li>
                <li><a href="#about">KUP moje zdjęcie</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Realizacje<span class="caret"></span></a>
                  <ul class="dropdown-menu navbar-inverse" role="menu">
                    <li class="dropdown-header">Co chcesz zobaczyć?</li>
                    <li class="divider"></li>
                    <li><a href="#">Przyroda</a></li>
                    <li><a href="#">Krajobraz</a></li>
                    <li><a href="#">Ludzie</a></li>
                  </ul>
                 </li>             
                 <li class="active"><a href="#contact">Napisz do mnie &nbsp;</a>              
                 </li>  
                                         
              </ul>
            </div>            
          </div> <!--.container -->
        </nav>

      </div>
    </div>


    <!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image: url(img/czesiu.jpg);" ></div>
                <div class="carousel-caption">
                  <h2>Przyroda.</h2>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                  <p><a class="btn btn-lg btn-primary" href="przyroda.html" role="button">Zobacz więcej zdjęć..</a></p>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image: url(img/aga.jpg);" ></div>
                <div class="carousel-caption">
                  <h2>Portrety.</h2>
                  <p>Piękniusie zdjęcia. Donec id elit non mi porta gravida at eget metus.</p>
                  <p><a class="btn btn-lg btn-primary" href="ludzie.html" role="button">Zobacz więcej zdjęć..</a></p>

                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image: url(img/lyzka.jpg);" ></div>
                <div class="carousel-caption">
                  <h2>Zdjęcia krajobrazów.</h2>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                  <p><a class="btn btn-lg btn-primary" href="inne.html" role="button">Zobacz więcej zdjęć..</a></p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
      <!-- FOOTER -->
      <footer>
      <p class="pull-left">&copy; 2015 <a href="http://www.bludesign.pl" target="_blank">bludesign.pl</a> &middot; <a href="#" target="_blank">Privacy</a> &middot; <a href="#" target="_blank">Terms</a></p> 	  
      <div class="end"></div>
      </footer>
	</div>    <!-- /.carousel -->
    </div><!-- /.container -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
		$(function(){
			$('body').hide().fadeIn(3000);
		});
	</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
