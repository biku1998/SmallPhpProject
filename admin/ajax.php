
<?php

$x=$_POST['duration'];
include_once('connection.php');
$sql="select fee from duration where duration='$x'";
$run=mysqli_query($con,$sql);
if($run){
	$rec = mysqli_num_rows($run);
	if($rec>0){
		$arr=mysqli_fetch_assoc($run);
		?>
		<div class="form-group">
		<input  type="text" readonly name="fee" class="form-control" value="<?= $arr['fee'];?>">
		</div><?php
	}
}



?>