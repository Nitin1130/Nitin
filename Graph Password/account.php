<?php
session_start();
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet">
<link rel="shortcut icon" href="photos/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account</title>


<body>
<?php
if(isset($_GET['uname'])){
include("connect.php");

$name=$_SESSION['uname'];
$con='';
$result=mysqli_query($con,"select username,name,clg,email,phone,userimage from user where username='$name'");
		if (mysqli_num_rows($result)>0)
		{
		$row=mysqli_fetch_array($result);
		$uname=$name;
		$rname=$row[1];
		$clgname=$row[2];
		$email=$row[3];
		$phone=$row[4];
		$userpic=$row[5];
		}}
echo'<br><center><b>Graphical Password Authentication System</b></center>
<a href="logout.php">';


					
					echo '<b>Hi '.$name.' ! Find your credentials below : </b>
					<br>
					<br>
					<br>
					<table>
						<tr>
							<td><img src="'.$userpic.'"></td>
							';
					echo '<td>Username : '.$uname.'<br>
					Name : '.$rname.'<br>
					
					Email : '.$email.'<br>
					
					College name : '.$clgname.'<br>
					
					Phone : '.$phone.'<br>
					
					

					<a href="change_sequence_check_password.php">Click here to Change Sequence of Images</a><br>

					
					<a href="change_password.php">Click here to Change Password</a>
					
					<br>

					<a href="change_profile_pic.php">Click here to Change Profile Picture</a></td></tr></table>';
?>
</body>
</html>