<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>KADET PENGANGKUTAN JALAN</title>
<img src="logoJPJ.png"alt="jpj"style="width:200px;height:228px;"/>
<img src="logoJPJ.png"alt="jpj"align="right"
style="width:200px;height:228px;"/>
<style>
table,th,td{
  border:1px solid black;
  border-collapse;
}
body{
  background-color:pink;
}
</style>

<?php
include('config.php');
$sql="SELECT * from pelanggan ORDER BY nama_penuh";
$result=mysql_query($sql)or die(mysql_error());
?>

<center><table style="width:70%">
KADET PENGANKUTAN JALAN (JPJ)<br>
<p><strong><center>Senarai Nama Pelanggan</strong></center></p>
<table border="1" width="849" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#FFCC00"><strong>Nama Penuh</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>No Ic</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Tempat Lahir</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Jantina</strong></td>
<td align="center" bgcolor="#FFCC00"><strong>Jenis Lesen</strong></td>
</tr>


<?php
while($row=mysql_fetch_array($result))
{
  echo"<tr>";
  echo"<br><td>".$row["nama_penuh"]."</td>";
  echo"<td>".$row["no_ic"]."</td>";
  echo"<td>".$row["tempat_lahir"]."</td>";
  echo"<td>".$row["jantina"]."</td>";
  echo"<td>".$row["jenis_lesen"]."</td>";

}
echo"</table>";
echo"<center>";
echo"<br>";
?>
</table>


<a href="index.html" target="_top">Daftar Keluar Pengguna (Logout)</a><br> 
</center>
</body>
</head>
</html>