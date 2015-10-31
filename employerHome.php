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
                    <a class="navbar-brand" href="home.php"><img src="images/logo.png" alt=""></a>
                </div>
             	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	        	<?php

                    echo "&nbsp;&nbsp;&nbsp;&nbsp;"."Hello, ".$_SESSION['CurrentUser']."<br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['Role']."<br>";
                    ?>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employers<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="postJob.php">Post Jobs</a></li>
						    <li><a href="searchApplicant.php">Search applicants</a></li>
							  <li><a href="searchMatched.php">Search for matched applicants</a></li>
		             </ul>
		        </li>
				
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged In<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerProfile.php">User Profile</a></li>
						    <li><a href="employerEdit.php">Profile Settings/Edit</a></li>
							  <li><a href="passwordChange.php">Change Password</a></li>
		             </ul>
		        </li>
				
				<li><a onClick = "logout()">Logout</a></li>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="container">
    <div class="single">  
	   <div class="col-md-9 single_right">
	    <h1>Shows list of jobs posted <h1>
		
  <div class="clearfix"> </div>
 </div>
 
</div>
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
<form>				
				<select name="JobID" id="Job ID"><option value="">select Job ID</option>
					<?php
					$sql="select jobid from jobs where owner='$currentuser'";
					$stid = oci_parse($dbh, $sql);
					oci_execute($stid, OCI_DEFAULT);
					while($row = oci_fetch_array($stid)){
					echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
					}
					oci_free_statement($stid);
					?>
				<input type="submit" name="formSubmit1" value="DELETE" >
				<?php
				        if(isset($_GET['formSubmit1']))
				{
					    $job_id=$_GET['JobID'];
						$sql_insert = "delete from jobs where jobid = '$job_id' and owner = '$currentuser'";
						$stid = oci_parse($dbh, $sql_insert);
				
						oci_execute($stid);
						oci_free_statement($stid);
										
                }                         			
					?>
				<input type="radio" name="Format" id="Format1" value="JObType">Job Type
				<input type="radio" name="Format" id="Format1" value="Category">Category
				<input type="radio" name="Format" id="Format1" value="minrequiredqualification">Qualification Required
				<input type="radio" name="Format" id="Format1" value="minrequiredskills">Skills Required
				<input type="radio" name="Format" id="Format1" value="Description">Description
				Input: <input type="text" name="Title" id="Title">
				
				<input type="submit" name="formSubmit2" value="UPDATE" >	
				<?php
				        if(isset($_GET['formSubmit2']))
				{
					    $field=$_GET['Format'];
						$input=$_GET['Title'];
						$job_id=$_GET['JobID'];
						
						$sql_insert = "update jobs set $field ='$input' where owner = '$currentuser' and jobid= '$job_id' ";
						
					
						$stid = oci_parse($dbh, $sql_insert);
						oci_execute($stid);
						oci_free_statement($stid);
										
                }    
                     			
					?>
			</form>			
</div></div></div></div></div></div>


<!-- footer --> 
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="index.php">Home</a></li>
				<li><a href="applicantLogin.php">Sign In</a></li>
				<li><a href="applicantRegister.php">Join Now</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
			<ul class="f_list">
				<li><a href ="jobs.php">Find a Job</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="post.php">Post a Job</a></li>
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