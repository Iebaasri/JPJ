<?php
include ('config.php');
$username=$_POST['username'];
$password=$_POST['password'];

echo"<br>";

$query="insert into login_pelanggan values
('$username','$password')";
if(mysql_query($query)){
echo "pendaftaran berjaya";
echo "-->";
echo "<a href=\"login.php\">Login Page</a>";}
else
echo "OOPS! Something Went Wrong";
?>