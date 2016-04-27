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
                	<img class="headericon" src="../images/directory.svg" alt="">
                </div>
            </div>
            <div class="row gutter">
            	<div class="col">
                	<h1>Directory</h1>
                	<h3>Search by college</h3>
                </div>
            </div>
       	</div>
        <div class="content">
            <div class="row gutter">
                <div class="nav col m2 s2 xs2">
					<?php include("sidenav.php");?>
                </div>
                 <div class="col m10 s10 xs5">
                    <div class="row gutter">
                        <div class="col">
                            <a href=""><h1>Arts & Sciences</h1></a>
                            <a href=""><h1>Business</h1></a>
                            <a href=""><h1>Education & Human Services</h1></a>
                            <a href=""><h1>Engineering Technology</h1></a>
                            <a href=""><h1>Health Professions</h1></a>
                            <a href=""><h1>Kendal College of Art & Design</h1></a>
                            <a href=""><h1>Michigan College of Optometry</h1></a>
                            <a href=""><h1>Pharmacy</h1></a>
                            <a href="directory_program.php"><h1>By Program</h1></a>
                        </div>
                    </div>
                </div>
        	</div>
        </div>
	</div>
    <!-- JS and Jquery go here -->
</body>
</html>