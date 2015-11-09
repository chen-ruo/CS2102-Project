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
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""></a>
                </div>
                <!--/.navbar-header-->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
			  <li><a href="about.html">About Us</a></li>
			    <li><a href="#findus">Locate Us</a></li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
		            <ul class="dropdown-menu">
			            <li><a href="jobs.html">Part-time Jobs</a></li>
			            <li><a href="jobs.html">Internships</a></li>
			            <li><a href="jobs.html">Full-time Jobs</a></li>
		            </ul>
		        </li>
				        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employers<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="post.html">Post Jobs</a></li>
						    <li><a href="search.html">Search applicants</a></li>
							  <li><a href="searchmatched.html">Search for matched applicants</a></li>
		             </ul>
		        </li>
				
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerLogin.html">Employer login</a></li>
						    <li><a href="applicantLogin.html">Applicant Login</a></li>
		             </ul>
		        </li>
			<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerRegister.html">Create an employer account</a></li>
						    <li><a href="applicantRegister.html">Create an applicant account</a></li>
		             </ul>
		        </li>
                <div class="clearfix"></div>
            </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
			 <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
			 <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="content_bottom">
	   	 <h3>Contact Form</h3>
	   	   <form>
			<div class="contact_box1">
             	<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			 	<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:3%">
			 	<input type="text" class="text" value="Contact number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" style="margin-left:3%">
			</div>
			<div class="text_1">
               <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
            </div>
			<div class="form-actions floatRight">
				<a type="submit" class="btn btn-default" onClick = "checkServer()" >Submit</a>
		</div>
			<div class="clearfix"></div>
           </form>
	   </div>
    </div>
</div>
<div class="map" id = "findus">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7991789190214!2d103.773846!3d1.295053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da1af8c0faba33%3A0x9f0d02392be4dfbe!2sNational+University+of+Singapore+School+of+Computing!5e0!3m2!1sen!2ssg!4v1443344644503" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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