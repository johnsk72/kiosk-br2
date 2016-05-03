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
                        <img class="bulldog-highlight" src="../images/john-smith.jpg" alt="john-smith">
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
						<select id="rso-drop" name="Choose an RSO">
							<option value='default' selected>Choose an RSO</option>
							<option value='Accounting-Association'>Accounting Association</opion>
							<option value='ActiveMinds'>Active Minds, Inc.</option>
							<option value='AdGroup'>AdGroup</option>
							<option value='AdvocacyEducationGender'>AEGIS</option>
							<option value='AfricanStudentUnion'>African Student Union</option>
							<option value='AIGA'>AIGA</option>
							<option value='AMA'>AMA</option>
						</select>
					</form>
					<div id="Accounting-Association" class="rso">
						<p>accountingassociation@ferris.edu</p>
						<p>The purpose of this association shall be to encourage and recognize high achievement by students enrolled in Accountancy and to provide a means for students enrolled in Accountancy to broaden their knowledge and understanding of the accounting profession and business by holding discussions on current accounting problems and practices and job opportunities.</p>
					</div>
					<div id="AIGA" class="rso">
						<p>aiga@ferris.edu</p>
						<p>AIGA meets on Thursday mornings at 11:00AM in BUS 310. This RSO is for students pursuing a degree in graphic design or related fields. We are a highly motivated group of student designers looking to explore all the design world has to offer. Through activities and events we connect with professionals in the field and gain new skills as designers.</p>
					</div>
					<div id="AMA" class="rso">
						<p>ama@ferris.edu</p>
						<p>AMA meets on Tuesday mornings at 11:00AM in BUS 211. This RSO is for students pursuing degrees marketing and other related fields. The Ferris State American Marketing Association is a 5 Star campus RSO and a nationally ranked Gold (top 5) chapter. AMA is open to all majors and and is dedicated to preparing future leaders for successful careers in todays competitive business environment. We promote personal and professional growth by providing leadership opportunities and hands-on marketing experience.</p>
					</div>
				</div>
				<div class="nav col m5 s5 xs5">
					<h4 class="stulife">Greek Life Directory</h4>
					<form class="greek-drop">
						<select id="greek-drop" name="Choose a Greek Organization">
							<option value='default' selected>Choose a Greek Organization</option>
							<option value='ACR'>Alpha Chi Rho</option>
							<option value='AKA'>Alpha Kappa Alpha Sorority, Inc.</option>
							<option value='AKP'>Alpha Kappa Psi</option>
							<option value='APAF'>Alpha Kappa Alpha Fraternity</option>
							<option value='APS'>Alpha Phi Sigma</option>
							<option value='APO'>Alpha Psi Omega</option>
							<option value='AST'>Alpha Sigma Tau</option>
						</select>
					</form>
					<div id="ACR" class="greek">
						<p>acr@ferris.edu</p>
						<p>Today's fraternity man. We believe in brotherhood, promoting Greek life at Ferris State University, and cultivating men of word and deed.</p>
					</div>
					<div id="AKA" class="greek">
						<p>akaf@ferris.edu</p>
						<p>Alpha Kappa Alpha Sorority, Incorporated (AKA) is an international service organization that was founded on the campus of Howard University in Washington D.C. in 1908. It is the oldest Greek-lettered organization established by African-American college-educated women, and maintains a viable sisterhood of over 260,000 members. Alpha Kappa Alpha keeps a balance of two important themes: the importance of the individual and the strength of an organization of women of ability and courage</p>
					</div>
					<div id="AKP" class="greek">
						<p>akpf@ferris.edu</p>
						<p>Alpha Kappa Psi is the OLDEST and LARGEST Co-Ed Professional Business Fraternity and the ONLY one to be OPEN TO ALL MAJORS. Alpha Kappa Psi, also known as "AKPsi", was founded on October 5, 1904 at New York University. Alpha Kappa Psi is recognized as the premier developer of Principled Business Leaders. Alpha Kappa Psi has been "Shaping People, Shaping Business" since 1904.</p>
					</div>
				</div>
			</div>
			<div class="footer-picture">
				<img src="../images/woodbridge.png">
			</div>
	</div>
	<script src="../js/jquery.min.js"></script>
	<script>
	$(function() {
		$('#rso-drop').change(function(){
			$('.rso').hide();
			$('#' + $(this).val()).show();
		});
	});
	</script>
	<script>
	$(function() {
		$('#greek-drop').change(function(){
			$('.greek').hide();
			$('#' + $(this).val()).show();
		});
	});
	</script>
</body>
</html>