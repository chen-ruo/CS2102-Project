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
                <div class="clearfix"></div>
            </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Employer Register Form</h2>
        <form>
		
		<!-- primary key -->
		
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
                <label class="col-md-3 control-lable" for="companyname">Company name</label>
                <div class="col-md-9">
                    <input type="text" name="companyname"  path="companyname" id="companyname" class="form-control input-sm"/>
                </div>
            </div>
         </div>

		 
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="companynum">Company number</label>
                <div class="col-md-9">
                    <input type="text" name="companynum" path="companynum" id="companynum" class="form-control input-sm"/>
                </div>
            </div>
         </div>
		 
		 		 			<div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="companyurl">Company URL</label>
                <div class="col-md-9">
                    <input type="text" name="companyurl" path="companyurl" id="companyurl" class="form-control input-sm"/>
                </div>
            </div>
         </div>
		 
		 
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="postalcode">Company Postal Code</label>
                <div class="col-md-9">
                    <input type="text" name="postalcode" path="postalcode" id="postalcode" class="form-control input-sm"/>
                </div>
            </div>
         </div>
		 
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="natureofbusiness">Nature of Business</label>
                <div class="col-md-9">
                    <input type="text" name="natureofbusiness" path="natureofbusiness" id="natureofbusiness" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="addressofcompany">Address of Company</label>
                <div class="col-md-9">
                    <input type="text" name="addressofcompany" path="addressofcompany" id="addressofcompany" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="industry">Industry</label>
                <div class="col-md-9">
                    <input type="text" name="industry" path="industry" id="industry" class="form-control input-sm"/>
                </div>
            </div>
        </div>
          <input type="submit" name="formSubmit" value="Submit" style="display: block; margin: 0 auto;" >
		</form>
		 <?php if(isset($_GET['formSubmit']))
		{
			$email = $_GET['email'];
			$password = $_GET['password'];
			$companyname = $_GET['companyname'];
			$companynum = $_GET['companynum'];
			$companyurl = $_GET['companyurl'];
			$postalcode = $_GET['postalcode'];
			$natureofbusiness = $_GET['natureofbusiness'];
			$companyaddress = $_GET['addressofcompany'];
			$industry = $_GET['industry'];

			$sql_check = 'SELECT email FROM employer';
			$stid_check = oci_parse($dbh, $sql_check);

			oci_execute($stid_check, OCI_DEFAULT);

			$exist = 0;

			while($query_employer = oci_fetch_array($stid_check)){

				if($email == $query_employer[0]){
					$exist = 1;
				}
			}

			if($exist == 0){

				$sql = 'INSERT INTO employer (email, password, companyname, companynum, companyurl, postalcode, natureofbusiness, companyaddress, industry) VALUES(:email, :password, :companyname, :companynum, :companyurl, :postalcode, :natureofbusiness, :companyaddress, :industry)';
				
				//echo "<b>SQL: </b>".$sql."<br><br>";
				$stid = oci_parse($dbh, $sql);
				oci_bind_by_name($stid, ":email", $email);
				oci_bind_by_name($stid, ":password", $password);
				oci_bind_by_name($stid, ":companyname", $companyname);
				oci_bind_by_name($stid, ":companynum", $companynum);
				oci_bind_by_name($stid, ":companyurl", $companyurl);
				oci_bind_by_name($stid, ":postalcode", $postalcode);
				oci_bind_by_name($stid, ":natureofbusiness", $natureofbusiness);
				oci_bind_by_name($stid, ":companyaddress", $companyaddress);
				oci_bind_by_name($stid, ":industry", $industry);

		
				oci_execute($stid);
				oci_free_statement($stid);
			}
			else{
				die("<script> alert ('The email has already been registered!')</script>");
			}

			$sql_insertChk = 'SELECT email FROM employer';
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