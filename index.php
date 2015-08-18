<?php
    include 'inc/top.inc.php';
?>
	<title>Izabela Górz FOTOGRAFIA</title>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
		$(function(){
			$('body').hide().fadeIn(3000);
		});
	</script>
</head>
<body>
	  <?php
	  	include 'inc/menu.inc.php';
	  ?>


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
                <div class="fill" style="background-image: url(img/czesiu-min.jpg);" ></div>
                <div class="carousel-caption">
                  <h2>Przyroda.</h2>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                  <p><a class="btn btn-lg btn-primary" href="przyroda.php" role="button">Zobacz więcej zdjęć..</a></p>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image: url(img/aga-min.jpg);" ></div>
                <div class="carousel-caption">
                  <h2>Portrety.</h2>
                  <p>Piękniusie zdjęcia. Donec id elit non mi porta gravida at eget metus.</p>
                  <p><a class="btn btn-lg btn-primary" href="ludzie.php" role="button">Zobacz więcej zdjęć..</a></p>

                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image: url(img/lyzka-min.jpg);" ></div>
                <div class="carousel-caption">
                  <h2>Zdjęcia krajobrazów.</h2>
                  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                  <p><a class="btn btn-lg btn-primary" href="krajobraz.php" role="button">Zobacz więcej zdjęć..</a></p>
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
     <?php
	 	include 'inc/footer.inc.php';
	 ?>


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
