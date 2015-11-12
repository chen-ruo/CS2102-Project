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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""></a>
                </div>
                <!--/.navbar-header-->
                <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
			  <li><a href="about.php">About Us</a></li>
		        
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login<b class="caret"></b></a>
		             <ul class="dropdown-menu">
		              <li><a href="adminLogin.php">Admin login</a></li>
						  <li><a href="employerLogin.php">Employer login</a></li>
						    <li><a href="applicantLogin.php">Applicant login</a></li>
		             </ul>
		        </li>
			<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registration<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerRegister.php">Create an employer account</a></li>
						    <li><a href="applicantRegister.php">Create an applicant account</a></li>
		             </ul>
		        </li>
                <div class="clearfix"></div>
            </div>
            <!--/.navbar-collapse-->
        </nav>
	  
        <div class="container">
            <div class="single">
                <div class="section-title">
                    <h3>Admin Login</h3><br>
                </div>
				
					<form> 
					   E-mail: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="Email" id="Email">
					 
					   <br><br>
					   Password: <input type="password" name="Password" id = "Password">
					
					   <br><br>
					
					   <input type="submit" name="Submit" value="Login">
					</form>
					
		
				
					
					<div class="forgot">
                    <div class="login-check">
                        <label class="checkbox1">
                            <input type="checkbox" name="checkbox" checked="">
                            <i></i>Sign Up for Newsletter</label>
                    </div>
                    <div class="login-para">
                    
                    </div>
                    <div class="clearfix"></div>
                </div>
					

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
                            <div class="clearfix"></div>
                        </div>
                
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
<!-- footer --> 
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="applicantLogin.php">Sign In</a></li>
				<li><a href="applicantRegister.php">Register</a></li>
				<li><a href="about.php">About</a></li>
			</ul>
			<!-- <ul class="f_list">
				<li><a href ="jobs.php">Find a Job</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="post.php">Post a Job</a></li>
			</ul> -->
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




				<?php if(isset($_GET['Submit']))
				{
					// username and password sent from form 
					$username=$_GET['Email']; 
					$password=$_GET['Password']; 
					// echo "$username"."<br>";
					// echo "$password"."<br>";
					// $sql_applicant = "select email, password from applicant";
					$sql_employer =  "select email, password from admins";
					// $stid_applicant = oci_parse($dbh, $sql_applicant);
					$stid_employer = oci_parse($dbh, $sql_employer);
					$exist = false;
					// oci_execute($stid_applicant, OCI_DEFAULT);
					oci_execute($stid_employer, OCI_DEFAULT);
					// $count_applicant = 0;
					$count_employer = 0;
					
					// while($query_applicant = oci_fetch_array($stid_applicant)){
					// 	//echo "$count"."<br>";
					// 	//echo "$query[0] $query[1]"."<br>";
					// 	//echo "Applicant: "."<br>";
					// 	//echo "$query_applicant[0] $query_applicant[1]"."<br><br>";
					// 	if ($username == $query_applicant[0] and $password == $query_applicant[1]){
					// 		 $count_applicant++;
					// 	}
					// 	// echo "Count: $count"."<br>";
					// }
					while($query_employer = oci_fetch_array($stid_employer)){
						//echo "$count"."<br>";
						//echo "$query[0] $query[1]"."<br>";
						//echo "Employer: "."<br>";
					    //echo "$query_employer[0] $query_employer[1]"."<br>";
						if ($username == $query_employer[0] and $password == $query_employer[1]){
							 $count_employer++;
						}
						// echo "Count: $count"."<br>";
					}
					if($count_employer == 1){
						$_SESSION['CurrentUser'] = $username;
						$_SESSION['Role'] = 'Administrator';
						//die("<script> alert ('Employer')</script>");
						die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0101002/adminHome.php'</script>");
					}else{
						//echo "Wrong Username or Password";
						die("<script> alert ('Wrong Email or Password')</script>");
						//die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0101973/home.php'</script>");
					
					}
				}
				?>
				
					
					
					<!--<p><span class="error">* required field.</span></p>-->
				
