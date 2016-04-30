<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kisok-BR2</title>
        <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="../css/kiosk.css" type="text/css" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
	</header>
	<div class="container">
    	<header>
			<?php include("../infoheader.php");?>
        </header>
        <div class="pageheader">
        	<div class="row gutter">
            	<div class="col">
                	<img class="headericon" src="../images/student.svg" alt="">
                </div>
            </div>
            <div class="row gutter">
            	<div class="col">
                	<h1>Student Life</h1>
                	<h3>Bulldog Highlight</h3>
                </div>
            </div>
       	</div>
        <div class="content">
            <div class="row gutter">
                <div class="nav col m2 s2 xs2">
					<?php include("sidenav.php");?>
                </div>
				<div class="something-columns-here">
					<img class="bulldog-highlight" src="../images/john-smith.jpg">
					<h4>John Smith</h4>
					<p>This is a random bulldog higlight. This will feature a current student in the college that the signage is located in with a description of what they are going to school for, what makes them so special, and where they are going in their life. I don’t know what else to write, so this is it.</p>
				</div>
        	</div>
        </div>
	</div>
    <!-- JS and Jquery go here -->
</body>
</html>