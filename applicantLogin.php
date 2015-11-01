<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php
include 'connectToServer.php';
if((isset ($_SESSION['logout'])) or isset ($_GET['logout']))
{
	session_unset();
	session_destroy();
}
?>
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
                var name = document.getElementById("email").value
                var password = document.getElementById("password").value
                
               var r = confirm("Are you sure to login?");
			if (r == true) {
				setTimeout(setMain, 1000);
			} else {
			}
              }
			  
			  function setMain(){
				alert("Login succcessfully");
			  	window.location.href = "home.php";
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
	        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""/></a>
	    </div>
    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
			  <li><a href="about.php">About Us</a></li>
		       
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
<div class="banner_1">
	<div class="container">
		<div id="search_wrapper">
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
	   <div class="col-md-4">
	   	  <div class="col_3">
	   	  	<h3>Popular Jobs</h3>
	   	  	<ul class="list_1">
	   	  		<li><a href="#">CFFA Profession - KPMG</a></li>
	   	  		<li><a href="#">Backend design - IBM</a></li>		
	   	  		<li><a href="#">Singapore MOS requiring experts - MOS</a></li>					
	   	  	</ul>
	   	  </div>
	   	  <div class="col_3">
	   	  	<h3>Jobs by Category</h3>
	   	  	<ul class="list_2">
	   	  		<li><a href="#">Software Jobs</a></li>	
	   	  		<li><a href="#">Research Jobs</a></li>
				<li><a href="#">Part-time Jobs</a></li>	
				<li><a href="#">Architecture Jobs</a></li>		
	   	  	</ul>
	   	  </div>
	   	  <div class="widget">
	        <h3>Take The Seeking Poll!</h3>
    	        <div class="widget-content"> 
                 <div class="seeking-answer">
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span">Frequently</span>
		    			</label>
		    		</span>
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span">Interviewing</span>
		    			</label>
		    		</span>
			        <span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span">Leaving a familiar workplace</span>
		    			</label>
		    		</span>
		    		<div class="seeking_vote">
		    		  <a class="seeking-vote-button">Vote</a>
		    		</div>
			     </div>
    	       </div>
    	</div>
	 </div>
	 <div class="col-md-8 single_right">
	 	   <div class="login-form-section">
                <div class="login-content">
                   <!--  <form>
                        <div class="section-title"> -->
                            <h3>Applicant Login</h3>

                            <form> 
							   E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Email" id="Email">
							 
							   <br><br>
							   Password: <input type="password" name="Password" id = "Password">
							
							   <br><br>
							
							   <input type="submit" name="Submit" value="Login">
							</form>

							<?php if(isset($_GET['Submit']))
							{

								// username and password sent from form 
								$username=$_GET['Email']; 
								$password=$_GET['Password']; 

								// echo "$username"."<br>";
								// echo "$password"."<br>";


								$sql_applicant = "select email, password from applicant";
								// $sql_employer =  "select email, password from employer";
								$stid_applicant = oci_parse($dbh, $sql_applicant);
								// $stid_employer = oci_parse($dbh, $sql_employer);

								$exist = false;
								oci_execute($stid_applicant, OCI_DEFAULT);
								// oci_execute($stid_employer, OCI_DEFAULT);

								$count_applicant = 0;
								// $count_employer = 0;
								
								while($query_applicant = oci_fetch_array($stid_applicant)){
									//echo "$count"."<br>";
									//echo "$query[0] $query[1]"."<br>";
									//echo "Applicant: "."<br>";
									//echo "$query_applicant[0] $query_applicant[1]"."<br><br>";
									if ($username == $query_applicant[0] and $password == $query_applicant[1]){
										 $count_applicant++;
									}
									// echo "Count: $count"."<br>";
								}

								// while($query_employer = oci_fetch_array($stid_employer)){
								// 	//echo "$count"."<br>";
								// 	//echo "$query[0] $query[1]"."<br>";
								// 	//echo "Employer: "."<br>";
								//     //echo "$query_employer[0] $query_employer[1]"."<br>";
								// 	if ($username == $query_employer[0] and $password == $query_employer[1]){
								// 		 $count_employer++;
								// 	}
								// 	// echo "Count: $count"."<br>";
								// }

								if($count_applicant == 1){
									$_SESSION['CurrentUser'] = $username;
									$_SESSION['Role'] = 'Applicant';
									//die("<script> alert ('Employer')</script>");
									die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0101973/applicantHome.php'</script>");
								}else{
									//echo "Wrong Username or Password";
									die("<script> alert ('Wrong Email or Password')</script>");
									//die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0101973/home.php'</script>");
								
								}

							}
							?>	



                        <!-- </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                <input type="text" required="required" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="textbox-wrap">
                            <div class="input-group">
                                <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                <input type="password" required="required" class="form-control " placeholder="Password">
                            </div>
                        </div>
                     </form> -->
                     <div class="forgot">
						 <div class="login-check">
				 			<label class="checkbox1"><input type="checkbox" name="checkbox" checked="checked"><i> </i>Sign Up for Newsletter</label>
				         </div>
				 		  <div class="login-para">
				 			<p><a href="forgetPass.php"> Forgot Password? </a></p>
				 		 </div>
					     <div class="clearfix"> </div>
			        </div>
			<!-- <a type="submit" class="btn btn-default" onClick = "checkServer()" >Submit</a> -->
					<div class="login-bottom">
					 <p>With your social media account</p>
					 <div class="social-icons">
						<div class="button">
							<a class="tw" href="#"> <i class="fa fa-twitter tw2"> </i><span>Twitter</span>
							<div class="clearfix"> </div></a>
							<a class="fa" href="#"> <i class="fa fa-facebook tw2"> </i><span>Facebook</span>
							<div class="clearfix"> </div></a>
							<a class="go" href="#"><i class="fa fa-google-plus tw2"> </i><span>Google+</span>
							<div class="clearfix"> </div></a>
							<div class="clearfix"> </div>
						</div>
						<h4>Don,t have an Account? <a href="register.php"> Register Now!</a></h4>
					 </div>
		           </div>
                </div>
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
<?php oci_close($dbh); ?>
</html>	