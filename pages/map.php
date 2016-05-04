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
										<ul class="tall">
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
										<ul class="tall">
											<li>
												<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">Alied Health</a>
											</li>
											<li>
												<a href="#">Amidon, Rick</a>
											</li>
											<li>
												<a href="#">Balkema, Sandra</a>
											</li>
											<li>
												<a href="#">Bogdan, Dianne</a>
											</li>
											<li>
												<a href="#">Boyd, Julia</a>
											</li>
											<li>
												<a href="#">Burmeister, William</a>
											</li>
											<li>
												<a href="#">Caserta, John</a>
											</li>
											<li>
												<a href="#">Caserta, Lilia</a>
											</li>
											<li>
												<a href="#">Chrenka, Lynn</a>
											</li>
											<li>
												<a href="#">Christensen, Elizabeth</a>
											</li>
											<li>
												<a href="#">Cosper, Denise</a>
											</li>
											<li>
												<a href="#">Courtright-Nash, Debra</a>
											</li>
											<li>
												<a href="#">Cullen, John</a>
											</li>
											<li>
												<a href="#">Cullen, Roxanne</a>
											</li>
											<li>
												<a href="#">Davila-Howard, Debra</a>
											</li>
											<li>
												<a href="#">Deurloo, Carol</a>
											</li>
											<li>
												<a href="#">Ding, Daniel</a>
											</li>
											<li>
												<a href="#">Drake, Derek</a>
											</li>
											<li>
												<a href="#">Fagan, Deirdre</a>
											</li>
											<li>
												<a href="#">Flores-Paez</a>
											</li>
											<li>
												<a href="#">Fong, Jennifer</a>
											</li>
											<li>
												<a href="#">Fox, Bernadette</a>
											</li>
											<li>
												<a href="#">Fox, Steven</a>
											</li>
											<li>
												<a href="#">Gardner, Lee</a>
											</li>
											<li>
												<a href="#">Garrelts, Nathan</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">G-M</a>
										<ul class="tall">
											<li>
												<a href="#"><img src="../images/left.svg" alt="back button" class="back-button">Alied Health</a>
											</li>
											<li>
												<a href="#">Harris, Katherine</a>
											</li>
											<li>
												<a href="#">Hoover, Jennifer</a>
											</li>
											<li>
												<a href="#">Iafrate, Debra</a>
											</li>
											<li>
												<a href="#">Kantar, Andy</a>
											</li>
											<li>
												<a href="#">Keating, Maggie</a>
											</li>
											<li>
												<a href="#">Marquard, David</a>
											</li>
											<li>
												<a href="#">Masten, Keli</a>
											</li>
											<li>
												<a href="#">McCullough, Elaine</a>
											</li>
											<li>
												<a href="#">Middleton, Phillip</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">N-S</a>
										<ul class="tall">
										<li>
											<a href="#">Nelson, Laurie</a>
										</li>
										<li>
											<a href="#">Nelson, Nathan</a>
										</li>
										<li>
											<a href="#">Nickles, Jerry</a>
										</li>
										<li>
											<a href="#">Nikkari, Mathew</a>
										</li>
										<li>
											<a href="#">Noren, Daniel</a>
										</li>
										<li>
											<a href="#">Ollenquist, Jody</a>
										</li>
										<li>
											<a href="#">Oplinger, Kristin</a>
										</li>
										<li>
											<a href="#">Pavletic, Heather</a>
										</li>
										<li>
											<a href="#">Reges, Julia</a>
										</li>
										<li>
											<a href="#">Rescoe, Sarah</a>
										</li>
										<li>
											<a href="#">Rodriguez-Moran, Gustavo</a>
										</li>
										<li>
											<a href="#">Russell, David</a>
										</li>
										<li>
											<a href="#">Ruzicka, Dennis</a>
										</li>
										<li>
											<a href="#">Rebecca, Sammel</a>
										</li>
										<li>
											<a href="#">Schoenlein, Beth</a>
										</li>
									</li>
									<li>
										<a href="#">T-Z</a>
										<li>
											<a href="#">Taylor, Thomas</a>
										</li>
										<li>
											<a href="#">Taylor, Jonathan</a>
										</li>
										<li>
											<a href="#">Topping, Scott</a>
										</li>
										<li>
											<a href="#">Warner, Eric</a>
										</li>
										<li>
											<a href="#">Webb, Tracy</a>
										</li>
										<li>
											<a href="#">Weber, Erin</a>
										</li>
										<li>
											<a href="#">Wendler, Zachary</a>
										</li>
										<li>
											<a href="#">Wilkinson, Melissa</a>
										</li>
										<li>
											<a href="#">Fagan, Deirdre</a>
										</li>
										<li>
											<a href="#">Flores-Paez</a>
										</li>
										<li>
											<a href="#">Fong, Jennifer</a>
										</li>
										<li>
											<a href="#">Fox, Bernadette</a>
										</li>
										<li>
											<a href="#">Fox, Steven</a>
										</li>
										<li>
											<a href="#">Gardner, Lee</a>
										</li>
										<li>
											<a href="#">Garrelts, Nathan</a>
										</li>
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
