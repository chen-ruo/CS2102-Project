<?php
include 'session.php';
include 'connectToServer.php';

if ($allowaccess=true)
{
    ?>
<!DOCTYPE HTML>
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
                var description = document.getElementById("description").value
                var qualification = document.getElementById("qualification").value
                var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
				var age = document.getElementById("age").value
			
				
			var r = confirm("Are you sure to register for an account?");
			if (r == true) {

			 var errormsg = "Below are the errors:\n\n";
			   var errorlog = false;
			   
			   if( description.trim().length == 0) {
					errorlog = true;
					errormsg += "- Job description field is empty.\n";
				}
			    if( qualification.trim().length == 0) {
					errorlog = true;
					errormsg += "- Job minimum qualification field is empty.\n";
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
			  	window.location.href = "index.html";
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
	        <a class="navbar-brand" href="home.html"><img src="images/logo.png" alt=""/></a>
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
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
<div class="container">
    <div class="single">  
	   <div class="form-container">
        <h2>Edit job details</h2>
        <form>
		<!-- Primary key -->
		
		<div class="row">
		<div class="form-group col-md-12">
		<label class="col-md-3 control-lable" for="description">Which job to edit/delete?</label>
		<div class="col-md-9">
		<select name="jobid"> <option value="">Job ID</option>
				<?php
					$currentUser  = $_SESSION['CurrentUser'];
					$sql = "SELECT DISTINCT jobid FROM jobs WHERE owner = '$currentUser'";
					$stid = oci_parse($dbh, $sql);
					oci_execute($stid, OCI_DEFAULT);
					while($row = oci_fetch_array($stid)){
						echo "<option 
						value=\"".$row["0"]."\">".$row["0"]."</option><br>";
					}
					oci_free_statement($stid);
				?>
			</select>
			</div>
		</div>
		</div>
		<div class="row">
		<div class="form-group col-md-12">
		<label class="col-md-3 control-lable" for="description">Job type</label>
		<div class="col-md-9">
		<input type="radio" name="jobtype" id="Format1" value="Internship">Internship
		<input type="radio" name="jobtype" id="Format2" value="Full-time">Full-time
		<input type="radio" name="jobtype" id="Format2" value="Part-time">Part-time
			</div>
		</div>
		</div>
		<div class="row">
            <div class="form-group col-md-12">

                <label class="col-md-3 control-lable" for="description">Cateory</label>
                <div class="col-md-9">
                    <input type="text" name = "category" path="description" id="description" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
		        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="qualification">Minimum Qualification</label>
                <div class="col-md-9">
                    <input type="text" name = "qualification" path="qualification" id="qualification" class="form-control input-sm"/>
                </div>
            </div>
        </div>
		
		     <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="age">Minimum Required Skills</label>
                <div class="col-md-9">
                    <input type="text" name = "skill" path="age" id="age" class="form-control input-sm"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="age">Job description</label>
                <div class="col-md-9">
                    <input type="text" name = "description" path="age" id="age" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <center>
		<input type="submit" name="edit" value="Edit">
		<input type="submit" name="delete" value="Delete">
		</center>
		</form>
		<?php if(isset($_GET['edit']))
		{

			$currentUser  = $_SESSION['CurrentUser'];
			$jobid = $_GET['jobid'];
			if($jobtype  = $_GET['jobtype']){

				$sql_updatetype = "UPDATE jobs SET jobtype = :jobtype where owner = '$currentUser' and jobid = '$jobid'";
				$stid_updatetype = oci_parse($dbh, $sql_updatetype);
				oci_bind_by_name($stid_updatetype, ":jobtype", $jobtype);
				oci_execute($stid_updatetype);
				oci_free_statement($stid_updatetype);
			}

			if($category = $_GET['category']){
				
				$sql_updatecat = "UPDATE jobs SET category = :category where owner = '$currentUser' and jobid = '$jobid'";
				$stid_updatecat = oci_parse($dbh, $sql_updatecat);
				oci_bind_by_name($stid_updatecat, ":category", $category);
				oci_execute($stid_updatecat);
				oci_free_statement($stid_updatecat);
			}

			if($qualification = $_GET['qualification']){
				
				$sql_updatequali = "UPDATE jobs SET minrequiredqualification = :qualification where owner = '$currentUser' and jobid = '$jobid'";
				$stid_updatequali = oci_parse($dbh, $sql_updatequali);
				oci_bind_by_name($stid_updatequali, ":qualification", $qualification);
				oci_execute($stid_updatequali);
				oci_free_statement($stid_updatequali);
			}

			if($skill = $_GET['skill']){
				
				$sql_updateskill = "UPDATE jobs SET minrequiredskills = :skill where owner = '$currentUser' and jobid = '$jobid'";
				$stid_updateskill = oci_parse($dbh, $sql_updateskill);
				oci_bind_by_name($stid_updateskill, ":skill", $skill);
				oci_execute($stid_updateskill);
				oci_free_statement($stid_updateskill);
			}

			if($description = $_GET['description']){
				
				$sql_updatedesp = "UPDATE jobs SET description = :description where owner = '$currentUser' and jobid = '$jobid'";
				$stid_updatedesp = oci_parse($dbh, $sql_updatedesp);
				oci_bind_by_name($stid_updatedesp, ":description", $description);
				oci_execute($stid_updatedesp);
				oci_free_statement($stid_updatedesp);
			}
			
			echo("<script> alert ('The account has been updated succcessfully!')</script>");
			die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0101002/employerProfile.php'</script>");

			}
		?>

		<?php if(isset($_GET['delete']))
		{
			$currentUser  = $_SESSION['CurrentUser'];
			$jobid = $_GET['jobid'];

			$sql_checkapplicantion = "SELECT emaile, jobid from applyfor where jobid = '$jobid' and emaile = '$currentUser'";
			$stid_check = oci_parse($dbh, $sql_checkapplicantion);

			oci_execute($stid_check, OCI_DEFAULT);
			$exist = 0;

			while($query_applicantion = oci_fetch_array($stid_check)){


				if($query_applicantion[0]){

					$exist = 1;
				}
			}

			if($exist == 0){

				$sql_delete = "DELETE from jobs where jobid = '$jobid' and owner = '$currentUser'";
				$stid_delete = oci_parse($dbh, $sql_delete);

				oci_execute($stid_delete);
				oci_free_statement($stid_delete);

				echo("<script> alert ('The job has been succcessfully deleted!')</script>");
				die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0101002/employerProfile.php'</script>");

			}
			else{

				$sql_deleteapplicantion = "DELETE FROM applyfor where jobid = '$jobid' and emaile = '$currentUser'";
				$stid_deleteapplicantion = oci_parse($dbh, $sql_deleteapplicantion);

				oci_execute($stid_deleteapplicantion);
				oci_free_statement($stid_deleteapplicantion);

				$sql_delete = "DELETE from jobs where jobid = '$jobid' and owner = '$currentUser'";
				$stid_delete = oci_parse($dbh, $sql_delete);

				oci_execute($stid_delete);
				
				oci_free_statement($stid_delete);

				echo("<script> alert ('The job has been succcessfully deleted!')</script>");
				die("<script>location.href = 'http://cs2102-i.comp.nus.edu.sg/~a0101002/employerProfile.php'</script>");

			}

			oci_free_statement($stid_check);

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
				<li><a href="about.php">About</a></li>
			</ul>
			<ul class="f_list">
				<li><a href="contact.php">Contact Us</a></li>
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