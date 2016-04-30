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
                    <div class="row gutter">
                        <div class="col m6 s6">
                            <h3>What time of the day does your class meet?</h3>
                            <select name="select">
                                  <option value="value1">Value 1</option> 
                                  <option value="value2" selected>Value 2</option>
                                  <option value="value3">Value 3</option>
                            </select>
                        </div>
                         <div class="col m6 s6">
                            <h3>Is it a Mon/Wed or Tues/Thurs combination?</h3>
                            <select name="select">
                                  <option value="value1">Value 1</option> 
                                  <option value="value2" selected>Value 2</option>
                                  <option value="value3">Value 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="row gutter">
                        <div class="col">
                            <a href="#" class="button go">Go</a>
                        </div>
                    </div>
                </div>
        	</div>
        </div>
	</div>
    <!-- JS and Jquery go here -->
</body>
</html>