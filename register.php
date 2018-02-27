 <?php
include('connection.php');
 ?>



 <?php
            if(isset($_POST['register'])){
              $f=$_POST['course'];
               $a=$_POST['name'];
                $b=$_POST['email'];
                $c=$_POST['gen'];
                $d=$_POST['address'];
                $e=$_POST['contact'];
               
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
<a class="navbar-brand" href="index.html" style="color:white"><b>Cetpa Infotech</b></div>
<ul class="nav navbar-nav">
     <li><a href="cetpa.html">Home</a><li>
     
     
 <li class="dropdown">
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">COMPANY <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="">ABOUT CETPA</a></li>
                                <li><a href="#" title="">COMPANY PROFILE</a></li>
                                <li><a href="#" title="">DIRECTOR MESSAGE</a></li>
                            </ul>
                        </li>
       


    <li class=""><a href="courses.html">courses</a></li>
     <li><a href="#">Services</a></li>
     <li><a href="whycetpa.html">Why Cetpa</a></li>
     <li><a href="contactus.html">Contact Us</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li><a href="login.php" class="btn btn-success btn-xs" style="color:black">LOGIN</a></li> 
<li><a href="register.php" class="btn btn-info btn-xs" style="color:black">REGISTER</a></li> 
</ul>
</div>
</nav>



<br><br>

 <br><br>
 
 <!--content here-->
  <form action="register.php" method="POST">

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
                    <label><input type="radio" name="gen" value="male" >Male</label>
                    </div>
                    <div class="radio-inline">
                    <label><input type="radio" name="gen" value="female">Female</label>
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
                    $q1=mysqli_query($con,"select * from location");
                    if($q1){
                        while($arr1=mysqli_fetch_assoc($q1)){
                        ?>
                        <option value="<?= $arr1['location'];?>"><?= $arr1['location'];?></option>
                        <?php
                        }
                    }
                    
                   
                    ?></select>
                    
                </div>
                <div class="form-group">
                    <label>Select Training Type</label>
                    <select name="tr_type" class="form-control"> 
                    <option>Summer training</option>
                    <option>winter training</option>
                    <option>Demo</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Select Duration</label>
                    <select name="duration" onchange="abc(this.value);" class="form-control"> 
                    <option value="">Select Duration</option>
                    <?php
                    $x=mysqli_query($con,"select * from duration");
                    if($x){
                        while($arr2=mysqli_fetch_assoc($x)){
                        ?>
                        <option value="<?= $arr2['duration'];?>"><?= $arr2['duration'];?></option>
                        <?php
                        }
                    }
          
                    ?>
                    </select>
                </div><br>

                <div class="form-group">
                    <label>Fee</label>
                    <label id ="res" name="fee">Fee</label>
                </div>
                
                    <input type="submit"  name="register" class="btn btn-block btn-success" >
                </form>

<script >

function abc(id){

 var dur='duration='+id;
 $.ajax({
  url:'admin/ajax.php',
  data: dur,
  type:'post',
  success:function(result){

  jQuery('#res').html(result);
  }
}) ;  
}

</script>
       
 
 
 
 
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
                        <li><a href="#" title="">SYSTEM verilog</a></li>
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

 
 
 
 
 
 
