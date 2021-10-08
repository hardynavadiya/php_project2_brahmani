<?php
	include "config.php";

	$id = $_GET['id'];
	
	$sql = "SELECT SUM(`t_value`) AS totalsum FROM `transaction` WHERE `u_id`='$id' AND `t_trans`='credit'";

	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$credit=$row['totalsum'];
			// $total[]=$row;
		}
	}
	else
	{
		echo mysqli_error($conn);
	}
	
?>