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
                	<img class="headericon" src="../images/events.svg" alt="">
                </div>
            </div>
            <div class="row gutter">
            	<div class="col">
                	<h1>Events</h1>
                	<h3>Current Events</h3>
                </div>
            </div>
       	</div>
        <div class="content"> <!--content starts here-->
            <div class="row gutter"> <!--main row gutter starts here-->
                <div class="nav col m2 s2 xs2">
					<?php include("sidenav.php");?>
                </div>
                <div class="col m10 s10 xs10"> <!--col m10 starts here-->
                   		<div class="col m12 s12 xs12"> <!--col m12 row starts here-->
                        	<div class="row gutter events"> <!--row gutter event row one starts here-->
                            	<div class="col m12 s12 xs12">
                                    <a href="#" class="img-responsive"><img src="../images/eventone.png" alt="">
                                    </a>
									<div class="arrow-up whitebox">	
									</div>	
									<div class="eventtextboxpersonal">
										<h2 class="eventh2">
											The Big Event
										</h2>	
										<h3 class="eventh3">
											April 18th 2016
										</h3>
										<p class="eventp">
											A schoolwide, one-day student run philanthropic event in Michigan. Ferris State University Student Government hosted the eighth annual edition of The Big Event on Saturday, April 18 in Big Rapids. This year’s event established record-breaking numbers for both the amount of registered community houses and number of volunteers.
										</p>		
									</div>
								</div>
                        	</div> <!--row gutter event row one ends-->
                    	</div> <!--col m12 ends here-->
                </div> <!--div col m10 s10 xs10 ends here-->
        	</div> <!--main row gutter ends here-->
        </div> <!--content ends here-->
	</div>
    <!-- JS and Jquery go here -->
</body>
</html>