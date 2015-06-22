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
        	
        <div class="col-sm-6 hexagon">
            <div class="hexTop"></div>
            <div class="hexBottom"></div>
        </div>
       		
        <div id="right" class="col-sm-6">
        	<h2>bla</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque accumsan porttitor viverra. Aliquam consectetur in dui a venenatis. Donec sit amet mauris porttitor, mollis velit eget, ullamcorper ligula. Pellentesque fringilla, metus eget hendrerit fringilla, quam erat efficitur nibh, vel malesuada velit lacus et orci. Donec dictum id ex id molestie. Praesent mollis id lectus ultrices tempus.
            </p>
        </div>		
        <div class="end"></div>

   
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
