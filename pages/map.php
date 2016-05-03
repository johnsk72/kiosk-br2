<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>
			Kisok-BR2
		</title><!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="../css/kiosk.css" type="text/css" media="screen">
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<header>
			<?php include("../infoheader.php");?>
	    </header>
		<div class="container">
			<div class="pageheader">
				<div class="row gutter">
					<div class="col">
						<img class="headericon" src="../images/map.svg" alt="">
					</div>
				</div>
				<div class="row gutter">
					<div class="col">
						<h1>
							Map
						</h1>
						<h3>
							Get Help Navigating
						</h3>
					</div>
				</div>
			</div>
			<div class="content">
				<div class="row gutter">
					<div class="nav col m2 s2 xs2">
						<?php include("sidenav.php");?>
					</div>
                	<div class="col m10 s10 xs10"> <!--col m10 starts here-->
                   	<div class="col m12 s12 xs12"> <!--col m12 row starts here-->
                	<div class="row gutter"> <!--row gutter event row one starts here-->
						<ul class="map-nav">
							<li class="top">
								<a href="#">Buildings</a>
								<ul>
									<li>
										<a href="#">Dining</a>
										<ul>
											<li>
												<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">The Rock Cafe</a>
											</li>
											<li>
												<a href="#">Quad Cafe</a>
											</li>
											<li>
												<a href="#">The Market</a>
											</li>
											<li>
												<a href="#">Starbucks</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Housing</a>
										<ul>
											<li>
												<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">Residence Halls</a>
												<ul>
													<li>
														<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">Bond, North &amp; South</a>
													</li>
													<li>
														<a href="#">Brophy &amp; McNerney</a>
													</li>
													<li>
														<a href="#">Clark</a>
													</li>
													<li>
														<a href="#">Cramer</a>
													</li>
													<li>
														<a href="#">Hallisy</a>
													</li>
													<li>
														<a href="#">Henderson</a>
													</li>
													<li>
														<a href="#">Merill &amp; Travis</a>
													</li>
													<li>
														<a href="#">Miller</a>
													</li>
													<li>
														<a href="#">Pickell</a>
													</li>
													<li>
														<a href="#">Puterbaugh</a>
													</li>
													<li>
														<a href="#">Vandercook</a>
													</li>
													<li>
														<a href="#">Ward</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="#">East Campus Suites</a>
												<ul>
													<li>
														<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">East Campus 1</a>
													</li>
													<li>
														<a href="#">East Campus 2</a>
													</li>
													<li>
														<a href="#">East Campus 3</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="#">Apartments</a>
												<ul>
													<li>
														<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">Apartment A</a>
													</li>
													<li>
														<a href="#">Apartment B</a>
													</li>
													<li>
														<a href="#">Apartment C</a>
													</li>
											   </ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Academic</a>
										<ul>
											<li>
												<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">Alied Health</a>
											</li>
											<li>
												<a href="#">Alumni Building</a>
											</li>
											<li>
												<a href="#">Arts and Science Commons</a>
											</li>
											<li>
												<a href="#">Automotive Center</a>
											</li>
											<li>
												<a href="#">Business Building</a>
											</li>
											<li>
												<a href="#">Creative Arts Center</a>
											</li>
											<li>
												<a href="#">Flite</a>
											</li>
											<li>
												<a href="#">General Service Building</a>
											</li>
											<li>
												<a href="#">Granger Building</a>
											</li>
											<li>
												<a href="#">Hagerman College of Pharmacy</a>
											</li>
											<li>
												<a href="#">College of Engineering Technology</a>
											</li>
											<li>
												<a href="#">Institute for Construction Education and Training</a>
											</li>
											<li>
												<a href="#">Interdisciplinary Resource Center</a>
											</li>
											<li>
												<a href="#">Knollcrest Commons</a>
											</li>
											<li>
												<a href="#">Michigan College of Optometry</a>
											</li>
											<li>
												<a href="#">Music Activites Center</a>
											</li>
											<li>
												<a href="#">College of Engineering Technology</a>
											</li>
											<li>
												<a href="#">Power Plant</a>
											</li>
											<li>
												<a href="#">Prakken Building</a>
											</li>
											<li>
												<a href="#">Science Building</a>
											</li>
											<li>
												<a href="#">Science Chiller Complex</a>
											</li>
											<li>
												<a href="#">Starr Building</a>
											</li>
											<li>
												<a href="#">Timme Center</a>
											</li>
											<li>
												<a href="#">West Commons</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Entertainment</a>
										<ul>
											<li>
												<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">Bookstore</a>
											</li>
											<li>
												<a href="#">Ewigleben Sports Complex</a>
											</li>
											<li>
												<a href="#">Katke Golf Course</a>
											</li>
											<li>
												<a href="#">University Center</a>
											</li>
											<li>
												<a href="#">Williams Auditorium</a>
											</li>
											<li>
												<a href="#">Wheeler Pavilion</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Student Health</a>
										<ul>
											<li>
												<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">Public Safety</a>
											</li>
											<li>
												<a href="#">Raquet Facility</a>
											</li>
											<li>
												<a href="#">Student Recreation Center</a>
											</li>
										</ul>
									</li>
									
								</ul>
							</li>
							<li class="top">
								<a href="#">Transportation</a>
								<ul>
									<li>
										<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">Bus Stops</a>
									</li>
									<li>
										<a href="#">Parking Lots</a>
									</li>
								</ul>
							</li>
							<li class="top">
								<a href="#">Faculty & Staff</a>
								<ul>
									<li>
										<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">A-F</a>
									</li>
									<li>
										<a href="#">G-M</a>
									</li>
									<li>
										<a href="#">N-Q</a>
									</li>
									<li>
										<a href="#">R-Z</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					</div>
				</div>
					<div class="col m10 s10 xs5">
						<iframe src="https://www.google.com/maps/d/embed?mid=1L7mdvJj2YkcJ9oLsbJcK2690yc4" width="100%" height="900"></iframe>
					</div>
				</div>
			</div>
			<div class="footer-picture">
					<img src="../images/scultpure.png">
			</div>
		</div><!-- JS and Jquery go here -->
		<script src="../js/jquery.min.js"></script>
		<script src="../js/scripts.js" type="text/javascript" charset="utf-8"></script>
		<script src="../js/CustomGoogleMapMarker.js" type="text/javascript" charset="utf-8"</script>
		
		
		
	</body>
</html>
