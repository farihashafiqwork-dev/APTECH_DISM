<?php
session_start();
if(isset($_SESSION['UN']))
{
echo "hello ".$_SESSION['UN'];
}
else{
header('location:login.php');
}

?>

<a href='logout.php'><input type="button" value="Logout"></a>