<?php
	include "config.php";

	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$id = $_GET['id'];
		$u_id = $_GET['u_id'];
		$sql = "SELECT * FROM `transaction` WHERE `t_id`='$id'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			$sql = "DELETE FROM `transaction` WHERE `t_id`='$id' AND `u_id` = '$u_id'";
			if(mysqli_query($conn,$sql))
			{

				echo "<script>
				window.location.href='../user_detail.php?id=$u_id';
				</script>";
			}
			else
			{
				echo "<script>
				alert('Please Try Again..');
				window.location.href='../index.php';
				</script>";
				// echo mysqli_error($conn);
			}
		}
	}
?>