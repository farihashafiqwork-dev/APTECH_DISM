<?php
include('connect.php');
$q="select * from practice";
$rows=mysqli_query($con,$q);
$no=mysqli_num_rows($rows);
echo($no);
?>