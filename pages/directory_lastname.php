<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kisok-BR2</title>
        <!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="./../css/kiosk.css" type="text/css" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
	<header>
	</header>
	<div class="container">
    	<header>
			<?php include("./../infoheader.php");?>
        </header>
        <div class="pageheader">
        	<div class="row gutter">
            	<div class="col">
                	<img class="headericon" src="./../images/directory.svg" alt="">
                </div>
            </div>
            <div class="row gutter">
            	<div class="col">
                	<h1>Directory</h1>
                	<h3>Search by Last Name</h3>
                </div>
                <div class="col">
                 	<a href="" class="trigger1"><img class="search" src="../images/search.svg"></a>
                     	<div class="toggle">
                        	<div class="message1 popup">
                            	<h4 class="popuph4">List Search By</h4>
                                <a href="directory.php"><div class="popupbox"></div><h3 class="popuph3">college</h3></a>
                                <a href="directory_program.php"><div class="popupbox"></div><h3 class="popuph3">program</h3></a>
                                <a href="directory_room.php"><div class="popupbox"></div><h3 class="popuph3">room</h3></a>
                                <a href="directory_lastname.php"><div class="popupbox"></div><h3 class="popuph3">last name</h3></a>
                                <h4 class="popuph4close trigger1">close</h4>
                   			</div>
                 		</div>
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
                            <div class="col m2 s2 xs2">
                                <?php include("alphabet.php");?>
                            </div>
                            <div class="col m10 s10 xs10 scroll">
                                <a href="../pages/directory_namelist.php"><h2 class="mobileh2">Accountancy</h2></a>
                                <a href=""><h2 class="mobileh2">Actuarlial Science</h2></a>
                                <a href=""><h2 class="mobileh2">Advanced Studies</h2></a>
                                <a href=""><h2 class="mobileh2">Avdertising / Integrated Marketing Communications</h2></a>
                                <a href=""><h2 class="mobileh2">African American Studies</h2></a>
                                <a href=""><h2 class="mobileh2">Allied Health Studies</h2></a>
                                <a href=""><h2 class="mobileh2">Applied Mathematics</h2></a>
                                <a href=""><h2 class="mobileh2">Applied Speech</h2></a>
                                <a href=""><h2 class="mobileh2">Architecture</h2></a>
                                <a href=""><h2 class="mobileh2">Art History</h2></a>
                                <a href=""><h2 class="mobileh2">Automotive</h2></a>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
        </div>
		<div class="footer-picture">
			<img src="../images/woodbridge.png">
		</div>
    <div class="message1 overlay"></div>
	</div>
    <!-- JS and Jquery go here -->
    <script src="../js/jquery-1.11.2.min.js"></script>
    <script>
    	//jquery goes here
		$(".trigger1").click(function() {
			$(".message1").toggle();
			return false;
		});
    </script>
</body>
</html>