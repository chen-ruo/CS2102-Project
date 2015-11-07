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
				var hq = document.getElementById("hq").value
				var skills = document.getElementById("skills").value
				var descrip = document.getElementById("descrip").value
				var work = document.getElementById("work").value
				var title = document.getElementById("title").value
				
			var r = confirm("Are you sure to edit your profile?");
			if (r == true) {

			 var errormsg = "Below are the errors:\n\n";
			   var errorlog = false;
			   
			   if( hq.trim().length == 0) {
					errorlog = true;
					errormsg += "- Enter a valid highest qualification.\n";
				}if (skills.trim().length == 0){
					errorlog = true;
					errormsg += "- No valid skills.\n";
					} if (descrip.trim().length == 0){
					errorlog = true;
					errormsg += "- Description field is empty.\n"
					}
					if (work.trim().length == 0){
					errorlog = true;
					errormsg += "- Give at least one valid work experience.\n"
					}
					 if( title.trim().length == 0) {
					errorlog = true;
					errormsg += "- Enter a valid last position held.\n";
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
				alert("Profile edited succcessfully");
			  	window.location.href = "index.php";
			}
			
			function logout(){
				var r = confirm("Do you want to logout?");
			if (r == true) {
				alert("Logout successfully");
				window.location.href = "index.php";
				} else{}
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
	        	<?php

                    echo "&nbsp;&nbsp;&nbsp;&nbsp;"."Hello, ".$_SESSION['CurrentUser']."<br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['Role']."<br>";
                    ?>
		      
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged In<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="applicantProfile.php">User Profile</a></li>
						    <li><a href="applicantEdit.php">Profile Settings/Edit</a></li>
							  <li><a href="passwordChange.php">Change Password</a></li>
		             </ul>
		        </li>
				
				<li><a href = 'logout.php'>Logout</a></li>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Profile/Resume Editing for Applicant</h2>
        <form>
		<p>* Denotes compulsory field </p> <br><br><br>
		
		 <!--  <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="hq">*Highest qualification</label>
                <div class="col-md-9">
                    <input type="text" path="hq" name="hq" id="hq" class="form-control input-sm" placeholder = "Highest qualification"/>
                </div>
            </div>
         </div> -->

         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="hq">*Highest qualification</label>
                <div class="col-md-9">
                             <select name="hq">
								<option value="O'Level">O'Level</option>
								<option value="A'Level">A'Level</option>
								<option value="Diploma">Diploma</option>
								<option value="Degree">Degree</option>
								<option value="Master">Master</option>
								<option value="Ph.D">Ph.d</option>

							</select>
            </div>
         </div>
     </div>

		 
		       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="skill">*Skill 1</label>
                <div class="col-md-9">
                    <input type="text" path="skill1" name="skill1" id="skill1" class="form-control input-sm" placeholder = "Skill 1"/>
                </div>
            </div>
         </div>

         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="skill">Skill 2</label>
                <div class="col-md-9">
                    <input type="text" path="skill2" name="skill2" id="skill2" class="form-control input-sm" placeholder = "Skill 2"/>
                </div>
            </div>
         </div>
		 
		       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="descrip">*Short description of yourself</label>
                <div class="col-md-9">
                    <input type="text" path="descrip" name="descrip" id="descrip" class="form-control input-sm" placeholder = "Description"/>
                </div>
            </div>
         </div>

         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="work">*Industry interested</label>
                <div class="col-md-9">
                    <input type="text" path="industry" name="industry" id="industry" class="form-control input-sm" placeholder = "Industry interested"/>
                </div>
            </div>
         </div>
		 
		  <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="work">*One most recent work experience</label>
                <div class="col-md-9">
                    <input type="text" path="work" name="work" id="work" class="form-control input-sm" placeholder = "Experience"/>
                </div>
            </div>
         </div>
		 
		  <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="title">*Previous Job</label>
                <div class="col-md-9">
                    <input type="text" path="job" name="job" id="job" class="form-control input-sm" placeholder = "Last job."/>
                </div>
            </div>
         </div>

        
          
		  <div class="row">
		  	<div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="title">*Status</label>
                <div class="col-md-9">
                	<input type = "radio" name="status" id="status1" value="Available">Available
                	<input type = "radio" name="status" id="status2" value="Unavailable">Unavailable
                </div>
                 </div>
            </div>

                
        
		 
		 <br><br>
		 

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="mobilenum">Mobile number</label>
                <div class="col-md-9">
                    <input type="text" path="lastName" name="mobilenum" id="mobilenum" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
		 <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="website">Personal website</label>
                <div class="col-md-9">
                    <input type="text" path="website" name="website" id="website" class="form-control input-sm"/>
                </div>
            </div>
        </div>

			<input type="submit" Value="Submit "name="Submit" id="Submit" style="display: block; margin: 0 auto;">
		</form>
			   <!-- <input type="submit" name="formSubmit" value="Submit" style="display: block; margin: 0 auto;" > -->
    </div>
 </div>
</div>


<?php  if(isset($_GET['Submit'])){

	//echo ("<script>alert('Hello')</script>");

	$currentUser  = $_SESSION['CurrentUser'];
	$highestQual  = $_GET['hq'];
	$skillOne     = $_GET['skill1'];
	$skillTwo     = $_GET['skill2'];
	$descrip      = $_GET['descrip'];
	$industryLike = $_GET['industry'];
	$recentWork   = $_GET['work'];
	$prevJob      = $_GET['job'];
	$mobileNo     = $_GET['mobilenum'];
	$personalWeb  = $_GET['website'];
	$availability = $_GET['status'];

	echo "$highestQual"."$availability"."<br>";

	//this part has no issue, I am to edit.
	$sql1 = "UPDATE applicant SET personalWeb = :personalweb, mobilenumber = :mobileNo where email = '$currentUser'";
	$stid1 = oci_parse($dbh, $sql1);
	oci_bind_by_name($stid1, ":personalweb", $personalWeb);
	oci_bind_by_name($stid1, ":mobileNo", $mobileNo);
	oci_execute($stid1);
	oci_free_statement($stid1);	

	//check whether is user is inside the additional info
	$sqlCheck = "SELECT applicant from information";
	$count = 0;

	$stidCheck = oci_parse($dbh, $sqlCheck);
	oci_execute($stidCheck, OCI_DEFAULT);

	while ($queryCheck = oci_fetch_array($stidCheck)) {
				if($currentUser == $queryCheck[0]){
					$count++;				
				}
			};
	oci_free_statement($stidCheck);

	if ($count == 1){
		$sql2 = "UPDATE information SET mobile = :mobile, web = :personalweb, highestQuali = :highestQualification, skill1 = :sk1, skill2 = :sk2, selfdescription = :selfD, industryInterested = :interested, status = :availability, prevJob = :prevJob, prevWorkExperience = :prevWorkExperience WHERE applicant = '$currentUser'";
		$stid2 = oci_parse($dbh, $sql2);
		echo "$sql2";
		// oci_bind_by_name($stid2, ":user", $currentUser);
		oci_bind_by_name($stid2, ":personalweb", $personalWeb);
		oci_bind_by_name($stid2, ":mobile", $mobileNo);
		oci_bind_by_name($stid2, ":highestQualification", $highestQual);
		oci_bind_by_name($stid2, ":sk1", $skillOne);
		oci_bind_by_name($stid2, ":sk2", $skillTwo);
		oci_bind_by_name($stid2, ":selfD", $descrip);
		oci_bind_by_name($stid2, ":interested", $industryLike);
		oci_bind_by_name($stid2, ":availability", $availability);
		oci_bind_by_name($stid2, ":prevJob", $prevJob);
		oci_bind_by_name($stid2, ":prevWorkExperience", $recentWork);
		oci_execute($stid2);
		oci_free_statement($stid2);
	}
	else{

		$sql2 = "INSERT INTO information (APPLICANT, MOBILE, WEB, HIGHESTQUALI, SKILL1, SKILL2, SELFDESCRIPTION, INDUSTRYINTERESTED, STATUS, PREVJOB, PREVWORKEXPERIENCE) VALUES(:userID, :mobile, :personalweb, :highestQualification, :sk1, :sk2, :selfD, :interested, :availability, :prevJob, :prevWorkExperience)";
		$stid2 = oci_parse($dbh, $sql2);	
		echo "$sql2";

		oci_bind_by_name($stid2, ":userID", $currentUser);
		oci_bind_by_name($stid2, ":personalweb", $personalWeb);
		oci_bind_by_name($stid2, ":mobile", $mobileNo);
		oci_bind_by_name($stid2, ":highestQualification", $highestQual);
		oci_bind_by_name($stid2, ":sk1", $skillOne);
		oci_bind_by_name($stid2, ":sk2", $skillTwo);	
		oci_bind_by_name($stid2, ":selfD", $descrip);
		oci_bind_by_name($stid2, ":interested", $industryLike);
		oci_bind_by_name($stid2, ":availability", $availability);
		oci_bind_by_name($stid2, ":prevJob", $prevJob);
		oci_bind_by_name($stid2, ":prevWorkExperience", $recentWork);
		oci_execute($stid2);
		oci_free_statement($stid2);
	}


	echo ("<script>alert('The informtaion has been updated successfully')</script>");
	die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0101002/applicantProfile.php'</script>");

}

?>



<!-- footer --> 
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="applicantHome.php">Applicant Home</a></li>
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
<?php
}
    ?>	