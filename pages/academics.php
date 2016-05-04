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
                            <div class="col m6 s6">
                                <h3>What time of the day does your class meet?</h3>
                                <select name="select">
                                      <option value="value1" selected>Pick a Time</option>
                                      <option value="value1">8:00 am</option>
                                      <option value="value1">8:30 am</option>
                                      <option value="value1">9:00 am</option>
                                      <option value="value1">9:30 am</option>
                                      <option value="value1">10:00 am</option>
                                      <option value="value1">10:30 am</option>
                                      <option value="value1">11:00 am</option>
                                      <option value="value1">11:30 am</option>
                                      <option value="value1">12:00 pm</option>
                                      <option value="value1">12:30 pm</option>
                                      <option value="value1">1:00 pm</option>
                                      <option value="value1">1:30 pm</option>
                                      <option value="value1">2:00 pm</option>
                                      <option value="value1">2:30 pm</option>
                                      <option value="value1">3:00 pm</option>
                                      <option value="value1">3:30 pm</option> 
                                      <option value="value1">4:00 pm</option>
                                      <option value="value1">4:30 pm</option>
                                      <option value="value1">5:00 pm</option>
                                      <option value="value2">5:30 pm</option>
                                      <option value="value3">6:00 pm</option>
                                      <option value="value3">6:30 pm</option>
                                      <option value="value3">7:00 pm</option>
                                      <option value="value3">7:30 pm</option>
                                      <option value="value3">8:00 pm</option>
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
                                <a href="academics_examlist.php" class="button go">Go</a>
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