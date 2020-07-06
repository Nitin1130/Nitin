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
window.location.href = "layer5_login.php?var=" + name;
}
</script>



<title>
Layer 4!
</title>
</head>
<?php
echo '<body><h1>Graphical Password Authentication System</h1></center>
<br><a href="logout.php"><h3>Logout</h3></a><br>
<h4><center>Image Layer 4/5</h4>';

            $var=$_GET['var'];
			$_SESSION['a'][8]=$_GET['var'];
			$_SESSION['layer3']=$_GET['var'];
			
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