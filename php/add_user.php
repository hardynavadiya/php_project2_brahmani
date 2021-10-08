<?php
	include "config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name = $_POST["name"];

		if($name=="")
		{
			echo "please enter the name";
		}

		$sql = "INSERT INTO `user` (`u_name`) VALUES('$name')";
		if(mysqli_query($conn,$sql))
		{
			echo "<script>
			window.location.href='../index.php';
			</script>";
		}
		else
		{
			echo mysqli_error($conn);
		}
	}
?>