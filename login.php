<html>
<head>
<link rel="stylesheet" href="css/bootstrap.css">
<script src="jquery/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<style>

</style>
</head>
<body>

   




<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="index.html" style="color:white"><b>Cetpa Infotech</b></a></div>
<ul class="nav navbar-nav">
     <li ><a href="cetpa.html">Home</a><li>
	 
	 
 <li class="dropdown">
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COMPANY
							<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="">ABOUT CETPA</a></li>
                                <li><a href="#" title="">COMPANY PROFILE</a></li>
                                <li><a href="#" title="">DIRECTOR MESSAGE</a></li>
                            </ul>
                        </li>
       


	<li><a href="courses.html">courses</a></li>
	 <li><a href="#">Services</a></li>
	 <li><a href="whycetpa.html">Why Cetpa</a></li>
	 <li><a href="contactus.html">Contact Us</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="login.php" class="btn btn-success btn-xs" style="color:black">LOGIN</a></li> 
<li><a href="register.html" class="btn btn-info btn-xs" style="color:black">REGISTER</a></li> 
</ul>
</div>
</nav>
<br><br><br>
<?php
if(isset($_POST['login'])){

	
$e=$_POST['email'];
$p=$_POST['password'];
	
$sql="select * from student where  email='$e' and password='$p' and status='true' ";//
include('connection.php');

$res=mysqli_query($con,$sql);
if($res== true){
	$rec=mysqli_num_rows($res);// it count the no of rows returned when query is run on database.
	if($rec>0){
		$arr=mysqli_fetch_assoc($res);
		var_dump($arr);
		//$n=$arr['name'];
		session_start();// session starts here , it is basically a global variable.
		$_SESSION['id']=$arr['id'];
		$_SESSION['email']=$arr['Email'];
		$_SESSION['name']=$arr['Name'];
		
		//echo "login sucess";
      header("location:profile.php");
	}else{
		echo "<script>alert('either email or password wrong');</script>";
	}
}	else
{
	echo "login failed ";
}

 }

?> 
<h1 style="text-align:center">LOGIN</h1>
<form action="" method="POST">
<div class="container">
<div class="form-group">
<label>Enter Email-Id</label>
<input type="text" class="form-control" name="email" autocomplete="on">
</div>
<div class="form-group">
<label>Password</label>
<input type="password" class="form-control" name="password">
</div>

<input type="submit"  name="login" class="btn btn-block btn-success" formtarget="_blank" value="LOGIN">
<div class="form-group">
<a href="genpassword.php">Generate Password(new User)</a>
</div>
</form>
</div>
<br><br> <br><br>
   <footer class="site-footer" style="background-color:black">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4 style="color:grey">COMPANY NAME</h4>
                    <p class="text"><h3 style="color:white">Cetpa Infotech Pvt. Ltd. </h3></p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4 style="color:grey">CS/IT Courses</h4>
                    <ul class="big">
                        <li><a href="#" title="">PHP</a></li>
                        <li><a href="#" title="">ANDROID</a></li>
                        <li><a href="#" title="">SQL DATABASE</a></li>
                        <li><a href="#" title="">MICROSOFT.NET</a></li>
                        <li><a href="#" title="">JAVA TECHNOLOGY</a></li>
                        <li><a href="#" title="">WEB DESIGNING</a></li>
                        <li><a href="#" title="">SOFTWARE TESTING</a></li>
                       
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4 style="color:grey">EC/EE/EI/ET</h4>
                    <ul class="big">
                        <li><a href="#" title="">VHDL</a></li>
                        <li><a href="#" title="">ROBOTICS</a></li>
                        <li><a href="#" title="">PLC&SCADA</a></li>
                        <li><a href="#" title="">SYSTEM	verilog</a></li>
                        <li><a href="#" title="">PCB&CKT DESIGN</a></li>
                        <li><a href="#" title="">EMBEDDED SYSTEM</a></li>
                        <li><a href="#" title="">WIRELESS AND TELECOME</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 fbox">
                    <h4 style="color:grey">CONTENT</h4>
                    <p class="text" style="color:red">REGARDING ANY QUERY CONTACT OR VISIT US AT</p>
                    <p><a href="tel:+902222222222"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +91-9212172602</a></p>
                    <p><a href="http://www.cetpainfotech.com/"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> QUERY@CETPAINFOTECH.com</a></p>
                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pull-left" style="color:white">Copyright © 2017 Cetpa Infotech Pvt. Ltd. All rights reserved.</p>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-inline navbar-right">
                            <li><a href="cetpa.html" style="color:white">OUR LOCATION</a></li>
                            <li><a href="#" style="color:GREY">CETPA NOIDA</a></li>
                            <li><a href="#" style="color:GREY">CETPA ROORKEE</a></li>
                            <li><a href="#" style="color:GREY">CETPA LUCKNOW</a></li>
                            <li><a href="#" style="color:GREY">CETPA DEHRADHUN</a></li>
                            <li><a href="#" style="color:GREY">CETPA GERMANY</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
    </footer>