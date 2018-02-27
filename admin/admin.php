<?php
            
            include('connection.php');
        session_start();
        if(!isset($_SESSION['user_id'])){
    
        header("location:indexadmin.php");
}
else
{
    ?>
    <?php
}
            ?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<style>
	table, th, tr ,td{
    border: 4px solid black;
}</style>

    <title>Cetpa Infotech -  Admin Panel</title>

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
             <li><a href="logoutadmin.php"><i class="fa fa-home fa-fw"></i> Logout</a></li>
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
                        <a href="#"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
					 <li>
                        <a href="addstudent.php" ><i class="fa fa-user-plus fa-fw"></i> Student's Registration</a>
                    </li>
					<li>
                        <a href="addcourse.php" ><i class="fa fa-book fa-fw"></i> Add Course</a>
                    </li>
					<li>
                        <a href="addlocation.php" ><i class="fa fa-map-marker fa-fw"></i> Add Location</a>
                    </li>
					<li>
                        <a href="addduration.php" ><i class="fa fa-clock-o fa-fw"></i> Add Duration</a>
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
                    <h1 class="page-header">*Welcome To Admin Portal*</h1>
                </div>
            </div>

            <!-- ... Your content goes here ... -->
            

<table border ="6">
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Gender</th>
<th>Address</th>
<th>Contact</th>
<th>Course</th>
<th>Location</th>
<th>Tranning Type</th>
<th>Duration</th>
<th>Fee</th>
<th>Password</th>
<th>Status</th>
<th>Action</th>
</tr>
<a href=""></a>
<!-- this php code is to change status-->
<?php

if(isset($_POST['true'])){
$qr="update student set status='true'";



}





?>
<?php

include('connection.php');





$p="select * from student";
$res=mysqli_query($con,$p);
$total=mysqli_num_rows($res);
/*for($i=0;$i <= $total / $numrec;$i++){
?>
<a href="admin.php?z=<?=$i;?>"><?=$i+1;?> </a> &nbsp;
<?php
}*/
$sql="select * from student";
$run=mysqli_query($con,$sql);

if($run){
$row=mysqli_num_rows($run);
if($row>0){
while($arr=mysqli_fetch_assoc($res)){
    ?>
    <tr>
    <td><?=$arr['id'];?></td>
    <td><?=$arr['name'];?></td>
    <td><?=$arr['email'];?></td>
    <td><?=$arr['gender'];?></td>
    <td><?=$arr['address'];?></td>
    <td><?=$arr['contact'];?></td>
    <td><?=$arr['course'];?></td>
    <td><?=$arr['location'];?></td>
    <td><?=$arr['tr_type'];?></td>
    <td><?=$arr['duration'];?></td>
    <td><?=$arr['fee'];?></td>
    <td><?=$arr['password'];?></td>
    <td><?=$arr['status'];?></td>
    <td><a href="statusf.php?id=<?=$arr['id'];?>&status=true">Deactivate</a> | 
        <a href="status.php?id=<?=$arr['id'];?>&status=false">Activate</a>
    </td>
    <!-- in above line we have pass id in query string to another page so that admin can edit the specific person he wants-->
    
    </tr>
    
    
<?php
    
} }}









?>


			

        </div>
    </div>

</div> 

<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

</body>
</html>



