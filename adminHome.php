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
                    <a class="navbar-brand" href="home.php"><img src="images/logo.png" alt=""></a>
                </div>
             	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	        	<?php

                    echo "&nbsp;&nbsp;&nbsp;&nbsp;"."Hello, ".$_SESSION['CurrentUser']."<br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['Role']."<br>";
                    ?>
					
				<li><a href = "logout.php">Logout</a></li>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="container">
    <div class="single">  
	   <div class="col-md-9 single_right">
	    <h1>Admin Home Page <h1>
		<p> * Admin can choose to delete/modify applicants, employer or jobs.</p>
		<br><br>
		
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Select a choice</h1>
		    <p>
			 
           </div>
		</div>
		
   </div> 
   
   
   
</div>	
		
  <div class="clearfix"> </div>
  <form>
			  Choice:
			  <input type="radio" name="Format" id="Format1" value="applicant">Applicants
			  <input type="radio" name="Format" id="Format1" value="employer">Employers
			  <input type="radio" name="Format" id="Format1" value="jobs">Jobs
			  <input type="radio" name="Format" id="Format1" value="applyfor">Application
			  <input type="submit" name="formSubmit" value="View" style="background-color:#A9E2F3">
			 </form>
			 <?php if(isset($_GET['formSubmit']))
				{
					$keywords=$_GET['Format'];
					if($keywords == "applicant" ){
					$sql="select a.*,i.highestquali,i.skill1,i.skill2,i.selfdescription,i.industryinterested,i.status,i.prevjob,i.prevworkexperience from applicant a left join information i on a.email=i.applicant ";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					echo "<table border=\"1\" >				
					<tr>
					<th>First Name</th>
					<th>Last Name</th>					
					<th>Email</th>
					<th>Password</th>
					<th>Age</th>
					<th>Mobile Number</th>
					<th>Gender</th>
					<th>Date of Birth</th>
					<th>Nationality</th>
					<th>Personal Webpage</th>
					<th>Highest Qualification</th>
					<th>Skill1</th>
					<th>Skill2</th>
					<th>Self Description</th>
					<th>Industry Intrested</th>
					<th>Status</th>
					<th>Previous Job</th>
					<th>Prebious Working Experience</th>
					</tr>";
	
					while($row = oci_fetch_array($stid)) {
					echo "<tr>";
					echo "<td>" . $row[0] . "</td>";
					echo "<td>" . $row[1] . "</td>";
					echo "<td>" . $row[2] . "</td>";
					echo "<td>" . $row[3] . "</td>";
					echo "<td>" . $row[4] . "</td>";
					echo "<td>" . $row[5] . "</td>";
					echo "<td>" . $row[6] . "</td>";
					echo "<td>" . $row[7] . "</td>";
					echo "<td>" . $row[8] . "</td>";
					echo "<td>" . $row[9] . "</td>";
					echo "<td>" . $row[10] . "</td>";
					echo "<td>" . $row[11] . "</td>";
					echo "<td>" . $row[12] . "</td>";
					echo "<td>" . $row[13] . "</td>";
					echo "<td>" . $row[14] . "</td>";
					echo "<td>" . $row[15] . "</td>";
					echo "<td>" . $row[16] . "</td>";
					echo "<td>" . $row[17] . "</td>";
					echo "<td>" . $row[18] . "</td>";
					echo "</tr>";
					}
					echo "</table>";
					oci_free_statement($stid);
					}
					else if($keywords == "employer"){
						$sql="select * from employer" ;
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					echo "<table border=\"1\" >				
					<tr>
					<th>Email</th>			
					<th>Password</th>
					<th>Company Name</th>
					<th>Mobile Number</th>
					<th>Website</th>
					<th>Post Code</th>
					<th>Nature of Business</th>
					<th>Address</th>
					<th>Industry</th>
					</tr>";
	
					while($row = oci_fetch_array($stid)) {
					echo "<tr>";
					echo "<td>" . $row[0] . "</td>";
					echo "<td>" . $row[1] . "</td>";				 
					echo "<td>" . $row[2] . "</td>";
					echo "<td>" . $row[3] . "</td>";
					echo "<td>" . $row[4] . "</td>";
					echo "<td>" . $row[5] . "</td>";
					echo "<td>" . $row[6] . "</td>";
					echo "<td>" . $row[7] . "</td>";
					echo "<td>" . $row[8] . "</td>";
					echo "</tr>";
					}
					echo "</table>";
					oci_free_statement($stid);
					}
					
					
					
					
					
					else if($keywords == "jobs"){
						$sql="select j.*,e.companyname from jobs j,employer e where j.owner=e.email order by e.companyname" ;
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					echo "<table border=\"1\" >				
					<tr>
					<th>Job ID</th>
					<th>Job Type</th>					
					<th>Company Name</th>
					<th>Employer Email</th>
					<th>Category</th>
					<th>Qualification Required</th>
					<th>Skills Required</th>
					<th>Description</th>
					</tr>";
	
					while($row = oci_fetch_array($stid)) {
					echo "<tr>";
					echo "<td>" . $row[0] . "</td>";
					echo "<td>" . $row[1] . "</td>";
					echo "<td>" . $row[7] . "</td>"; 
					echo "<td>" . $row[2] . "</td>";
					echo "<td>" . $row[3] . "</td>";
					echo "<td>" . $row[4] . "</td>";
					echo "<td>" . $row[5] . "</td>";
					echo "<td>" . $row[6] . "</td>";
					echo "</tr>";
					}
					echo "</table>";
					oci_free_statement($stid);
					}
					else if($keywords == "applyfor"){
						$sql="select * from applyfor" ;
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					echo "<table border=\"1\" >				
					<tr>
					<th>Applicant Email</th>
					<th>Company Email</th>					
					<th>Job ID</th>
					</tr>";
	
					while($row = oci_fetch_array($stid)) {
					echo "<tr>";
					echo "<td>" . $row[0] . "</td>";
					echo "<td>" . $row[1] . "</td>";
					echo "<td>" . $row[2] . "</td>"; 
					echo "</tr>";
					}
					echo "</table>";
					oci_free_statement($stid);
					}
				}
			?>
			<form>
			Applicant:
			<select name="Aemail"><option value="">Select Applicant Email</option>
		    <?php
			$sql = "SELECT email FROM applicant";
			$stid = oci_parse($dbh, $sql);
			oci_execute($stid, OCI_DEFAULT);
			while($row = oci_fetch_array($stid)){
			echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
			
			}
		    oci_free_statement($stid);
			?>
			</select>
			
			<select name="Afield"><option value="">Select a Field to Update</option>
			echo "<option value="firstname">First Name</option><br>";
			echo "<option value="lastname">Last Name</option><br>";
			echo "<option value="password">Applicant Password</option><br>";
			echo "<option value="age">Applicant Age</option><br>";
			echo "<option value="mobilenumber">Mobile Number</option><br>";
			echo "<option value="gender">Gender</option><br>";
			echo "<option value="dateofbirth">Date of Birth</option><br>";
			echo "<option value="nationality">Nationality</option><br>";
			echo "<option value="personalweb">Webpage</option><br>";
			echo "<option value="highestquali">Highest Qualification</option><br>";
			echo "<option value="skill1">Skill1</option><br>";
			echo "<option value="skill2">Skill2</option><br>";
			echo "<option value="selfdescription">Self Description</option><br>";
			echo "<option value="industryinterested">Industry Intrested</option><br>";
			echo "<option value="status">Status</option><br>";
			echo "<option value="prevjob">Previous Job</option><br>";
			echo "<option value="prevworkexperience">Prebious Working Experience</option><br>";
			</select>
			<input type="text" name="inputapplicant" id="inputapplicant">
            <input type="submit" name="deletea" value="DELETE" style="background-color:#A9E2F3">
            <input type="submit" name="updatea" value="UPDATE" style="background-color:#A9E2F3">			
			<form>
			<?php
			if(isset($_GET['deletea']))
			{
				$emaila=$_GET['Aemail'];
				$sql="delete from applicant where applicant.email='$emaila'";
				$stid = oci_parse($dbh,$sql);
				oci_execute($stid);
				oci_free_statement($stid);
			}
			else if (isset($_GET['updatea']))
			{
				$emaila=$_GET['Aemail'];
				$fielda=$_GET['Afield'];
				$inputa=$_GET['inputapplicant'];
				$exitst=0;
				$sql_ckeck="select information.applicant from information where information.applicant='$emaila'";
				$stid_check = oci_parse($dbh,$sql_ckeck);
				oci_execute($stid_check,OCI_DEFAULT);
				//oci_free_statement($stid_check);
				while($query_information = oci_fetch_array($stid_check)){
								
									if ($emaila==$query_information[0]){
										 $exitst=1;
									}
								}
				if($exitst=1 and ($fielda=="highestquali" or $fielda=="skill1" or $fielda=="skill2" or $fielda=="selfdescription" or $fielda=="industryinterested" or $fielda=="status" or $fielda=="prevjob" or $fielda=="prevworkexperience"))
				{
					$sql="update information set $fielda = '$inputa' where information.applicant='$emaila'";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid);
					oci_free_statement($stid);
				}
				else if ($exitst=0 and ($fielda=="highestquali" or $fielda=="skill1" or $fielda=="skill2" or $fielda=="selfdescription" or $fielda=="industryinterested" or $fielda=="status" or $fielda=="prevjob" or $fielda=="prevworkexperience"))
				{
				
		           echo "This applicant has not modified this field yet!";
					
				}
				else {
				$sql="update applicant set $fielda = '$inputa' where applicant.email='$emaila'";
				$stid = oci_parse($dbh,$sql);
				oci_execute($stid);
				oci_free_statement($stid);
				}
				
			}
			?>
			
			<form>
			<div>
			Employer:
			<select name="Eemail"><option value="">Select Employer Email</option>
			<?php
			$sql = "SELECT email FROM employer";
			$stid = oci_parse($dbh, $sql);
			oci_execute($stid, OCI_DEFAULT);
			while($row = oci_fetch_array($stid)){
			echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
			}
			oci_free_statement($stid);
			?>
			</select>
			<select name="Efield"><option value="">Select a Field to Update</option>
			echo "<option value="password">Password</option><br>";
			echo "<option value="companyname">Company Name</option><br>";
			echo "<option value="companynum">Mobile Number</option><br>";
			echo "<option value="companyurl">Website</option><br>";
			echo "<option value="postalcode">Post Code</option><br>";
			echo "<option value="natureofbusiness">Nature of Business</option><br>";
			echo "<option value="companyaddress">Address</option><br>";
			echo "<option value="industry">Industry</option><br>";
			</select>
			<input type="text" name="inputemployer" id="inputemployer">
            <input type="submit" name="deletee" value="DELETE" style="background-color:#A9E2F3">
            <input type="submit" name="updatee" value="UPDATE" style="background-color:#A9E2F3">			
			<form>		
			</div>
			
		    <?php if(isset($_GET['deletee']))
				{
					$companyemail=$_GET['Eemail'];
					$sql_deletea="delete from applyfor where emaile='$companyemail'";
					$sql_deletej="delete from jobs where owner='$companyemail'";
					$sql="delete from employer where email='$companyemail'";
					$stid_deletea = oci_parse($dbh,$sql_deletea);
					oci_execute($stid_deletea);
					oci_free_statement($stid_deletea);
					$stid_deletej = oci_parse($dbh,$sql_deletej);
					oci_execute($stid_deletej);
					oci_free_statement($stid_deletej);
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid);
					oci_free_statement($stid);
				}
				else if (isset($_GET['updatee']))
			{
				$emaile=$_GET['Eemail'];
				$fielde=$_GET['Efield'];
				$inpute=$_GET['inputemployer'];
				
					$sql="update employer set $fielde = '$inpute' where email='$emaile'";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid);
					oci_free_statement($stid);				
				
			}
			?>
		
			<div>
			<form>
			Jobs:
			<select name="JobID"><option value="">Select Job ID</option>
			<?php
			$sql = "SELECT distinct jobid FROM jobs order by jobid";
			$stid = oci_parse($dbh, $sql);
			oci_execute($stid, OCI_DEFAULT);
			while($row = oci_fetch_array($stid)){
			echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
			}
			oci_free_statement($stid);
			?>
			</select>			
			<select name="Cname"><option value="">Select the company email</option>
			<?php
			$sql = "SELECT distinct owner FROM jobs ";
			$stid = oci_parse($dbh, $sql);
			oci_execute($stid, OCI_DEFAULT);
			while($row = oci_fetch_array($stid)){
			echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
			}
			oci_free_statement($stid);
			?>
			</select>
			<select name="Jfield"><option value="">Select a Feild to Update</option>
			echo "<option value="jobtype">Job Type</option><br>";
			echo "<option value="owner">Company Email</option><br>";
			echo "<option value="category">Category</option><br>";
			echo "<option value="minirequirequalification">Minimum Required Qualification</option><br>";
			echo "<option value="minirequiredskils">Minimum Required Skills</option><br>";
			echo "<option value="desciption">Description</option><br>";
			</select>
			<input type="text" name="inputjobs" id="inputjobs">
            <input type="submit" name="deletej" value="DELETE" style="background-color:#A9E2F3">
            <input type="submit" name="updatej" value="UPDATE" style="background-color:#A9E2F3">			
			<form>
			</div>
			<?php
			if(isset($_GET['deletej']))
				{
					$jobid=$_GET['JobID'];
					$companyemail=$_GET['Cname'];
					$applied=0;
					$sql_ckeck="select emaile,jobid from applyfor where emaile='$companyemail' and jobid='$jobid'";
					$stid_check = oci_parse($dbh,$sql_ckeck);
					oci_execute($stid_check,OCI_DEFAULT);
					//oci_free_statement($stid_check);
					
					while($query_applied = oci_fetch_array($stid_check)){
									
										if ($companyemail==$query_applied[0] and $jobid == $query_applied[1]){
											 $applied=1;
										}
									}
					if($applied==1){
						$sql_delete="delete from applyfor where emaile='$companyemail' and jobid='$jobid'";
						$sql="delete from jobs where owner='$companyemail' and jobid='$jobid'";
						$stid_delete = oci_parse($dbh,$sql_delete);
					   oci_execute($stid_delete);
					   oci_free_statement($stid_delete);
					   $stid = oci_parse($dbh,$sql);
						oci_execute($stid);
						oci_free_statement($stid);
					}
					else{
						$sql="delete from jobs where owner='$companyemail' and jobid='$jobid'";
						$stid = oci_parse($dbh,$sql);
						oci_execute($stid);
						oci_free_statement($stid);
					}
					
				}
				else if (isset($_GET['updatej']))
			{
				$jobid=$_GET['JobID'];
				$emailj=$_GET['Cname'];
				$fieldj=$_GET['Jfield'];
				$inputj=$_GET['inputjobs'];
				$sql="update jobs set $fieldj = '$inputj' where owner='$emailj' and jobid='$jobid'";
				$stid = oci_parse($dbh,$sql);
				oci_execute($stid);
				oci_free_statement($stid);
			}
			?>
			<div>
			<form>
			Application:
			<select name="Anamea"><option value="">Select Applicant Email</option>
			<?php
			$sql = "SELECT distinct emaila FROM applyfor";
			$stid = oci_parse($dbh, $sql);
			oci_execute($stid, OCI_DEFAULT);
			while($row = oci_fetch_array($stid)){
			echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
			}
			oci_free_statement($stid);
			?>
			</select>			
			<select name="Cnamea"><option value="">Select Company Email</option>
			<?php
			$sql = "SELECT distinct emaile FROM applyfor";
			$stid = oci_parse($dbh, $sql);
			oci_execute($stid, OCI_DEFAULT);
			while($row = oci_fetch_array($stid)){
			echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
			}
			oci_free_statement($stid);
			?>
			</select>
			<select name="JobIDa"><option value="">Select the Job ID</option>
			<?php
			$sql = "SELECT distinct jobid FROM applyfor order by jobid";
			$stid = oci_parse($dbh, $sql);
			oci_execute($stid, OCI_DEFAULT);
			while($row = oci_fetch_array($stid)){
			echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
			}
			oci_free_statement($stid);
			?>
			</select>
			<select name="Appfield"><option value="">Select a Feild to Update</option>
			
			echo "<option value="emaila">Applicant Email</option><br>";
			echo "<option value="emaile">Company Email</option><br>";
			echo "<option value="jobid">Job ID</option><br>";?>
			</select>
			<input type="text" name="inputapplication" id="inputapplication">
            <input type="submit" name="deleteapp" value="DELETE" style="background-color:#A9E2F3">		
			<form>
			<?php
			if(isset($_GET['deleteapp'])){
				$appemaila=$_GET['Anamea'];
				$appemaile=$_GET['Cnamea'];
				$appjobid=$_GET['JobIDa'];
				$sql = "delete from applyfor where applyfor.emaila='$appemaila' and applyfor.emaile='$appemaile' and applyfor.jobid='$appjobid'";
				$stid = oci_parse($dbh,$sql);
				oci_execute($stid);
				oci_free_statement($stid);
			}
			
			?>
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
</html>	
<?php
}
    ?>