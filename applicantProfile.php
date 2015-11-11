<?php
include 'session.php';
include 'connectToServer.php';

if ($allowaccess=true)
{
    ?>
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
                    <a class="navbar-brand" href="applicantHome.html"><img src="images/logo.png" alt=""></a>
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
				       
				
				
				<li><a href = "logout.php">Logout</a></li> 
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="banner_1">
	<div class="container">
		
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="col-md-9 single_right">
	   <!-- Description -->
		<h1> List of jobs applied </h1>
			<form>
				
	   		<select name="JobID" id="Job ID"><option value="">Select Job ID</option>
				<input type="submit" name="View" value="view" style="background-color:#A9E2F3">
						<input type="submit" name="Delete" value="delete" style="background-color:#A9E2F3">
			</form>
			<br>
	   	<?php
	   	$currentuser = $_SESSION['CurrentUser'];
	   	$sql = "SELECT EmailE, JOBID from applyfor where'$currentuser' = EmailA";

	   	$stid = oci_parse($dbh, $sql);
	   	oci_execute($stid, OCI_DEFAULT);
	   	$email = array();
	   	$jobIndex = array();

	   	while($query = oci_fetch_array($stid)){
	   		array_push($email, $query[0]);
	   		array_push($jobIndex, $query[1]);
	   	}

	   	oci_free_statement($stid);
	   	//insert code to display 


	   	// $sql2 = "SELECT j.owner, j.jobtype, j.category, j.minrequiredQualification, j.minrequiredSkills, j.Description from JOBS where '$email' = j.owner and 'jobIndex' = j.jobid";
	   	// $stid2 = oci_parse($dbh, $sql2);

	   	$arrSize = count($email);

	   	for($x = 0; $x < $arrSize; $x++) {

	   		$account = $email[$x];
	   		$jobid = $jobIndex[$x];

	   		// echo "$account"."$jobid"."<br>";
  			$sql2 = "SELECT e.companyname, j.owner, j.jobid, j.jobtype, j.category, j.minrequiredQualification, j.minrequiredSkills, j.Description from JOBS j, employer e where '$account' = j.owner and '$account' = e.email and j.jobid = '$jobid'";
			// echo "$sql2";
			$stid2 = oci_parse($dbh, $sql2);
			oci_execute($stid2, OCI_DEFAULT);
			while ($row = oci_fetch_array($stid2)){
				echo "Company: "."$row[0]"."<br>";
				echo "Employer: "."$row[1]"."<br>";
				echo "Job ID: "."$row[2]"."<br>";
				echo "Job type: "."$row[3]"."<br>";
				echo "Category: "."$row[4]"."<br>";
				echo "Minimum Qualification: "."$row[5]"."<br>";
				echo "Minimum Skills: "."$row[6]"."<br>";
				echo "Job description: "."$row[7]"."<br>";
			}
			oci_free_statement($stid2);

		}
	   	?>

					<?php
					  if (isset($_GET['View'])){
					 $sql= "select distinct j.jobid
					 		from jobs j, information i, employer e
					 		where i.applicant = '$applicant'
					 		and j.owner = e.email
					 		and (j.minrequiredskills = i.skill1 or j.minrequiredskills = i.skill2 or i.industryinterested = e.industry)
					 		and j.minrequiredqualification = i.highestquali
					 		order by j.jobid";
					 }
					 $stid = oci_parse($dbh, $sql);
					 oci_execute($stid, OCI_DEFAULT);
					 while($row = oci_fetch_array($stid)){
					 echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
					 }
					 oci_free_statement($stid);
					?>
				</select>

	   	</form> 

	   	<br><br><br>
	   	<table class="candidate_detail">
		<h1> Description of applicant </h1>
		<tbody>
			<tr>
				<td>First Name</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT firstname from applicant where '$currentuser' = email";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td>
			</tr> 

			<tr>
				<td>Last Name</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT lastname from applicant where '$currentuser' = email";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Age</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT age from applicant where '$currentuser' = email";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Mobile No.</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT mobilenumber from applicant where '$currentuser' = email";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Gender</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT gender from applicant where '$currentuser' = email";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Nationality</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT nationality from applicant where '$currentuser' = email";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Personal Web</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT personalweb from applicant where '$currentuser' = email";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Highest Qualification</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT highestquali from information where '$currentuser' = applicant";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Skill 1</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT skill1 from information where '$currentuser' = applicant";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Skill 2</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT skill2 from information where '$currentuser' = applicant";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Self Description</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT selfdescription from information where '$currentuser' = applicant";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Industry Interested</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT industryInterested from information where '$currentuser' = applicant";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Status</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT status from information where '$currentuser' = applicant";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Previous Job</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT prevJob from information where '$currentuser' = applicant";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

			<tr>
				<td>Previous Work Experience</td>
				<td>
					<?php
					$currentuser = $_SESSION['CurrentUser'];
					$sql = "SELECT prevworkexperience from information where '$currentuser' = applicant";
					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					while($row = oci_fetch_array($stid)) {
					echo "$row[0]"."<br>";
					}
					oci_free_statement($stid);
					?>
				</td> 
			</tr>

		</tbody>
		</table>
		
	      

       </div>
       <div class="col-md-3">
	   	  <img src="images/f12.jpg" class="img-responsive" alt=""/>
	   	  <div class="map_1">
	       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127638.11790968764!2d103.82619229583742!3d1.3619444394640154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ssg!4v1443350488580" width="600" height="450" frameborder="0" style="border:0"></iframe>
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
