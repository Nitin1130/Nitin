
<?php
session_start();
ob_start();
?>

<html>
<head>
<link href="style.css" rel="stylesheet">
<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "layer2_login.php?var=" + name;
}
</script>

<title>
Layer 1!
</title>
</head>

<?php
echo '<body><h1>Graphical Password Authentication System</h1></center>
<br><a href="logout.php"><h3>Logout</h3></a><br>
<h4><center>Image Layer 1/5</h4>';

if ($_SESSION['selectagain']==1)
{
echo 'Your last selection sequence of images was wrong ! Start Fresh again !';
$_SESSION['selectagain']==0;
}


echo'<center><h4><br>Selecting any image will redirect you the next layer !<br><br>
Choose your Image ::<br><br></h4></center>';
$ar[0]="wood.";
$ar[1]="edu.";
$ar[2]="bit.";
$ar[3]="two.";
$ar[4]="virus.";
shuffle($ar);

echo '<center>';
for($i=0;$i<=4;$i++)
echo '<img src="images\\'.$ar[$i].'jpg" onclick="changeIt(this)"> ';
echo '</center>
</body>';
		
?>
</body>
</html>