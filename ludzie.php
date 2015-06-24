<?php
            include 'inc/top.inc.php';
        ?>
    <link href="css/ludzie.css" rel="stylesheet">
    

</head>
<body>
<div class="container">
		<?php
            include 'inc/menu.inc.php';
        ?>
		<div id="top" class="col-sm-12">
            <h1><span>O mnie</span></h1>
        </div>
		<div class="container">
            <ul class="flex-container">
              <li class="flex-item">1</li>
              <li class="flex-item">2</li>
              <li class="flex-item">3</li>
              <li class="flex-item">4</li>
              <li class="flex-item">5</li>
              <li class="flex-item">6</li>
            </ul>
  		</div>
        <div id="push" class="container">
        	<a href="javascript:void(0);">Push me!</a>
        </div>
    <?php
		include 'inc/footer.inc.php';
	?>
</div>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
