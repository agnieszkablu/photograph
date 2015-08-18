<?php
            include 'inc/top.inc.php';
        ?>

    <link href="css/ludzie.css" rel="stylesheet">
    <title>Portrety</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/mattbryson/TouchSwipe-Jquery-Plugin/1.6.6/jquery.touchSwipe.min.js"></script>
  <script src="js/jquery.fullsizable.js"></script>
  <script>
    $(function() {
      $('a').fullsizable({
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
            <h1><span>Portrety</span></h1>
        </div>         
          <div id="container">
         	 <div class="content">
              <div class="grid">
              <a href="img/aga-min.jpg">
              <figure class="accros">
						<img src="img/aga-min.jpg" alt="Aga"/>
						<figcaption>
							<h2>Kliknij by zobaczyć <span>zdjęcie w pełnej okazałości</span></h2>
                            <p>Canon EOS 70D<br>ISO-100 Model: Aga</p>
						</figcaption>			
					</figure>
                    </a>
                    <a href="img/aga1-min.jpg">
                     <figure class="accros">
						<img src="img/aga1-min.jpg" alt="Aga"/>
						<figcaption>
							<p>Canon EOS 70D<br>ISO-100 Model: Aga</p>
						</figcaption>			
					</figure>        
                    </a>
                    <a href="img/aga3-min.jpg">            
                     <figure class="accros">
						<img src="img/aga3-min.jpg" alt="Aga"/>
						<figcaption>
							<p>Canon EOS 70D<br>ISO-100 Model: Aga</p>
						</figcaption>			
					</figure>
                    </a>
                    <a href="img/aga4-min.jpg">
                     <figure class="accros">
						<img src="img/aga4-min.jpg" alt="Aga"/>
						<figcaption>
							<p>Canon EOS 70D<br>ISO-100 Model: Aga</p>
						</figcaption>			
					</figure>       
                    </a>             
                    </div>                   
              </div>               
         </div>        
           <div class="clearfix"></div>         
    <?php
		include 'inc/footer.inc.php';
	?>
</div>
     
     <script>
		$(function(){
			$('body').hide().fadeIn(1500);
		});
	</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
