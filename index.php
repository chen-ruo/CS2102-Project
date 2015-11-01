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
	        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
			  <li><a href="about.php">About Us</a></li>
			   <li> <a href="#process">Our process</a></li>
				<li><a href="contact.php">contact Us</a></li>
		        
				        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employers<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="post.php">Post Jobs</a></li>
						    <li><a href="search.php">Search applicants</a></li>
							  <li><a href="searchmatched.php">Search for matched applicants</a></li>
		             </ul>
		        </li>
				
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
<div class="banner">
	<div class="container">
		<div id="search_wrapper">
		 <div id="search_form" class="clearfix">
		 <h1>Start your job search</h1>
		    <p>
			 <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
			 <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
			</p>

			<!-- add in code here -->
			<?php


			
			?>




            <h2 class="title">Top searches</h2>
         </div>
		 <div id="city_1" class="clearfix">
			 <ul class="orange">
			 </li>
			 <li>
			 <a href="#" title="Fresher">Fresher</a>
			 </li>
			 <li>
			 <a href="#" title="Engineering">Engineering</a>
			 </li>
			 <li>
			 <a href="#" title="Finance Jobs">Finance</a>
			 </li>
			 <li>
			 <a href="#" title="Teaching">Teaching</a>
			 </li>
			 <li>
			 <a href="#" title="Software">Software</a>
			 </li>
			 <li>
			 <a href="#" title="Accounting">Accounting</a>
			 </li>
			 <li>
			 <a href="#" title="Data Entry">Data Entry</a>
			 </li>
			 </ul>
			 <ul class="blue">
			 <li>
			 <a href="#" title="Marketing Jobs">Marketing </a>
			 </li>
			 <li>
			 <a href="#" title="Freelancer">Freelancer</a>
			 </li>
			 <li>
			 <a href="#" title="Internet Jobs">Internet</a>
			 </li>
			 <li>
			 <a href="#" title="Sales">Sales</a>
			 </li>
			  <li>
			 <a href="#" title="Legal">Legal</a>
			 </li>
			 <li>
			 <a href="#" title="HR">HR</a>
			 </li>
			 <li>
			 </li>
			 </ul>
	     </div>
       </div>
   </div> 
</div>	
<div class="container">
  <div class="grid_1">
	 <h3>Featured Employers</h3>
	   <ul id="flexiselDemo3">
	      <li><img src="images/c1.gif"  class="img-responsive" /></li>
		  <li><img src="images/c2.gif"  class="img-responsive" /></li>
		  <li><img src="images/c3.gif"  class="img-responsive" /></li>
		  <li><img src="images/c4.gif"  class="img-responsive" /></li>
		  <li><img src="images/c5.gif"  class="img-responsive" /></li>
		  <li><img src="images/c6.gif"  class="img-responsive" /></li>	
	    </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay:false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
	   <div class="clearfix"></div>
	 </div>
	 <!--Our process -->
	 	<div class="container" id = "process">
		  <div class="grid_1">
				<h3>Our Process</h3>
		</div>
		</div>
		<div class="our">
			<div class="our-top">
				<div class="col-md-4 our-left">
					<i class="best"></i>
					<div><img src="images/works1.png"/></div>
					<h3>Searching for the best job</h3>	
					<p>Search a wide variety of jobs with our portal.</p>
				</div>
				<div class="col-md-4 our-left">
					<i class="resu"></i>
					<div><img src="images/works2.png"/></div>
					<h3>Apply for the job</h3>	
					<p>Apply for a job with convenience.</p>
				</div>
				<div class="col-md-4 our-left">
					<i class="interv"></i>
					<div><img src="images/works3.png"/></div>
					<h3>Route to getting employed</h3>	
					<p>Once applied, employer will be informed of the application.</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<br><br><br><br>
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