<?php

include "admin/connection.php" ;

session_start();
session_destroy();

echo "<script>location.href='index1.php'</script>";

	date_default_timezone_set('Asia/kolkata');
	$current_time = date('d-m-Y h:i:s, A', time());

	$sql1= "INSERT INTO user_log(logout) VALUES('$current_time')";
	$result1 = mysqli_query($conn,$sql1);

?>