<?php
	$conexion=mysqli_connet('localhost','admin','u1201060','registeracounts');

	$name 				= $_POST['name'];
	$phone 				= $_POST['phone'];
	$email 				= $_POST['email'];
	$business 			= $_POST['business'];

	$sql="INSERT into users (name,phone,email,business)
			values ('$name','$phone','$email','$business')";

	echo mysqli_query($conexion,$sql);
?>
