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
                var description = document.getElementById("description").value
                var qualification = document.getElementById("qualification").value
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
				var age = document.getElementById("age").value
			
				
			var r = confirm("Are you sure to register for an account?");
			if (r == true) {

			 var errormsg = "Below are the errors:\n\n";
			   var errorlog = false;
			   
			   if( description.trim().length == 0) {
					errorlog = true;
					errormsg += "- Job description field is empty.\n";
				}
			    if( qualification.trim().length == 0) {
					errorlog = true;
					errormsg += "- Job minimum qualification field is empty.\n";
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
				alert("Account created succcessfully");
			  	window.location.href = "index.php";
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
			  <li><a href="about.php">About Us</a></li>
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
				<!-- 
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerLogin.php">Employer login</a></li>
						    <li><a href="applicantLogin.php">Applicant Login</a></li>
		             </ul>
		        </li> -->
		<!-- 	<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerRegister.php">Create an employer account</a></li>
						    <li><a href="applicantRegister.php">Create an applicant account</a></li>
		             </ul>
		        </li> -->
		     <li><a href = "index.php" onClick = <?php session_destroy();?>>Logout</a></li>   
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Post Job Details</h2>
        <form>
		<!-- Primary key -->
		
		   <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="jobtype">Job Type</label>
                <div class="col-md-9">
                    <input type="radio" name="jobtype" id="Format1" value="intern">Internship
					<input type="radio" name="jobtype" id="Format2" value="permanent">Permanent
					<input type="radio" name="jobtype" id="Format2" value="temporary">Temporary
                </div>
            </div>
        </div>
		
		
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="description">Job Description</label>
                <div class="col-md-9">
                    <input type="text" name = "description" path="description" id="description" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="description">Job Description</label>
                <div class="col-md-9">
                    <input type="text" name = "description" path="description" id="description" class="form-control input-sm"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="category">Job Category</label>
                <div class="col-md-9">
                    <input type="text" name = "category" path="category" id="category" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
		        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="qualification">Minimum Qualification</label>
                <div class="col-md-9">
                    <input type="text" name = "qualification" path="qualification" id="qualification" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="skill">Required Skills</label>
                <div class="col-md-9">
                    <input type="text" name = "skill" path="skill" id="skill" class="form-control input-sm"/>
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