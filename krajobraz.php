<?php
            include 'inc/top.inc.php';
        ?>

    <link href="css/ludzie.css" rel="stylesheet">
    <title>Zdjęcia krajobrazów</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/mattbryson/TouchSwipe-Jquery-Plugin/1.6.6/jquery.touchSwipe.min.js"></script>
  <script src="js/jquery.fullsizable.js"></script>
  <script>
    $(function() {
      $('a.res').fullsizable({
        detach_id: 'container'
      });

      $(document).on('fullsizable:opened', function(){
        $("#jquery-fullsizable").swipe({
          swipeLeft: function(){
            $(document).trigger('fullsizable:next')
          },
          swipeRight: function(){
            $(document).trigger('fullsizable:prev')
          },
          swipeUp: function(){
            $(document).trigger('fullsizable:close')
          }
        });
      });
    });
  </script>
</head>
<body>
<div class="container">
		<?php
            include 'inc/menu.inc.php';
        ?>
		<div id="top" class="col-sm-12">
            <h1><span>Zdjęcia krajobrazów itp</span></h1>
        </div>         
         	 <div class="content">
              <div class="grid">
              <a class="res" href="img/gory.jpg">
              <figure class="accros">
						<img src="img/gory.jpg" alt="Aga"/>
						<figcaption>
							<h2>Klik!<span> <br />full screen</span></h2>
                            <p>Canon EOS 70D<br>ISO-100 Model: Aga</p>
						</figcaption>			
					</figure>
                    </a>
                    <a class="res" href="img/brno.jpg">
                     <figure class="accros">
						<img src="img/brno.jpg" alt="Aga"/>
						<figcaption>
							<p>Canon EOS 70D<br>ISO-100 Model: Aga</p>
						</figcaption>			
					</figure>        
                    </a>
                    <a class="res" href="img/lyzka.jpg">            
                     <figure class="accros">
						<img src="img/lyzka.jpg" alt="Aga"/>
						<figcaption>
							<p>Canon EOS 70D<br>ISO-100 Model: Aga</p>
						</figcaption>			
					</figure>
                    </a>
                    <a class="res" href="img/serce.jpg">
                     <figure class="accros">
						<img src="img/serce.jpg" alt="Aga"/>
						<figcaption>
							<p>Canon EOS 70D<br>ISO-100 Model: Aga</p>
						</figcaption>			
					</figure>       
                    </a>             
                    </div>                   
              </div>                       
           <div class="clearfix"></div>         
    <?php
		include 'inc/footer.inc.php';
	?>
</div>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
