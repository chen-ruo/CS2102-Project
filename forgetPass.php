<?php
include 'connectToServer.php';
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
			  <li><a href="about.php">About Us</a></li>
		    
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerLogin.php">Employer login</a></li>
						    <li><a href="applicantLogin.php">Applicant Login</a></li>
		             </ul>
		        </li>
			<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerRegister.php">Create an employer account</a></li>
						    <li><a href="applicantRegister.php">Create an applicant account</a></li>
		             </ul>
		        </li>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Password Retrieve</h2>
        <form>
		
		  <div class="row">
            <div class="form-group col-md-12">
                <label class="control-label" for="email">Fill in your registered email below to retrieve your password.</label>
                <input class="form-control" id="email" name="email"
                                placeholder="Enter email to retrieve password" type="email">
                            </div>

                   <div> <input type="radio" name="Role" id="Role1" value="Employer">Employer
                   <input type="radio" name="Role" id="Role2" value="Applicant">Applicant</div>
                    <br><br>
        	<input type="submit" name="Submit" value="Retrieve">
							</form>
							
							
							                    </div>
                    </div>
					</div>
					</div>
<!-- footer --> 
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="applicantLogin.php">Sign In</a></li>
				<li><a href="applicantRegister.php">Join Now</a></li>
				<li><a href="about.php">About</a></li>
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
							<?php if(isset($_GET['Submit'])){

								$email=$_GET['email']; 
								$role=$_GET['Role'];

								// echo "$email"."<br>"."$role";

								if ($role == 'Employer'){
									$sql = "select e.password from employer e 
											where '$email' = e.email";
									$sql_check = "select email from employer";
								}
								else if ($role == 'Applicant'){

									$sql = "select a.password from applicant a
											where '$email' = a.email";
									$sql_check = "select email from applicant";
								} 

								$count = 0;

								$stid_check = oci_parse($dbh, $sql_check);
								oci_execute($stid_check, OCI_DEFAULT);

								while($query_check = oci_fetch_array($stid_check)){
									// echo "Count: "."$count";
									if ($query_check[0] == $email){
										$count++;
									}
									
								}
								// echo "Count: "."$count";
								// echo "<br>"."$sql"."<br>";

								$stid = oci_parse($dbh, $sql);
								$exist = false;
								oci_execute($stid, OCI_DEFAULT);

								if ($count == 0){
									echo ("<script>alert('No such user!')</script>");
								}
								else if ($count == 1){
									while($query = oci_fetch_array($stid)){
										$password = $query[0];
										die("<script>alert('Passwor: $password')</script>");
									}
								}


								// while($query = oci_fetch_array($stid)){
								// 	$password = $query[0];
								// 	// echo "$password";
								// 	if ($count == 0){
								// 		echo "<br>"."No such user";
								// 	}else if ($count == 1){
								// 			// die("<script> alert ('Wrong Email or Password')</script>");
								// 			die("<script>alert('Passwor: $password')</script>");
								// 		}
										
								// }		// echo "Password: "."$query[0]"."<br>";					
								
							}
					?>

                            <!-- <a type="submit" class="btn btn-default" onClick = "sendtoserver()" >Submit</a> -->
