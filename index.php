<!DOCTYPE html>
<html>
<head>
	<title>Data Pemantauan Covid19</title>
</head>
<body>
<form action="proses.php" method="get">
<table style="border: 15;">
<td>Nama Wilayah</td><td> : </td><td><select name="wilayah">
  <option value="DKI Jakarta">DKI Jakarta</option>
  <option value="Jawa Barat">Jawa Barat</option>
  <option value="Banten">Banten</option>
  <option value="Jawa Tengah">Jawa Tengah</option>
</select> [DKI Jakarta|Jawa Barat|Banten|Jawa Tengah]</td></tr>
<td>Jumlah Positif</td><td> : </td><td><input type="text" name="positif"> Orang	</td></tr>
<td>Jumlah Dirawat</td><td> : </td><td><input type="text" name="rawat"> Orang	</td></tr>
<td>Jumlah Sembuh</td><td> : </td><td><input type="text" name="sembuh"> Orang	</td></tr>
<td>Jumlah Meninggal</td><td> : </td><td><input type="text" name="meninggal"> Orang </td></tr>
<td>Nama Operator</td><td> : </td><td><input type="text" name="operator"></td></tr>
<td>NIM</td><td> : </td><td><input type="text" name="nim"></td></tr>
<td><input type="submit" name="submit" value="SUBMIT"></td>
</table>
</form>
</body>
</html>
