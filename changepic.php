<?php

session_start();

if(!isset($_SESSION['id'])){
	
	header('location:login.php');
}
else {
	
	
	$id=$_SESSION['id'];
	include('connection.php');
	if(isset($_POST['submit'])){
		$p=$_FILES['pic'];
		$pic_name=$p['name'];
		$pic_loc=$p['tmp_name'];
		$rs=move_uploaded_file($pic_loc,"img/".$pic_name);
		if($rs){
			$q="update student set profilepic='$pic_name' where id='$id'";
			$result= mysqli_query($con,$q);
			if($result){
				
				echo "Profile pic changed succesfully";
			}
			
		}
		
	}?>
	<form action="changepic.php" method="POST" enctype="multipart/form-data">
	Select your profile picture
<input type ="file" name="pic">	
	
	
	<input type ="submit" name="submit"></form>
	<a href="profile.php">Go back to profile</a>










<?php

}
?>