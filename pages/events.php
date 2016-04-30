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
                	<h3>Homepage</h3>
                </div>
            </div>
       	</div>
        <div class="content">
            <div class="row gutter">
                <div class="nav col m2 s2 xs2">
					<?php include("sidenav.php");?>
                </div>
                 <div class="col m10 s10 xs5">
                    <h1>Want to know the latest events?</h1>
					 <a href="#" class="buttonred">Tap Here</a>

                </div>
               <div class="col m10 s10 xs5"> <!--col 10 starts here-->
                   <div class="row gutter events">
                      	<div class="col m3 s3 xs3 piccenter">
                           <a href="#" class="img-responsive"><img src="../images/eventone.png" alt="">
						   </a>
						   <div class="eventbox"> <!--event transparent box starts here-->
						   		<h3 class="eventssubtitle">
							   	 	The Big Event
						   		</h3>
					   		</div> <!--event transparent box ends here-->
                       </div>
                       	<div class="col m3 s3 xs3 piccenter">
                            <a href="#" class="img-responsive"><img src="../images/eventtwo.png" alt="">
 						   	</a>
 						   <div class="eventbox"> <!--event transparent box starts here-->
 						   		<h3 class="eventssubtitle">
 							   	 	Turn Up The Good
 						   		</h3>
 					   		</div> <!--event transparent box ends here-->
                        </div>
                       	<div class="col m3 s3 xs3 piccenter">
                            <a href="#" class="img-responsive"><img src="../images/eventthree.png" alt="">
 						   	</a>
 						   <div class="eventbox"> <!--event transparent box starts here-->
 						   		<h3 class="eventssubtitle">
 							   	 	Music Takes Action
 						   		</h3>
 					   		</div> <!--event transparent box ends here-->
                        </div>
                   </div> <!--row gutter ends-->
               </div> <!--col 10 ends here-->
                <div class="col m10 s10 xs5"> <!--col 10 starts here-->
                    <div class="row gutter events">
                       	<div class="col m3 s3 xs3 piccenter">
                            <a href="#" class="img-responsive"><img src="../images/eventfour.png" alt="">
 						   	</a>
 						   <div class="eventbox"> <!--event transparent box starts here-->
 						   		<h3 class="eventssubtitle">
 							   	 	Holi Festival
 						   		</h3>
 					   		</div> <!--event transparent box ends here-->
                        </div>
                       	<div class="col m3 s3 xs3 piccenter">
                            <a href="#" class="img-responsive"><img src="../images/eventfive.png" alt="">
 						   	</a>
 						   <div class="eventbox"> <!--event transparent box starts here-->
 						   		<h3 class="eventssubtitle">
 							   	 	International Festival
 						   		</h3>
 					   		</div> <!--event transparent box ends here-->
                        </div>
                       	<div class="col m3 s3 xs3 piccenter">
                            <a href="#" class="img-responsive"><img src="../images/eventsix.png" alt="">
 						   	</a>
 						   <div class="eventbox"> <!--event transparent box starts here-->
 						   		<h3 class="eventssubtitle">
 							   	 	Grad Fair 2016
 						   		</h3>
 					   		</div> <!--event transparent box ends here-->
                        </div>
                    </div> <!--row gutter ends here-->
                </div> <!--col 10 ends here-->
        	</div>
        </div>
	</div>
    <!-- JS and Jquery go here -->
</body>
</html>