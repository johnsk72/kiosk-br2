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
                	<img class="headericon" src="../images/academics.svg" alt="">
                </div>
            </div>
            <div class="row gutter">
            	<div class="col">
                	<h1>Academics</h1>
                	<h3>Exam Schedule</h3>
                </div>
            </div>
       	</div>
        <div class="content">
            <div class="row gutter">
                <div class="nav col m2 s2 xs2">
					<?php include("sidenav.php");?>
                </div>
                <div class="col m10 s10 xs10">
                	<div class="col m12 s12 xs12">
                        <div class="row gutter">
                            <div class="col m10 s10">
                                <h3>Here is your schedule based on <br> the times of your class(es) given.</h3>                           
                            </div>                          
                        </div>                       
                	</div>
                </div>
        	</div>
        </div>
		<div class="footer-picture">
			<img src="../images/flite.png">
		</div>
	</div>
    <!-- JS and Jquery go here -->
</body>
</html>