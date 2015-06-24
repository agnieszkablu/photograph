<!doctype html>
<html lang="pl-PL">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui ">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	<title>Izabela Górz - moja historia</title>

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
    <link href="css/omnie.css" rel="stylesheet">
    

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
