<?php
include_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cetpa Infotech -  Admin Panel</title>
	<script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Cetpa Infotech</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="http://localhost/project/cetpa"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown navbar-inverse">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
					 <li>
                        <a href="#" class="active"><i class="fa fa-user-plus fa-fw"></i> Student's Registration</a>
                    </li>
					<li>
                        <a href="addcourse.php" ><i class="fa fa-user-plus fa-fw"></i> Add Course</a>
                    </li>
					<li>
                        <a href="addlocation.php" ><i class="fa fa-user-plus fa-fw"></i> Add Location</a>
                    </li>
					<li>
                        <a href="addduration.php" ><i class="fa fa-user-plus fa-fw"></i> Add Duration</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Student's Details</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
			
			<?php
			if(isset($_POST['register'])){
				$a=$_POST['name'];
				$b=$_POST['email'];
				$c=$_POST['gen'];
				$d=$_POST['address'];
				$e=$_POST['contact'];
				$f=$_POST['course'];
				$g=$_POST['location'];
				$h=$_POST['tr_type'];
				$i=$_POST['duration'];
				$j=$_POST['fee'];
				
				include_once('connection.php');
				$q="insert into student(name,email,gender,address,contact,course,location,tr_type,duration,fee) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
				$sq=mysqli_query($con,$q) or die(mysqli_error($sq));
				if($sq){
				echo "<script> alert('Registered Successfully');</script>";
				//echo "Success";
				}else{
					echo "<script> alert('Try Again');</script>";
				}
				
			}
			
			
			?>
			
			
			<form action="addstudent.php" method="POST">

				<div class="form-group">
					<label>Enter name</label>
					<input type="text" class="form-control" name="name">
				</div>
				
				<div class="form-group">
					<label>Enter Email-Id</label>
					<input type="text" class="form-control" name="email">
				</div>
				
				<div class="form-group">
					<label>Select gender</label>
					<br>
					<div class="radio-inline">
					<label><input type="radio"name="gen" checked>Male</label>
					</div>
					<div class="radio-inline">
					<label><input type="radio" name="gen">Female</label>
					</div>
				</div>
				
				<div class="form-group">
					<label>Enter address</label>
					<textarea class="form-control" rows="4" name="address"></textarea>
				</div>
				
				<div class="form-group">
					<label>Enter Contact Number </label>
					<input type="text" class="form-control" name="contact">
				</div>
				
				<div class="form-group">
					<label> Select course</label>
					<select name="course" class="form-control">
					<?php
					$q=mysqli_query($con,"select * from course");
					if($q){
						while($arr=mysqli_fetch_assoc($q)){
						?>
						<option value="<?= $arr['c_name'];?>"><?= $arr['c_name'];?></option>
						<?php
						}
					}
					?>
					
					
					
					</select>
				</div>

				<div class="form-group">
					<label>Select Location</label>
					<select name="location" class="form-control"> 
					<?php
					include_once('connection.php');
					$sql=mysqli_query($con,"select * from location") or die(mysqli_error($sql));
					if($sql){
						while($arr=mysqli_fetch_assoc($sql)){
							?><option value="<?= $arr['l_name'];?>"><?= $arr['l_name'];?><?php
						}
					}
					?>
					
					
					</select>
				</div>
				<div class="form-group">
					<label>Select Training Type</label>
					<select name="tr_type" class="form-control"> 
					<option value="Summer training">Summer training</option>
					<option value="winter training">winter training</option>
					<option value="Regular training">Regular training</option>
					<option value="Demo"	>Demo</option>
					</select>
				</div>
				
				<div class="form-group">
					<label>Select Duration</label>
					<select name="duration" onchange="abc(this.value);" class="form-control"> 
					<?php 
					$sql=mysqli_query($con,"select * from duration");
					if($sql){
						while($arr=mysqli_fetch_assoc($sql)){
							?><option value="<?= $arr['duration'];?>"><?= $arr['duration'];?></option><?php
						}
					}
					?>
					</select>
				</div>
<br>
				<div class="form-group">
					<label>Fee</label>
					<label id="res">Fee</label>
				</div>
				
					<input type="submit" name="register" class="btn btn-block btn-success">
				</form>
<script>
function abc(id)
{
	var dur = 'duration='+id;
	$.ajax({
		url:'ajax.php',
		data:dur,
		type:'post',
		success:function(result){
			jQuery('#res').html(result);
			//alert(result);
		}
	});
}
</script>
        </div>
    </div>

</div>
<br>
<!-- jQuery -->


<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>
