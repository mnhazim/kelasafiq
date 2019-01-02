<?php
include('config.php');

if(isset($_POST['login']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql_login = "SELECT * FROM admin WHERE admin_username = '$username' AND
	admin_password = '$password'";
	if($result_login = $connect->query($sql_login))
	{
		$rows_login = $result_login->fetch_array();
		if($total_login = $result_login->num_rows)
		{
			$_SESSION['admin_id'] = $rows_login['admin_id'];
			header('Location:admin/dashboard.php');
		}
		else
		{
			$sql_login = "SELECT * FROM staff WHERE staff_username = '$username' AND
			staff_password = '$password'";
			if($result_login = $connect->query($sql_login))
			{
				$rows_login = $result_login->fetch_array();
				if($total_login = $result_login->num_rows)
				{
					$_SESSION['staff_id'] = $rows_login['staff_id'];
					header('Location:staff/dashboard.php');
				}
			}
			//echo "<script language=javascript>alert('Log masuk tidak berjaya.');window.location='login.php';</script>";
		}
	}
}
?>
<form name="login" method="post">
	<h2>Login</h2>
	Username : <input type="text" name="username"/>
	Password : <input type="password" name="password"/>
	<input type="submit" name="login" value="Login"/>
</form>