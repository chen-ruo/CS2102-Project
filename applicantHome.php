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
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs<b class="caret"></b></a>
		            <ul class="dropdown-menu">
			            <li><a href="jobs.php">Part-time Jobs</a></li>
			            <li><a href="jobs.php">Internships</a></li>
			            <li><a href="jobs.php">Full-time Jobs</a></li>
		            </ul>
		        </li>
				
				        <!-- <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Employers<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="post.php">Post Jobs</a></li>
						    <li><a href="search.php">Search applicants</a></li>
							  <li><a href="searchmatched.php">Search for matched applicants</a></li>
		             </ul>
		        </li> -->
				
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logged In<b class="caret"></b></a>
		             <ul class="dropdown-menu">
						  <li><a href="applicantProfile.php">User Profile</a></li>
						    <li><a href="applicantEdit.php">Profile Settings/Edit</a></li>
							  <li><a href="passwordChange.php">Change Password</a></li>
		             </ul>
		        </li>
				
				<li><a onClick = "logout()">Logout</a></li>
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
			  Title: <input type="text" name="Title" id="Title">
			  <input type="radio" name="Format" id="Format1" value="Permanent">Permanent
			  <input type="radio" name="Format" id="Format1" value="Temporary">Temporary
			  <input type="radio" name="Format" id="Format1" value="Intern">Intern
			  <input type="submit" name="formSubmit" value="Search" style="background-color:#A9E2F3">
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
		   <?php if(isset($_GET['formSubmit']))
				{
					$keywords=$_GET['Title'];
					$type=$_GET['Format'];
					$sql="select * from jobs where description like '%$keywords%' and jobtype = '$type' ";
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
					<th>Job Style</th>					
					<th>Owner</th>
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
					echo "</tr>";
					}
					echo "</table>";
					oci_free_statement($stid);
				}
			?>
			<form>				
				<select name="JobID" id="Job ID"><option value="">select Job ID</option>
					<?php
					$sql="select jobid from jobs where description like '%$keywords%' and jobtype = '$type' ";
					$stid = oci_parse($dbh, $sql);
					oci_execute($stid, OCI_DEFAULT);
					while($row = oci_fetch_array($stid)){
					echo "<option value=\"".$row[0]."\">".$row[0]."</option><br>";
					}
					oci_free_statement($stid);
					?>
				</select>
					<select name="jobOwner" id="jobOwner"><option value="">select Owner</option>
					<?php
					$sql="select owner from jobs where description like '%$keywords%' and jobtype = '$type' ";
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
			    
		<div id="myTabContent" class="tab-content">
		  <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
		    <div class="tab_grid">
			    <div class="jobs-item with-thumb">
				    <div class="thumb"><a href="jobs_single.php"><img src="images/a2.jpg" class="img-responsive" alt=""/></a></div>
				    <div class="jobs_right">
						<div class="date">30 <span>Jul</span></div>
						<div class="date_desc"><h6 class="title"><a href="jobs_single.php">Front-end Developer</a></h6>
						  <span class="meta">Envato, Sydney, AU</span>
						</div>
						<div class="clearfix"> </div>
                        <ul class="top-btns">
							<li><a href="#" class="fa fa-plus toggle"></a></li>
							<li><a href="#" class="fa fa-star"></a></li>
							<li><a href="#" class="fa fa-link"></a></li>
						</ul>
						<p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, maxime, excepturi, mollitia, voluptatibus similique aliquid a dolores autem laudantium sapiente ad enim ipsa modi laborum accusantium deleniti neque architecto vitae. <a href="jobs_single.php" class="read-more">Read More</a></p>
                    </div>
					<div class="clearfix"> </div>
					
					
    <ul class="pagination jobs_pagination">
		<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
		<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
	</ul>
   </div>
  <div class="clearfix"> </div>
 </div>
</div>
</div></div></div></div></div></div>

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