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
		        <li><a href = "index.php" onClick = <?php session_destroy();?>>Logout</a></li>
				
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job Posting!</h1>
           </div>
		</div>
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="col-md-9 single_right">
	   <!-- List of jobs posted by employer-->
		<h1> List of jobs posted </h1>
	       <?php 
					$currentuser=$_SESSION['CurrentUser'];
					$sql="select j.jobid,j.jobtype,j.category,j.minrequiredqualification,j.minrequiredskills,j.description from jobs j where owner='$currentuser'";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					echo "<table border=\"1\" >					
					<tr>
					<th>Job ID</th>
					<th>Job Type</th>
					<th>Category</th>				
					<th>Qualification Required</th>
					<th>Skills Required</th>
					<th>Description</th>
					</tr>";
	
					while($row = oci_fetch_array($stid)) {
					echo "<tr>";
					echo "<td>" . $row[0] . "</td>";
					echo "<td>" . $row[1] . "</td>";
					echo "<td>" . $row[2] . "</td>";
					echo "<td>" . $row[3] . "</td>";
					echo "<td>" . $row[4] . "</td>";
					echo "<td>" . $row[5] . "</td>";
					echo "</tr>";
					}
					echo "</table>";
					oci_free_statement($stid);
				
			?>
		   <br><br><br>

		    <table class="condidate_detail">
          	<h4>Company Details</h4>
			<tbody>
				<tr>
					<td>Company Name</td>
					<td><?php

						$sql = "select companyname from employer where email='$currentuser'";
						$stid = oci_parse($dbh,$sql);
						oci_execute($stid,OCI_DEFAULT);
						while($row = oci_fetch_array($stid)) {
						echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);

					?></td>
				</tr>

				<tr>
					<td>Contact Number</td>
					<td><?php

						$sql = "select companynum from employer where email='$currentuser'";
						$stid = oci_parse($dbh,$sql);
						oci_execute($stid,OCI_DEFAULT);
						while($row = oci_fetch_array($stid)) {
						echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);

					?></td>
				</tr>

				<tr>
					<td>Company E-mail</td>
					<td><?php

						$sql = "select email from employer where email='$currentuser'";
						$stid = oci_parse($dbh,$sql);
						oci_execute($stid,OCI_DEFAULT);
						while($row = oci_fetch_array($stid)) {
						echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);

					?></td>
				</tr>


				<tr>
					<td>Address of company</td>
					<td><?php

						$sql = "select companyaddress from employer where email='$currentuser'";
						$stid = oci_parse($dbh,$sql);
						oci_execute($stid,OCI_DEFAULT);
						while($row = oci_fetch_array($stid)) {
						echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);

					?></td>
				</tr>
				
				<tr>
					<td>Postal Code</td>
					<td><?php

						$sql = "select postalcode from employer where email='$currentuser'";
						$stid = oci_parse($dbh,$sql);
						oci_execute($stid,OCI_DEFAULT);
						while($row = oci_fetch_array($stid)) {
						echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);

					?></td>
				</tr>
				
				<tr>
					<td>Company URL</td>
					<td><?php

						$sql = "select companyurl from employer where email='$currentuser'";
						$stid = oci_parse($dbh,$sql);
						oci_execute($stid,OCI_DEFAULT);
						while($row = oci_fetch_array($stid)) {
						echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);

					?></td>
				</tr>
				
				<tr>
					<td>Nature of business</td>
					<td><?php

						$sql = "select natureofbusiness from employer where email='$currentuser'";
						$stid = oci_parse($dbh,$sql);
						oci_execute($stid,OCI_DEFAULT);
						while($row = oci_fetch_array($stid)) {
						echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);

					?></td>
				</tr>

				<tr>
					<td>Industry</td>
					<td><?php

						$sql = "select Industry from employer where email='$currentuser'";
						$stid = oci_parse($dbh,$sql);
						oci_execute($stid,OCI_DEFAULT);
						while($row = oci_fetch_array($stid)) {
						echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);

					?></td>
				</tr>
				
			</tbody>
		 </table>
	      

       </div>
       <div class="col-md-3">
	   	  <img src="images/f6.jpg" class="img-responsive" alt=""/>
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