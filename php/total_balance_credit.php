<?php
	include "config.php";

	// $id = $_GET['id'];
	
	$sql = "SELECT SUM(`t_value`) AS totalsum FROM `transaction` WHERE `t_trans`='credit' AND `t_status` = '1'";

	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$total_balance_credit=$row['totalsum'];
			// $total[]=$row;
		}
	}
	else
	{
		echo mysqli_error($conn);
	}
	
?>