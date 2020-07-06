<?php
session_start();
session_destroy();
session_start();
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="style.css" rel="stylesheet">
<link rel="shortcut icon" href="photos/favicon.ico">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>

<script>
			function validate()
			{
			var name=document.forms["login"]["name"].value;
			var password=document.forms["login"]["password"].value;
			
			
			if ((password==null || password=="") && !(name==null || name==""))
			{
			alert("Please enter your password !!");return false;
			}
			
			if (!(password==null || password=="") && (name==null || name=="")  )
			{
			alert("Please enter your name !!");return false;
			}
			
			if ((name==null || name=="") && (password==null || password==""))
			{
			alert("Please enter your name !! \nPlease enter your password !!");return false;
			}
			else
			return true;
			}
			
		</script>
		<noscript>Your Javascript is off !! </noscript>

</head>

<body>
<?php
include("connect.php");
if(!isset($_POST['submit']))
{
echo'<h1><br><center><b>Graphical Password Authentication System</b></center></h1>';
  
           		echo' &nbsp; 
<center>                
<h2>Login<br>
</h2>
<section>

<form name="login" action="login.php" method="post" onSubmit="return validate();" class="align" >

<div>
Username</h3> : <input type ="text" name="name" class="align" placeholder="Enter Username">
</div>

<div>
Password</h3> : <input type="password" name="password" class="align" placeholder="Enter Password">
</div><br>

<input type="submit" class="btn" value="Login" name="submit" class="align">

</form></section>
<p>
If you are not registered then register <i><a href="signup.php">here</a></i><br></p><br><br><br><br></center>
';			

}
		else
		{
			session_destroy();
			session_start();
			
			$name=$_POST['name'];
			//$name=mysql_real_escape_string($name);
			$password=$_POST['password'];
			//$password=mysql_real_escape_string($password);
				if($name=='admin' && $password==666)
				{
				$_SESSION['uname']=$name;header("Location: admindash.php");return;exit;
				}
			$query="select * from user where username='$name' and password='$password'" ;
			//echo $query;
			$result=mysqli_query($con,$query);
			if($result)
			{
				$rows=mysqli_num_rows($result);
				if($rows>0)
				{ 
					
					$row=mysqli_fetch_array($result);
					if($row[5]==1)
					$_SESSION['uname']=$name;
					header('Location:account.php');
					header('Location:layer1_login.php');
					
				}
				else
				{	
				$query="select * from user where username='$name' and password='$password'" ;
				$result=mysqli_query($con,$query);
				$row=mysqli_fetch_array($result);
				$rows=mysqli_num_rows($result);
				if($rows==0)
				echo'<br><center><b>Graphical Password Authentication System</b></center>
				<center>No such user exists in our database !<br>Maybe you entered something wrong !<br><a href="login.php">Click here to go back</a><br><br><br><br>
				';			

				}
			}
			//else echo '<center>Either you are not registered OR you are not confirmed by admin OR the hunt has not started yet!<br><a href="login.php"><font color="white">Click here to go back</a>';
		}
?>
</body>
</html>