<?php
	include "config.php";

	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$id = $_GET['id'];

		$sql = "SELECT * FROM `user` WHERE `u_id`='$id'";
		
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0)
		{
			$sql = "UPDATE `transaction` SET `t_status` = '0' WHERE `u_id` = '$id'";
	
			if(mysqli_query($conn,$sql))
			{

				$sql = "DELETE FROM `user` WHERE `u_id`='$id'";
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
		}
	}
?>