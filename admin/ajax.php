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


<?php

$x=$_POST['duration'];
include_once('connection.php');

$sql="select fee from duration where duration='$x'";
$run=mysqli_query($con,$sql);

if($run){
	$rec=mysqli_num_rows($run);
	if($rec>0){
		$arr=mysqli_fetch_assoc($run);
		?>
		<div class="form-group">
		<input  type="text" readonly name="fee" class="form-control" value="<?= $arr['fee'];?>">
		</div><?php
	}
}


?>