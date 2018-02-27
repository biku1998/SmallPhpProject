<!DOCTYPE html>
<html >
<head>
<style>
  .h1:hover{
  color:black;
  }

</style>
  <meta charset="UTF-8">
  <title>Admin-Login</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>


<?php
if(isset($_POST['submit']))
{
   $a=$_POST['id'];
   $b=$_POST['password'];
   include('connection.php');

   $q="select * from admin_record where user_id='$a' and password='$b'";
   $r=mysqli_query($con,$q);
   if($r){
    $rec=mysqli_num_rows($r);
    if($rec>0){
      $arr=mysqli_fetch_assoc($r);
      session_start();// session starts here , it is basically a global variable.
    //  var_dump($arr);
    
    $_SESSION['user_id']=$arr['user_id'];
    //setcookie('id','1');
      header('location:admin.php');
    }else{
      echo "<script>alert('failed');</script>";
    }
   }
}


?>

  
  <div id="wrap">
  <div id="regbar">
    <div id="navthing">
      <h2><a href="#" id="loginform">Login</a>  <a href=""></a></h2><h1 style="color: white;">* Admin Login Panel *</h1><br>    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
           <fieldset>
           <form action="" method="POST">
            UserId   <input type="text" style="width:300px; height: 28px;" name="id"><br>
            Password <input type="password" name="password"><br>
            <input type="submit" name="submit" value="Login">
          </form>
           </fieldset>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
