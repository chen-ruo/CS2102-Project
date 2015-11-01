<?php
include 'session.php';
include 'connectToServer.php';

if ($allowaccess=true)
{
    ?>
<!DOCTYPE html>
<html>
    
<head>
<link rel="icon" href="http://i376.photobucket.com/albums/oo207/happyice/favicon-32x32_zpsci38sgpc.png">
        <title>One stop Job Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="keywords" content="One stop job portal">
        <script type="application/x-javascript">
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }
        </script>
        <link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom Theme files -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" type="text/css">
        <!----font-Awesome----->
        <link href="css/font-awesome.css" rel="stylesheet">
        <!----font-Awesome----->
		
		<script>
		
		function checkServer(){
		alert("Successfully submitted. We will contact you as soon as possible.");
		}
		</script>
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
                    <a class="navbar-brand" href="home.html"><img src="images/logo.png" alt=""></a>
                </div>
             	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		        
				<?php

                    echo "&nbsp;&nbsp;&nbsp;&nbsp;"."Hello, ".$_SESSION['CurrentUser']."<br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['Role']."<br>";
                    ?>
					<li><a href="about.php">About Us</a></li>
		        
				        
		        
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged In<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="applicantProfile.php">User Profile</a></li>
						    <li><a href="applicantEdit.php">Profile Settings/Edit</a></li>
							  <li><a href="passwordChange.php">Change Password</a></li>
		             </ul>
		        </li>
				       
				
				
				<li><a href = "logout.php">Logout</a></li> 
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="banner_1">
	<div class="container">
		
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="col-md-9 single_right">
	   <!-- Description -->
		<h1> Description of applicant </h1>
	       <p>"Here displays the description of the applicant"</p>
		   <?php   
		            $currentuser=$_SESSION['CurrentUser'];
					$sql="select a.firstname,a.lastname,a.email,a.age,a.mobilenumber,a.gender,a.dateofbirth,a.nationality,a.personalweb,i.highestquali, i.skills,i.selfdescription,i.prevjob,i.prevworkexperience from applicant a,information i where a.email=$currentuser and i.applicant=$currentuser";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					echo "<table border=\"1\" >					
					<tr>
					<th>First Name</th>
					</tr>
					<tr>
					<th>Last Name</th>
					</tr>
					<tr>
					<th>Email</th>
					</tr>
					<tr>
					<th>Age</th>
					</tr>
					<tr>
					<th>Mobile Number</th>
					</tr>
					<tr>
					<th>Gender</th>
					</tr>
					<tr>
					<th>Date of Birth</th>
					</tr>
					<tr>
					<th>Nationality</th>
					</tr>
					<tr>
					<th>Personal Website</th>
					</tr>
					<tr>
					<th>Highes Quilification</th>
					</tr>
					<tr>
					<th>Skills</th>
					</tr>
					<tr>
					<th>Self Description</th>
					</tr>
					<tr>
					<th>Previous Job</th>
					</tr>
					<tr>
					<th>Previous Working Experimence</th>
					</tr>";
	
					while($row = oci_fetch_array($stid)) {
					echo "<tr>";
					echo "<td>" . $row[0] . "</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>" . $row[1] . "</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>" . $row[2] . "</td>";
					echo "<td>" . $row[3] . "</td>";
					echo "<td>" . $row[4] . "</td>";
					echo "<td>" . $row[5] . "</td>";
					echo "<td>" . $row[6] . "</td>";
					echo "<td>" . $row[7] . "</td>";
					echo "<td>" . $row[8] . "</td>";
					echo "<td>" . $row[9] . "</td>";
					echo "<td>" . $row[10] . "</td>";
					echo "<td>" . $row[11] . "</td>";
					echo "</tr>";
					}
					echo "</table>";
					oci_free_statement($stid);
				
			?>
		
	      

       </div>
       <div class="col-md-3">
	   	  <img src="images/f12.jpg" class="img-responsive" alt=""/>
	   	  <div class="map_1">
	       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127638.11790968764!2d103.82619229583742!3d1.3619444394640154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssg!4v1443350488580" width="600" height="450" frameborder="0" style="border:0"></iframe>
          </div>  
       </div>
       <div class="clearfix"> </div>
    </div>
</div>    
<!-- footer --> 
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="index.html">Home</a></li>
				<li><a href="applicantLogin.html">Sign In</a></li>
				<li><a href="applicantRegister.html">Join Now</a></li>
				<li><a href="about.html">About</a></li>
			</ul>
			<ul class="f_list">
				<li><a href ="jobs.html">Find a Job</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="post.html">Post a Job</a></li>
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