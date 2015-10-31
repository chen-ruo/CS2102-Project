<?php
include 'connectToServer.php'
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
                var firstname = document.getElementById("firstName").value
                var lastname = document.getElementById("lastName").value
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
				var username = document.getElementById("email").value
				var password = document.getElementById("password").value
				var age = document.getElementById("age").value
				var mobilenum = document.getElementById("mobilenum").value
				var gender = document.getElementById("gender").value
				var dob = document.getElementById("dob").value
				var nationality = document.getElementById("nationality").value
				
			var r = confirm("Are you sure to register for an account?");
			if (r == true) {

			 var errormsg = "Below are the errors:\n\n";
			   var errorlog = false;
			   
			   if( firstname.trim().length == 0) {
					errorlog = true;
					errormsg += "- firstname field is empty.\n";
				}
			    if( username.trim().length == 0) {
					errorlog = true;
					errormsg += "- Email field is empty.\n";
				} else if (!username.match(re)){
					errorlog = true;
					errormsg += "- Email is invalid. Please enter a valid email so that we can send a confirmation email to you.\n";
				}
			   if(password.trim().length < 4){
					errorlog = true;
					errormsg += "- Please enter a valid password of atleast 4 characters long.\n";
				}
			  if (Number(age)*0 != 0 || age.trim().length == 0 || Number(age) < 13 || Number(age) > 99){
					errorlog = true;
					errormsg += "- Please enter a valid agae\n";
				} if (mobilenum.trim().length == 0){
					errorlog = true;
					errormsg += "- Mobile number is empty\n";
					} if (gender != 'F' && gender != 'M'){
					errorlog = true;
					errormsg += "- Gender is invalid. Please enter M for male and F for female.\n"
					} if (dob.trim().length == 0){
					errorlog = true;
					errormsg += "- DOB is empty.\n"
					}
					if (nationality.trim().length == 0){
					errorlog = true;
					errormsg += "- Nationality is empty.\n"
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
        <h2>Applicant Register Form</h2>
        <form>
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">First Name</label>
                <div class="col-md-9">
                    <input type="text" name = "firstName" path="firstName" id="firstName" class="form-control input-sm"/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Last Name</label>
                <div class="col-md-9">
                    <input type="text" name ="lastName" path="lastName" id="lastName" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
		<!-- Primary key -->
		
		<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9">
                    <input type="text" name="email" path="email" id="email" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
		        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="password">Password</label>
                <div class="col-md-9">
                    <input type="password" name="password" path="password" id="password" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
		     <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="age">Age</label>
                <div class="col-md-9">
                    <input type="text" name="age" path="password" id="age" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="mobilenum">Mobile Number</label>
                <div class="col-md-9">
                    <input type="text" name="mobilenum" path="lastName" id="mobilenum" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="gender">Gender</label>
                <div class="col-md-9">
                    <input type="radio" name="gender" id="Format1" value="Male">Male
					<input type="radio" name="gender" id="Format2" value="Female">Female
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Date of birth *(Please enter it in this format dd-Mth-yy)</label>
                <div class="col-md-9">
                    <input type="text" name="dob" path="dob" id="dob" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="nationality">Nationality</label>
                <div class="col-md-9">
                    <input type="text" name="nationality" path="nationality" id="nationality" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="website">Personal website</label>
                <div class="col-md-9">
                    <input type="text" name="website" path="website" id="website" class="form-control input-sm"/>
                </div>
            </div>
        </div>

        <input type="submit" name="formSubmit" value="Submit" style="display: block; margin: 0 auto;" >
		
		</form>

		 <?php if(isset($_GET['formSubmit']))
		{
			$firstname = $_GET['firstName'];
			$lastname = $_GET['lastName'];
			$email = $_GET['email'];
			$password = $_GET['password'];
			$age = $_GET['age'];
			$mobilenumber = $_GET['mobilenum'];
			$gender = $_GET['gender'];
			$dateofbirth = $_GET['dob'];
			$nationality = $_GET['nationality'];
			$personalweb = $_GET['website'];

			$sql_check = 'SELECT email FROM applicant';


			$stid_check = oci_parse($dbh, $sql_check);

			oci_execute($stid_check, OCI_DEFAULT);

			$exist = 0;

			while($query_applicant = oci_fetch_array($stid_check)){

				if($email == $query_applicant[0]){
					$exist = 1;
				}
			}

			if($exist == 0){
				$sql_insert = 'INSERT INTO applicant (firstname, lastname, email, password, age, mobilenumber, gender, dateofbirth, nationality, personalweb) VALUES(:firstname, :lastname, :email, :password, :age, :mobilenumber, :gender, :dateofbirth, :nationality, :personalweb)';
				
				//echo "<b>SQL: </b>".$sql."<br><br>";
				$stid = oci_parse($dbh, $sql_insert);
				oci_bind_by_name($stid, ":firstname", $firstname);
				oci_bind_by_name($stid, ":lastname", $lastname);
				oci_bind_by_name($stid, ":email", $email);
				oci_bind_by_name($stid, ":password", $password);
				oci_bind_by_name($stid, ":age", $age);
				oci_bind_by_name($stid, ":mobilenumber", $mobilenumber);
				oci_bind_by_name($stid, ":gender", $gender);
				oci_bind_by_name($stid, ":dateofbirth", $dateofbirth);
				oci_bind_by_name($stid, ":nationality", $nationality);
				oci_bind_by_name($stid, ":personalweb", $personalweb);

				oci_execute($stid);
				oci_free_statement($stid);
			}
			else{
				die("<script> alert ('The email has already been registered!')</script>");
			}

			$sql_insertChk = 'SELECT email FROM applicant';
			$stid_insertChk = oci_parse($dbh, $sql_insertChk);

			oci_execute($stid_insertChk,OCI_DEFAULT);

			$insert_successful = 0;

			while ($query_insertChk = oci_fetch_array($stid_insertChk)) {
				if($email == $query_insertChk[0]){
					$insert_successful =1;
				}
			}

			if($insert_successful == 1){
				echo("<script> alert ('Your account is registered succcessfully!')</script>");
				die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0101002/index.php'</script>");
			}
			oci_free_statement($stid_check);
			oci_free_statement($sql_insertChk);

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
<?php
oci_close($dbh);
?>
</body>
</html>	