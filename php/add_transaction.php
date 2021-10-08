<?php
	include "config.php";
	session_start();

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$date = $_POST["date"];
		$trans = $_POST["trans"];
		$value = $_POST["value"];
		$desc = $_POST["desc"];
		$u_id = $_POST["u_id"];

		if($date=="" || $trans=="" || $value=="" || $desc=="")
		{
			echo "please enter the all values";
		}

		$sql = "INSERT INTO `transaction` (`t_date`,`t_trans`,`t_value`,`t_desc`,`u_id`) VALUES('$date','$trans','$value','$desc','$u_id')";

		if(mysqli_query($conn,$sql))
		{
			echo "<script>
			window.location.href='../user_detail.php?id=$u_id';
			</script>";
		}
		else
		{
			echo mysqli_error($conn);
		}
	} 
?>