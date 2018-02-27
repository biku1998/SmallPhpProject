<?php



?>
<style>
h1{
	color:red;
	align:center;
	font-family:cooper;
}


</style>


<?php
include('connection.php');
 $id=$_GET['id'];
 $st=$_GET['status'];
 
 $q="select * from student where id='$id' and status='false'";
 $res=mysqli_query($con,$q);
 if($res){
    $rec=mysqli_fetch_assoc($res);
	if($rec>0){
		echo "<h1>##Account Already De-Active##</h1>";
		
		
	}else{
		$qr="update student set status='false' where id='$id'";
		$run=mysqli_query($con,$qr);
		if($run){
			echo "<script>alert('account Deactivated');</script>";
			header("location:admin.php");
		}else{
			echo "Process Failed !!!!";
		}
	}
 
 }
 
 




?>