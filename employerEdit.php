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
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
				var companyname = document.getElementById("companyname").value
				var companynum = document.getElementById("companynum").value
				var companyurl = document.getElementById("companyurl").value
				var industry = document.getElementById("industry").value
				var addressofcompany = document.getElementById("addressofcompany").value
				var natureofbusiness = document.getElementById("natureofbusiness").value
				var postalcode = document.getElementById("addressofcompany").value
				
			var r = confirm("Are you sure to edit your profile?");
			if (r == true) {

			 var errormsg = "Below are the errors:\n\n";
			   var errorlog = false;
			   
			   if( companyname.trim().length == 0){
					errorlog = true;
					errormsg += "- Name of company is empty\n";
				} if (companynum.trim().length == 0){
					errorlog = true;
					errormsg += "- company number is empty\n";
					} if (addressofcompany.trim().length == 0){
					errorlog = true;
					errormsg += "- Missing address of company\n"
					} if (industry.trim().length == 0){
					errorlog = true;
					errormsg += "- Industry is empty.\n"
					}
					if (natureofbusiness.trim().length == 0){
					errorlog = true;
					errormsg += "- Nature of business is empty.\n"
					} 	if (postalcode.trim().length == 0){
					errorlog = true;
					errormsg += "- Company's postal code is empty.\n"
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
				alert("Profile edited successfully");
			  	window.location.href = "index.php";
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
						  <li><a href="employerProfile.php">User Profile</a></li>
						    <li><a href="employerEdit.php">Profile Settings/Edit</a></li>
							  <li><a href="passwordChange.php">Change Password</a></li>
		             </ul>
		        </li>
				
				
				<li><a href = "index.php" onClick = <?php session_destroy();?>>Logout</a></li>
	    </div>
                <div class="clearfix"></div>
            </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Profile edit</h2>
        <form>
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="companyname">Company name</label>
                <div class="col-md-9">
                    <input type="text" path="companyname" id="companyname" class="form-control input-sm"/>
                </div>
            </div>
         </div>

		 
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="companynum">Company number</label>
                <div class="col-md-9">
                    <input type="text" path="companynum" id="companynum" class="form-control input-sm"/>
                </div>
            </div>
         </div>
		 
		 		 			<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="companyurl">Company URL</label>
                <div class="col-md-9">
                    <input type="text" path="companyurl" id="companyurl" class="form-control input-sm"/>
                </div>
            </div>
         </div>
		 
		 
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="postalcode">Company Postal Code</label>
                <div class="col-md-9">
                    <input type="text" path="postalcode" id="postalcode" class="form-control input-sm"/>
                </div>
            </div>
         </div>
		 
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="natureofbusiness">Nature of Business</label>
                <div class="col-md-9">
                    <input type="text" path="natureofbusiness" id="natureofbusiness" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="addressofcompany">Address of Company</label>
                <div class="col-md-9">
                    <input type="text" path="addressofcompany" id="addressofcompany" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="industry">Industry</label>
                <div class="col-md-9">
                    <input type="text" path="industry" id="industry" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		</form>
		    <input type="submit" name="formSubmit" value="Submit" style="display: block; margin: 0 auto;" >
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