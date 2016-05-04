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
        <div class="content"> <!--content starts here-->
            <div class="row gutter"> <!--main row gutter starts here-->
                <div class="nav col m2 s2 xs2">
					<?php include("sidenav.php");?>
                </div>
                <div class="col m10 s10 xs10"> <!--col m10 starts here-->
                   		<div class="col m12 s12 xs12"> <!--col m12 row starts here-->
                        	<div class="row gutter events orange"> <!--row gutter event row one starts here-->
                            	<div class="col m4 s4 xs12">
                                    <a href="../pages/events_ferriststate.php" class="img-responsive"><img src="../images/eventone.png" alt="">
                                    </a>
									<div class="eventtextbox">
										<h3 class="eventssubtitle">
											The Big Event
										</h3>	
									</div>	
								</div>
                            	<div class="col m4 s4 xs12">
                                    <a href="#" class="img-responsive"><img src="../images/eventtwo.png" alt="">
                                    </a>
									<div class="eventtextbox">
										<h3 class="eventssubtitle">
											Turn Up The Good
										</h3>	
									</div>	
								</div>
                            	<div class="col m4 s4 xs12">
                                    <a href="#" class="img-responsive"><img src="../images/eventthree.png" alt="">
                                    </a>
									<div class="eventtextbox">
										<h3 class="eventssubtitle">
											Music Takes Action
										</h3>	
									</div>	
								</div>	
                        	</div> <!--row gutter event row one ends-->
                    	</div> <!--col m12 ends here-->
                    	<div class="col m12 s12 xs12"> <!--col m12 s12 starts here-->
                        	<div class="row gutter events orange"> <!--row gutter event row two starts here-->
                            	<div class="col m4 s4 xs12">
                                    <a href="#" class="img-responsive"><img src="../images/eventfour.png" alt="">
                                    </a>
									<div class="eventtextbox">
										<h3 class="eventssubtitle">
											Holi Festival
										</h3>	
									</div>	
								</div>
                            	<div class="col m4 s4 xs12">
                                    <a href="#" class="img-responsive"><img src="../images/eventfive.png" alt="">
                                    </a>
									<div class="eventtextbox">
										<h3 class="eventssubtitle">
											International Festival
										</h3>	
									</div>	
								</div>
                            	<div class="col m4 s4 xs12">
                                    <a href="#" class="img-responsive"><img src="../images/eventsix.png" alt="">
                                    </a>
									<div class="eventtextbox">
										<h3 class="eventssubtitle">
											Grad Fair 2016
										</h3>	
									</div>	
								</div>
                        	</div> <!--row gutter event row two end here-->
                    	</div> <!--col m12 s12 xs12 ends here-->
                		<div class="col m12 s12 xs12">
							<div class="row gutter">
                            	<div class="col m12 s12 xs12 eventstitle">
                                	<h1>Want To Know The Latest Events?</h1>
                                </div>
								<div class="col m12 s12 xs12 buttonsec">
									<a href="#" class="buttonred">TAP HERE</a>
								</div>	
                            </div>
                        </div>
                </div> <!--div col m10 s10 xs10 ends here-->
        	</div> <!--main row gutter ends here-->
        </div> <!--content ends here-->
		<div class="footer-picture">
			<img src="../images/UC.png">
		</div>
	</div>
    <!-- JS and Jquery go here -->
</body>
</html>