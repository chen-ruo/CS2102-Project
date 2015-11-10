<?php
include 'session.php';
include 'connectToServer.php';

if ($allowaccess=true)
{
    ?>
<!DOCTYPE HTML>
<html>
<head>
<link rel="icon" href="http://i376.photobucket.com/albums/oo207/happyice/favicon-32x32_zpsci38sgpc.png">
<title>One stop Job Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="One stop job portal" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->

</head>
<body>
<nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="employerHome.html"><img src="images/logo.png" alt=""></a>
                </div>
             	    <!--/.navbar-header-->
	     <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
			
			<?php

                    echo "&nbsp;&nbsp;&nbsp;&nbsp;"."Hello, ".$_SESSION['CurrentUser']."<br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['Role']."<br>";
                    ?>
            <li><a href="employerHome.php">Search Employees</a></li>
			<li><a href="postJob.php">Post Jobs</a></li>

		        </li>
				
				
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged In<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerProfile.php">User Profile</a></li>
						    <li><a href="employerEdit.php">Profile Settings/Edit</a></li>
						    <li><a href="editJob.php">Jobs Settings/Edit</a></li>
							<li><a href="passwordChange.php">Change Password</a></li>
		             </ul>
		        </li>
		        <li><a href = "logout.php">Logout</a></li>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="container">
    <div class="single">  
	   <div class="col-md-9 single_right">
	    <h1>List applicants' details</h1>
		<div class="container">
    <div class="single">  
	   <div class="col-md-9 single_right">
	   <!-- List of jobs posted by employer-->

		    <table class="condidate_detail">
          	<h3>Applicant Details</h3>
			<?php if (isset($_SESSION['jobid'])){

				echo "Applicants who have applied for Job ID: ";
				echo $_SESSION['jobid'];
			}
			?>
			<br>
			<tbody>
			<?php
				$jobid = $_SESSION['jobid'];
				$employer = $_SESSION['CurrentUser'];
				$sql = "select distinct a.firstname, a.lastname, a.email, a.mobilenumber, i.highestquali, i.skill1, i.skill2, i.industryinterested, i.prevjob, i.prevworkexperience
						from applicant a, information i, applyfor ap, jobs j
						where ap.emaila = a.email
						and ap.emaila = i.applicant
						and ap.jobid = '$jobid'
						and ap.emaile = '$employer'
						";
				$stid = oci_parse($dbh,$sql);
				oci_execute($stid,OCI_DEFAULT);
				echo "<table border=\"1\">
				<col width=\"10%\">
				<col width=\"15%\">
				<col width=\"20%\">
				<col width=\"13%\">
				<col width=\"10%\">
				<col width=\"10%\">
				<col width=\"10%\">
				<col width=\"17%\">
				<col width=\"15%\">
				<col width=\"20%\">
					
				<tr>
				<th>First name</th>
				<th>Last name</th>					
				<th>Email</th>
				<th>Contact number</th>
				<th>Highest Qualification</th>
				<th>Skill 1</th>
				<th>Skill 2</th>
				<th>Industry interested</th>
				<th>Previous job</th>
				<th>Previous Job experience</th>
				</tr>";
	
					while($row = oci_fetch_array($stid)) {
					echo "<tr>";
					echo "<td>" . $row[0] . "</td>";
					echo "<td>" . $row[1] . "</td>";
					echo "<td>" . $row[2] . "</td>";
					echo "<td>" . $row[3] . "</td>";
					echo "<td>" . $row[4] . "</td>";
					echo "<td>" . $row[5] . "</td>";
					echo "<td>" . $row[6] . "</td>";
					echo "<td>" . $row[7] . "</td>";
					echo "<td>" . $row[8] . "</td>";
					echo "<td>" . $row[9] . "</td>";
					echo "</tr>";
					}
					echo "</table>";
					oci_free_statement($stid);
			?>
			</tbody>
		 </table>
		 <br><br>
  <div class="clearfix"> </div>
 </div>
</div>
</div></div></div></div></div></div>

<!-- footer --> 
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
			<ul class="f_list">
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class ="col-md-4 grid 3">
		</div>
		<div class="col-md-4 grid_3">
			<h4>Sign up for our newsletter</h4>
			<p>Enter your email below and we will send updates into your inbox.</p>
			<form>
				<input type="text" class="form-control" placeholder="Enter your email">
				<button type="button" class="btn red">Subscribe now!</button>
		    </form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="footer_bottom">	
  <div class="container">
	<div class="copy">
		<p>This is a CS2102 Project.</a> </p>
	</div>
  </div>
</div>
</body>
</html>
<?php
}
    ?>