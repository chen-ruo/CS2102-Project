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
                    <a class="navbar-brand" href="applicantHome.php"><img src="images/logo.png" alt=""></a>
                </div>
             	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
	        	<?php

                    echo "&nbsp;&nbsp;&nbsp;&nbsp;"."Hello, ".$_SESSION['CurrentUser']."<br>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION['Role']."<br>";
                    ?> 
		        </li>
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
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
			 <form>
			  <input type="text" name="Title" id="Title" value="Enter job description." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter job description.';}">
			  <input type="radio" name="Format" id="Format1" value="Full-time">Full-time
			  <input type="radio" name="Format" id="Format1" value="Part-time">Part-time
			  <input type="radio" name="Format" id="Format1" value="Internship">Internship
			  <input type="submit" name="search" value="Search" style="background-color:#A9E2F3">
			  <input type="submit" name="recommend" value="Recommend" style="background-color:#A9E2F3">
			 </form>
           </div>
		</div>
   </div> 
</div>	
 		

<div class="container">
    <div class="single">  
	   <div class="col-md-9 single_right">
	      <div class="but_list">
	       <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			<ul id="myTab" class="nav nav-tabs" role="tablist">
			  <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Available jobs</a></li>
			  			  
		   </ul>

		   <?php if(isset($_GET['search']))
				{
					$keywords=$_GET['Title'];
					$type=$_GET['Format'];
					echo $keywords;
					if($keywords == "Enter job description." ){
					$sql="select j.*,e.companyname from jobs j,employer e where jobtype = '$type' and j.owner=e.email" ;
					}
					else
					{					
					$sql="select j.* ,e.companyname from jobs j,employer e where description like '%$keywords%' and jobtype = '$type' and j.owner=e.email";
					}
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
			?>
			<?php if(isset($_GET['recommend']))
				{
					
					$applicant = $_SESSION['CurrentUser'];
					$sql= "select j.jobid, j.jobtype, e.companyname, j.owner, j.category, j.minrequiredqualification, j.minrequiredskills,j.description
						from jobs j, information i, employer e
						where i.applicant = '$applicant'
						and j.owner = e.email
						and (j.minrequiredskills = i.skill1 or j.minrequiredskills = i.skill2 or i.industryinterested = e.industry)
						and j.minrequiredqualification = i.highestquali
						order by e.companyname, j.jobid";

					$stid = oci_parse($dbh,$sql);
					oci_execute($stid,OCI_DEFAULT);
					echo "<table border=\"1\" >
				    <col width=\"10%\">
					<col width=\"15%\">
					<col width=\"20%\">
					<col width=\"15%\">
					<col width=\"15%\">
					<col width=\"15%\">
					<col width=\"10%\">
					
					<tr>
					<th>Job ID</th>
					<th>Job Type</th>					
					<th>Employer</th>
					<th>Email</th>
					<th>Category</th>
					<th>Qualification Required</th>
					<th>Skills Required</th>
					<th>Description</th>
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
					echo "</tr>";
					}
					echo "</table>";
					oci_free_statement($stid);

							

				}
			?>
			<br><br>
			<form>				
				<select name="JobID" id="Job ID"><option value="">Select Job ID</option>
					<?php
					if($keywords == "Enter job description." &&  isset($_GET['search'])){
					$sql="select distinct jobid from jobs where jobtype = '$type'";
					}
					else if ($keywords != "Enter job description." &&  isset($_GET['search']))
					{					
					$sql="select distinct jobid from jobs where description like '%$keywords%' and jobtype = '$type'";
					}
					else if (isset($_GET['recommend'])){
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
					<select name="jobOwner" id="jobOwner"><option value="">Select Owner</option>
					<?php
					if($keywords == "Enter job description." &&  isset($_GET['search'])){
					$sql="select distinct owner from jobs where jobtype = '$type'";
					}
					else if ($keywords != "Enter job description." &&  isset($_GET['search']))
					{					
					$sql="select distinct owner from jobs where description like '%$keywords%' and jobtype = '$type'";
					}
					else if (isset($_GET['recommend'])){
					$sql= "select distinct j.owner
							from jobs j, information i, employer e
							where i.applicant = '$applicant'
							and j.owner = e.email
							and (j.minrequiredskills = i.skill1 or j.minrequiredskills = i.skill2 or i.industryinterested = e.industry)
							and j.minrequiredqualification = i.highestquali";

					}
					$stid = oci_parse($dbh, $sql);
					oci_execute($stid, OCI_DEFAULT);
					while($row = oci_fetch_array($stid)){
					echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
					}
					oci_free_statement($stid);
					?>
				</select>
					<input type="submit" name="formSubmit1" value="Apply" >
					<?php
					
					if (isset($_GET['formSubmit1'])){
					
					$jobid = $_GET['JobID'];
					$applicantid=$_SESSION['CurrentUser'];
					$companyid=$_GET['jobOwner'];				
					
					$sql_check = 'select jobid,emaile from applyfor';
					$stid_check = oci_parse($dbh, $sql_check);
					oci_execute($stid_check, OCI_DEFAULT);
					$exist = 0;
					while($query_jobapplied = oci_fetch_array($stid_check)){

				        if($jobid == $query_jobapplied[0] and $companyid==$query_jobapplied[1]){
					    $exist = 1;
				        }
			        }
			        if($exist == 0){
						$sql_insert = 'INSERT INTO applyfor(emaila,emaile,jobid) VALUES(:applicantid,:companyid,:jobid)';
						$stid = oci_parse($dbh, $sql_insert);
						oci_bind_by_name($stid, ":jobid", $jobid);
						oci_bind_by_name($stid, ":applicantid", $applicantid);
						oci_bind_by_name($stid, ":companyid", $companyid);
						oci_execute($stid);
						oci_free_statement($stid);
					}
					else
					{
						die("<script> alert ('You have already applied for this job!')</script>");
					}
					$sql_insertChk = 'SELECT jobid,emaile FROM applyfor';
					$stid_insertChk = oci_parse($dbh, $sql_insertChk);

					oci_execute($stid_insertChk,OCI_DEFAULT);

					$insert_successful = 0;

					while ($query_insertChk = oci_fetch_array($stid_insertChk)) {
						if($jobid == $query_insertChk[0] and $companyid == $query_insertChk[1]){
							$insert_successful =1;
						}
					}

					if($insert_successful == 1){
						echo("<script> alert ('You applied for the job succcessfully!')</script>");
					}
					oci_free_statement ($stid_check);
					oci_free_statement ($stid_insertChk);
                }       
					?>
			</form>
</div></div></div></div></div>

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