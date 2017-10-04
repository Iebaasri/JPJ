<?php
session_start();
session_destroy();
echo "You're log out!";
echo "<a href='index.html'> Click Here to return</a>";
?>