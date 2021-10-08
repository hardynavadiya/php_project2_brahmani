<?php
	include "config.php";
	session_start();

	$id = $_GET['id'];

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name = $_POST["name"];

		if($name == "")
		{
			echo "please enter the details";
		}

		$sql = "UPDATE `user` SET `u_name`='$name' WHERE `u_id`='$id'";

		if(mysqli_query($conn,$sql))
		{
			echo "<script>
			window.location.href='../index.php';
			</script>";
		}
		else
		{
			echo "<script>
			alert('Please Try Again..');
			window.location.href='../index.php';
			</script>";
		}
	}
?>