<?php
include('../config.php');

if(isset($_POST['add']))
{

	$email = $_POST['email'];
	$picture = $_FILES['picture']['name'];
	$resume = $_FILES['resume']['name'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];


	$target = "../upload/";
	$target = $target.basename($picture);
	
	$target_resume = "../resume/";
	$target_resume = $target_resume.basename($resume);
	
	$sql_add_staff = "INSERT INTO staff (staf_name, staf_username,
	staf_password, staf_email, staf_picture, staf_resume) VALUES 
	('$name', '$username', '$password', '$email', '$picture', '$resume')";
	if($result_add_staff = $connect->query($sql_add_staff))
	{
		move_uploaded_file($_FILES['picture']['tmp_name'], $target);
		move_uploaded_file($_FILES['resume']['tmp_name'], $target_resume);
		echo "berjaya";
	}
	else
	{
		echo "gagal";
	}
}
?>
<form name="add-staff" method="post" enctype="multipart/form-data">
	<h2>Add Staff</h2><hr/>
	Staff Name : <input type="text" name="name" required/><br/>
	Staff Username : <input type="text" name="username" required/><br/>
	Staff Password : <input type="text" name="password"required/><br/>
	Staff Email : <input type="text" name="email" required/><br/>
	Staff Picture : <input type="file" name="picture" required/><br/>
	Staff Resume : <input type="file" name="resume" required/><br/>
	<input type="submit" name="add" value="Submit"/>
</form>