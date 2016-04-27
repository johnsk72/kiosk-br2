<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kisok-BR2</title>
        <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="css/kiosk.css" type="text/css" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
	</header>
	<div class="container">
    	<header>
			<?php include("infoheader.php");?>
        </header>
        <div class="content">
        	<div class="landing">
                <div class="row gutter">
                    <div class="col">
                        <a href="../pages/dining.php"><li><img class="landingicon" src="images/dining.svg" alt=""><h4>dining</h4></li></a>
                    </div>
                </div>
                <div class="row gutter">
                    <div class="col m6 s6 xs6">
                        <a href="../pages/events.php"><li><img class="landingiconsmall" src="images/events.svg" alt=""><h4>events</h4></li></a>
                    </div>
                    <div class="col m6 s6 xs6">
                        <a href="../pages/directory.php"><li><img class="landingiconsmall" src="images/directory.svg" alt=""><h4>directory</h4></li></a>
                    </div>
                </div>
                <div class="row gutter">
                    <div class="col m6 s6 xs6">
                        <a href="../pages/studentlife.php"><li><img class="landingiconsmall" src="images/student.svg" alt=""><h4>student life</h4></li></a>
                    </div>
                    <div class="col m6 s6 xs6">
                        <a href="../pages/map.php"><li><img class="landingiconsmall" src="images/map.svg" alt=""><h4>map</h4></li></a>
                    </div>
                </div>
                <div class="row gutter">
                    <div class="col">
                        <a href="../pages/academics.php"><li><img class="landingicon" src="images/academics.svg" alt=""><h4>academics</h4></li></a>
                    </div>
                </div>
            </div>
            <div class="back">
            	<a href="../index.php"><li><h4>BAck to brutus</h4></li></a>
			</div>
        </div>
	</div>
    <!-- JS and Jquery go here -->
</body>
</html>