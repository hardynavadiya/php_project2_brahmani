<?php
	include "config.php";

	$id = $_GET['id'];
	$sql = "SELECT * FROM `transaction` WHERE `u_id`='$id' ORDER BY `t_date`";

	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$view_user_detail[]=$row;
		}
	}
	else
	{
		echo mysqli_error($conn);
	}
?>