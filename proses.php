<!DOCTYPE html>
<html>
<head>
	<title>Data Pemantauan Covid19</title>
</head>
<body>
	<center>
	<h1><?php echo "Data Pemantauan Covid19 Wilayah "; echo $option = $_GET['wilayah']; ?></br>
		<?php echo "Per " . date("d M Y H:i:s") . " WIB"; ?></br>
		<?php echo $_GET['operator']; echo " / "; echo $_GET['nim']; ?></h1>
</br>
<h2>
<table border="1">
	<tr>
	<td>Positif</td><td>Dirawat</td><td>Sembuh</td><td>Meninggal</td>
	</tr>
	<tr>
	<td><?php echo $_GET['positif']; ?></td><td><?php echo $_GET['rawat']; ?></td><td><?php echo $_GET['sembuh']; ?></td><td><?php echo $_GET['meninggal']; ?></td>
	</tr>
</table>
</h2>
</center>
</body>
</html>
