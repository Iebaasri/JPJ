<?php
include('Config.php');
$no_ic=$_GET['no_ic'];
$query="delete from pelanggan where no_ic='$no_ic'";
$result=mysql_query($query);
echo $no_ic;

if($result==TRUE) echo "berjaya <a href=\"datapelanggan.php\">senarai</a>";
if($result==TRUE) echo "gagal <a href=\"datapelanggan2.php\">senarai</a>";
?>