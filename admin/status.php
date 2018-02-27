<?php

?>
<body>
<style>
h1{
	color:red;
	align:center;
	font-family:cooper;
	
}
a{
	color:black;
	font-family:cooper;
	text-decoration:none;
}


</style></body>

<?php

include('connection.php');
 $id=$_GET['id'];
 $st=$_GET['status'];
 
 $q="select * from student where id='$id' and status='true'";
 $res=mysqli_query($con,$q);
 if($res){
    $rec=mysqli_fetch_assoc($res);
	if($rec>0){
		
		echo "<h1>##Account Already Active##</h1>";
	?> <a href="admin.php">Admin-Panel</a>  <?php
		
	}else{
		$qr="update student set status='true' where id='$id'";
		$run=mysqli_query($con,$qr);
		if($run){
			echo "<script>alert('account activated');</script>";
			header("location:admin.php");
		}else{
			echo "Process Failed !!!!";
		}
	}
 
 }
 
 




?>