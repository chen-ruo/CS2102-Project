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

<!--Date formatter script -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#dob" ).datepicker({
	 changeMonth:true,
					changeYear:true,
					yearRange:"-100:+0",
					dateFormat:"dd-M-y"
					});
  });
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
                <label class="col-md-3 control-lable" for="dob">Date of birth</label>
                <div class="col-md-9">
                   <input type="text" name="dob" id="dob"/>
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
				die("<script>location.href = '/~a0133281/index.php'</script>");
			}
			oci_free_statement($stid_check);
			oci_free_statement($sql_insertChk);

			}
		?>
 	