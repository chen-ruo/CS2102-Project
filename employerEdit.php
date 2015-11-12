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
	        <a class="navbar-brand" href="employerHome.php"><img src="images/logo.png" alt=""/></a>
	    </div>
               <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	        	<?php

                    echo "&nbsp;&nbsp;&nbsp;&nbsp;"."Hello, ".$_SESSION['CurrentUser']."<br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['Role']."<br>";
                    ?>
            <li><a href="employerHome.php">Search Employees</a></li>
			<li><a href="postJob.php">Post Jobs</a></li>

		        </li>
				
				
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged In<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="employerProfile.php">User Profile</a></li>
						    <li><a href="employerEdit.php">Profile Settings/Edit</a></li>
						    <li><a href="editJob.php">Jobs Settings/Edit</a></li>
							<li><a href="passwordChange.php">Change Password</a></li>
		             </ul>
		        </li>
		        <li><a href = "logout.php">Logout</a></li>
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
                    <input type="text" name="companyname" path="companyname" id="companyname" class="form-control input-sm"/>
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
        <input type="submit" Value="Submit "name="Submit" id="Submit" style="display: block; margin: 0 auto;">
		</form>

		<?php if(isset($_GET['Submit']))
		{

			$currentUser  = $_SESSION['CurrentUser'];
			if($companyname  = $_GET['companyname']){

		
				$sql_updatename = "UPDATE employer SET companyname = :companyname where email = '$currentUser'";
				$stid_updatename = oci_parse($dbh, $sql_updatename);
				oci_bind_by_name($stid_updatename, ":companyname", $companyname);
				oci_execute($stid_updatename);
				oci_free_statement($stid_updatename);
			}

			if($companynum = $_GET['companynum']){
				
				$sql_updatenum = "UPDATE employer SET companynum = :companynum where email = '$currentUser'";
				$stid_updatenum = oci_parse($dbh, $sql_updatenum);
				oci_bind_by_name($stid_updatenum, ":companynum", $companynum);
				oci_execute($stid_updatenum);
				oci_free_statement($stid_updatenum);
			}

			if($companyurl = $_GET['companyurl']){
				
				$sql_updateurl = "UPDATE employer SET companyurl = :companyurl where email = '$currentUser'";
				$stid_updateurl = oci_parse($dbh, $sql_updateurl);
				oci_bind_by_name($stid_updateurl, ":companyurl", $companyurl);
				oci_execute($stid_updateurl);
				oci_free_statement($stid_updateurl);
			}

			if($postalcode = $_GET['postalcode']){
				
				$sql_updatepc = "UPDATE employer SET postalcode = :postalcode where email = '$currentUser'";
				$stid_updatepc = oci_parse($dbh, $sql_updatepc);
				oci_bind_by_name($stid_updatepc, ":postalcode", $postalcode);
				oci_execute($stid_updatepc);
				oci_free_statement($stid_updatepc);
			}

			if($natureofbusiness = $_GET['natureofbusiness']){
				
				$sql_updatenob = "UPDATE employer SET natureofbusiness = :natureofbusiness where email = '$currentUser'";
				$stid_updatenob = oci_parse($dbh, $sql_updatenob);
				oci_bind_by_name($stid_updatenob, ":natureofbusiness", $natureofbusiness);
				oci_execute($stid_updatenob);
				oci_free_statement($stid_updatenob);
			}

			if($addressofcompany   = $_GET['addressofcompany']){
				
				$sql_updateaddress = "UPDATE employer SET addressofcompany = :addressofcompany where email = '$currentUser'";
				$stid_updateaddress = oci_parse($dbh, $sql_updateaddress);
				oci_bind_by_name($stid_updateaddress, ":addressofcompany", $addressofcompany);
				oci_execute($stid_updateaddress);
				oci_free_statement($stid_updateaddress);
			}

			if($industry = $_GET['industry']){
				
				$sql_updateindustry = "UPDATE employer SET industry = :industry where email = '$currentUser'";
				$stid_updateindustry = oci_parse($dbh, $sql_updateindustry);
				oci_bind_by_name($stid_updateindustry, ":industry", $industry);
				oci_execute($stid_updateindustry);
				oci_free_statement($stid_updateindustry);
			}		
			
			}
		?>
		       
		    </div>
 </div>
</div>


<!-- footer --> 
<div class="footer">
	<div class="container">
		
		<div class ="col-md-4 grid 3">
		</div>
		<div class="col-md-3 grid_3">
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