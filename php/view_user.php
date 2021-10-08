<?php
	include "config.php";

	$sql = "SELECT * FROM `user` ORDER BY `u_name` ASC";
	$result = mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			$user[]=$row;
		}
	}
	else
	{
		// echo "<script>
		// alert('hsdk');
		// </script>";
		echo mysqli_error($conn);
	}
?>