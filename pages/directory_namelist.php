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
                	<h3>Name of Program</h3>
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
                                <h3 class="alphabet">A</h3>
                                <h3 class="alphabet">B</h3>
                                <h3 class="alphabet">C</h3>
                                <h3 class="alphabet">D</h3>
                                <h3 class="alphabet">E</h3>
                                <h3 class="alphabet">F</h3>
                                <h3 class="alphabet">G</h3>
                                <h3 class="alphabet">H</h3>
                                <h3 class="alphabet">I</h3>
                                <h3 class="alphabet">J</h3>
                                <h3 class="alphabet">K</h3>
                                <h3 class="alphabet">L</h3>
                                <h3 class="alphabet">M</h3>
                                <h3 class="alphabet">N</h3>
                                <h3 class="alphabet">O</h3>
                                <h3 class="alphabet">P</h3>
                                <h3 class="alphabet">Q</h3>
                                <h3 class="alphabet">R</h3>
                                <h3 class="alphabet">S</h3>
                                <h3 class="alphabet">T</h3>
                                <h3 class="alphabet">U</h3>
                                <h3 class="alphabet">V</h3>
                                <h3 class="alphabet">X</h3>
                                <h3 class="alphabet">Y</h3>
                                <h3 class="alphabet">Z</h3>
                            </div>
                            <div class="col m10 s10 xs10">
                                <a href="../pages/directory_staffprofile.php"><h2>Mrs. Bulldog</h2></a>
                                <a href="../pages/directory_staffprofile.php"><h2>Mrs. Bulldog</h2></a>
                                <a href="../pages/directory_staffprofile.php"><h2>Mrs. Bulldog</h2></a>
                                <a href="../pages/directory_staffprofile.php"><h2>Mrs. Bulldog</h2></a>
                            </div>
                        </div>
                    </div>
                </div>
        	</div>
        </div>
		<div class="footer-picture">
			<img src="../images/new-flite.png">
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