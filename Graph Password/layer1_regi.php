<?php
session_start();
ob_start();
?>

<html>
<head>

<script>
function changeIt(img)
{
var name = img.src;
window.location.href = "layer2_regi.php?var=" + name;
}
</script>
<link rel="stylesheet" href="style.css" type="text/css"/>

<title>
Layer 1!
</title>
</head>
<?php
echo '<body><br><center><b><h1>Graphical Password Authentication System</h1></b></center>

<center><h4>Image Layer 1/5<br>Complete all the layers to complete your registration!<br><br>
Choose your Image ::<br><br><h4>';
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
</html>