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

<script>

              function checkServer(){
				var password = document.getElementById("newpassword").value
				var existpassword = document.getElementById("existpassword").value
				
			var r = confirm("Are you sure to change your existing password?");
			if (r == true) {

			 var errormsg = "Below are the errors:\n\n";
			   var errorlog = false;
			   
			   <!-- Check password validity here -->
			   
			   if(existpassword.trim().length == 0 ){
					errorlog = true;
					errormsg += "- Please enter a valid existing password.\n";
				}
				
			   if(password.trim().length < 4){
					errorlog = true;
					errormsg += "- Please enter a new valid password of atleast 4 characters long to change.\n";
				}
				
					if(errorlog){
					errormsg += "\nPlease correct these errors before submitting.";
					alert(errormsg);
					} else{
					setTimeout(setMain, 1000);
				}
			} else {
			}
              }
			  
			  function setMain(){
				alert("Password changed succcessfully");
			  	window.location.href = "home.php";
			}
			
			function logout(){
				var r = confirm("Do you want to logout?");
			if (r == true) {
				alert("Logout successfully");
				window.location.href = "index.php";
				} else{}
				}
				
        </script>
		
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">


	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="home.php"><img src="images/logo.png" alt=""/></a>
	    </div>
	  <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	        	<?php

                    echo "&nbsp;&nbsp;&nbsp;&nbsp;"."Hello, ".$_SESSION['CurrentUser']."<br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['Role']."<br>";
                    ?>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
		            <ul class="dropdown-menu">
			            <li><a href="jobs.php">Part-time Jobs</a></li>
			            <li><a href="jobs.php">Internships</a></li>
			            <li><a href="jobs.php">Full-time Jobs</a></li>
		            </ul>
		        </li>
				        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employers<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="post.php">Post Jobs</a></li>
						    <li><a href="search.php">Search applicants</a></li>
							  <li><a href="searchmatched.php">Search for matched applicants</a></li>
		             </ul>
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
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Change Password</h2>
        <form>
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="existpassword">Existing password</label>
                <div class="col-md-9">
                    <input type="password" path="existpassword" name="existpassword" id="existpassword" class="form-control input-sm" placeholder = "Existing password"/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="newpassword">New Password</label>
                <div class="col-md-9">
                    <input type="password" path="newpassword" name="newpassword" id="newpassword" class="form-control input-sm" placeholder = "New Password"/>
                </div>
            </div>
        </div>
		
		<div class="form-actions floatRight">
				<input type="submit" Value="Submit "name="Submit" id="Submit" >
		</div>
	</form>

	<?php if(isset($_GET['Submit'])){

		$currentUser = $_SESSION['CurrentUser'];
		$Role = $_SESSION['Role'];
		$oldPassword = $_GET['existpassword'];
		$newPassword = $_GET['newpassword'];

		

		// echo "$oldPassword"."<br>"."$newPassword";

		if ($oldPassword == $newPassword){
			echo("<script>alert('Please enter a different password!')</script>");
		}

		if ($Role == 'Employer'){
			$sqlCheckPassword  = "SELECT password from employer where '$currentUser' = email";
			// $sql = "UPDATE EMPLOYER set password = '" . $newPassword . "' where email = '" . $currentUser . "'";
			$sql = "UPDATE employer set password = :password where email = '$currentUser'";

		}
		else if ($Role == 'Applicant'){
			$sqlCheckPassword  = "SELECT password from applicant where '$currentUser' = email";
			$sql = "UPDATE applicant set password = :password where email = '$currentUser'";
			// $sql_check = 'SELECT password from APPLICANT where email = $currentUser';

		}
		else if ($Role == 'Administrator'){
			$sqlCheckPassword  = "SELECT password from admins where '$currentUser' = email";
			$sql = "UPDATE Admins set password = :password where email = '$currentUser'";
			// $sql_check = 'SELECT password from ADMIN where email = $currentUser';

		}

		// echo "$sql"."<br>";

		$stidCheckPassword = oci_parse($dbh, $sqlCheckPassword);
		oci_execute($stidCheckPassword, OCI_DEFAULT);
		$flag = false;

		while($queryCheckPassword = oci_fetch_array($stidCheckPassword)){
									// echo "Count: "."$count";
			// echo "old password: "."$queryCheckPassword[0]"."<br>";
			if ($queryCheckPassword[0] == $oldPassword){
				$flag = true;
			}							
		}

		oci_free_statement($stidCheckPassword);

		if (!$flag){
			echo("<script>alert('You have entered the wrong password!')</script>");
		}
		else{
			// echo "$sql"."<br>";

			$stid = oci_parse($dbh, $sql);
			oci_bind_by_name($stid, ":password", $newPassword);
			oci_execute($stid);
			oci_free_statement($stid);
		}



		
		//

		

		// $stidCheck = oci_parse($dbh, $sql_check);
		// oci_execute($stid,OCI_DEFAULT);

		echo ("<script>alert('You pasword has been changed successfully!')</script>");
		die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0099726/index.php'</script>");

	}


	?>
		
    </div>
 </div>
</div>
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
