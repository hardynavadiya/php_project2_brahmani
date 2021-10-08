<?php
	include "config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$id = $_GET['id'];

		$sql = "SELECT * FROM `user` WHERE `u_id`='$id'";
		$result = mysqli_query($conn,$sql);

		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				$user_detail[]=$row;
				sort($user_detail);
			}
		}
		else
		{
			echo mysqli_error($conn);
		}
	}
?>