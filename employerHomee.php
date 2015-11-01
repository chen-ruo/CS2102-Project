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
			  	window.location.href = "index.html";
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
	        <a class="navbar-brand" href="home.html"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
				        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employers<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="postJob.html">Post Jobs</a></li>
						    <li><a href="searchApplicant.html">Search applicants</a></li>
							  <li><a href="searchMatched.html">Search for matched applicants</a></li>
		             </ul>
		        </li>
				
				
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged In<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerProfile.html">User Profile</a></li>
						    <li><a href="employerEdit.html">Profile Settings/Edit</a></li>
							  <li><a href="passwordChange.html">Change Password</a></li>
		             </ul>
		        </li>
				
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
	<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Search for applicants</h1>
		    <p>
			 <input type="text" class="text" placeholder="text" value="Enter applicants name." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">

			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find applicants"></label>
			</p>
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