<?php
include('../config.php');

if(!isset($_SESSION['staff_id']))
{
	echo "<script language=javascript>alert('Sila log masuk terlebih dahulu.');window.location='../login.php';</script>";
}

$sql_staff = "SELECT * FROM staff WHERE staff_id =
'".$_SESSION['staff_id']."'";
if($result_staff = $connect->query($sql_staff))
{
	$rows_staff = $result_staff->fetch_array();
}
?>
Welcome, <?php echo $rows_staff['staff_name'];?> |
<a href="logout.php">Logout</a>