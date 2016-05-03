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
                	<img class="headericon" src="../images/student.svg" alt="">
                </div>
            </div>
            <div class="row gutter">
            	<div class="col">
                	<h1>Student Life</h1>
                	<h3>Bulldog Highlight</h3>
                </div>
            </div>
       	</div>
        <div class="content">
            <div class="row gutter">
                <div class="nav col m2 s2 xs2">
					<?php include("sidenav.php");?>
                </div>
				<div class="col m10 s10 xs10">
                	<div class="col m4 s4 xs4">
                        <img class="bulldog-highlight" src="../images/john-smith.jpg">
					</div>
					<div class="col s1"><h5></h5></div>
					<div class="col m7 s7 xs7">	
                        <h4 class="stulife">John Smith</h4>
                        <p class="stulife">This is a random bulldog higlight. This will feature a current student in the college that the signage is located in with a description of what they are going to school for, what makes them so special, and where they are going in their life. I don’t know what else to write, so this is it.</p>
					</div>	
                </div>
				<div class="nav col m5 s5 xs5">
					<h4 class="stulife">RSO Directory</h4>
					<form class="rso-drop">
						<select name="Choose an RSO">
							<option value='default' selected>Choose an RSO</option>
							<option value='Accounting-Association'>Accounting Association</opion>
							<option value='ActiveMinds'>Active Minds, Inc.</option>
							<option value='AdGroup'>AdGroup</option>
							<option value='AdvocacyEducationGender'>AEGIS</option>
							<option value='AfricanStudentUnion'>African Student Union</option>
							<option value='AIGA'>AIGA</option>
							<option value='AMA'>AMA</option>
						</select>
				</div>
				<div class="nav col m5 s5 xs5">
					<h4 class="stulife">Greek Life Directory</h4>
					<form class="greek-drop">
						<select name="Choose a Greek Organization">
							<option value='default' selected>Choose a Greek Organization</option>
							<option value='ACR'>Alpha Chi Rho</option>
							<option value='APAF'>Alpha Kappa Alpha Fraternity</option>
							<option value='AKA'>Alpha Kappa Alpha Sorority, Inc.</option>
							<option value='AKP'>Alpha Kappa Psi</option>
							<option value='APS'>Alpha Phi Sigma</option>
							<option value='APO'>Alpha Psi Omega</option>
							<option value='AST'>Alpha Sigma Tau</option>
						</select>
					</form>
				</div>
			</div>
        </div>
			<div class="row gutter">
				
			</div>
        </div>
	</div>
</body>
</html>