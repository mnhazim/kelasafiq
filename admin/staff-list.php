<?php
include('../config.php');

$sql_staff = "SELECT * FROM staff";
if($result_staff = $connect->query($sql_staff))
{
	$rows_staff = $result_staff->fetch_array();
	$total_staff = $result_staff->num_rows;
	$num_staff = 0;
}
?>
<h2>Staff Record</h2>
<table border="1" width="100%">
	<tr>
		<td>#</td>
		<td>Staff Name</td>
		<td>Staff Email</td>
		<td>Staff Picture</td>
		<td>Action</td>
	</tr>
	<?php do { ?>
	<tr>
		<td><?php echo ++$num_staff;?></td>
		<td><?php echo $rows_staff['staf_name'];?></td>
		<td><?php echo $rows_staff['staf_email'];?></td>
		<td><?php if($rows_staff['staf_picture']!=NULL) { ?><img width="auto" src="../upload/<?php echo $rows_staf['staf_picture'];?>" height="150"><?php } ?></td>
		<td></td>
	</tr>
	<?php } while($rows_staff = $result_staff->fetch_array()); ?>
</table>