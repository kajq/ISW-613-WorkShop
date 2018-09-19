<?php
$var= 'Hello Dinamic Word';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dinamic</title>
</head>
<body>
<div>
	<li>
		<a href="index.html"> Static </a>
	</li>
	<li>
		<a href="dinamic.php"> Dinamic </a>
	</li>
</div>
<br>
<?php
echo "<h3>$var</h3>";
echo "<img src='https://cdn-images-1.medium.com/max/1600/1*jB76MLZjiNhGSQQvxm7LSQ.gif'>";
?>

</body>
</html>