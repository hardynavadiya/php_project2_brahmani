<?php
	include "config.php";
	session_start();

	$t_id = $_GET['id'];
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$date = $_POST["date"];
		$trans = $_POST["trans"];
		$value = $_POST["value"];
		$desc = $_POST["desc"];
		$id = $_POST["u_id"];
		if($date=="" || $trans=="" || $value=="" || $desc=="")
		{
			echo "please enter the all values";
		}

		$sql = "UPDATE `transaction` SET `t_date`='$date',`t_trans`='$trans',`t_value`='$value',`t_desc`='$desc' WHERE `t_id`='$t_id'";
		if(mysqli_query($conn,$sql))
		{
			echo "<script>
			window.location.href='../user_detail.php?id=$id';
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