<?php
include('../config.php');

if(!isset($_SESSION['admin_id']))
{
	echo "<script language=javascript>alert('Sila log masuk terlebih dahulu.');window.location='../login.php';</script>";
}

$sql_admin = "SELECT * FROM admin WHERE admin_id =
'".$_SESSION['admin_id']."'";
if($result_admin = $connect->query($sql_admin))
{
	$rows_admin = $result_admin->fetch_array();
}
?>
Welcome, <?php echo $rows_admin['admin_name'];?> |
<a href="logout.php">Logout</a>
<hr/>
<a href="add-staff.php">Add Staff</a> | 
<a href="staff-list.php">View All Staff</a>