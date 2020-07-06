<?php
session_start();
ob_start();
?>
<html>
<head>

<title>
Successful!!
</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<?php
echo '<body> <br><center><b><h1>Graphical Password Authentication System</h1></b></center>
<center><b><br><h4>You have succesfully registered !<br><a href="login.php">Click here to login</b></a></h4>';
?>

<?php
include('connect.php');		
	$var=$_GET['var'];
    $_SESSION['a'][10]=$_GET['var'];
	
$name=$_SESSION['a'][0];
$password=$_SESSION['a'][1];
$realname=$_SESSION['a'][2];
$collname=$_SESSION['a'][3];
$email=$_SESSION['a'][4];
$phone=$_SESSION['a'][5];
$image1=$_SESSION['a'][6];
$image2=$_SESSION['a'][7];
$image3=$_SESSION['a'][8];
$image4=$_SESSION['a'][9];
$image5=$_SESSION['a'][10];

$query="INSERT into user(username,password,name,clg,email,phone,image1,image2,image3,image4,image5,userimage) 
values('$name','$password','$realname','$collname','$email',$phone,'$image1','$image2','$image3','$image4','$image5','images/default.jpg')";
$result=mysqli_query($con, $query);
?>

</body>
</html>