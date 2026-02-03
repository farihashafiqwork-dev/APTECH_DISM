<?php
header('Content-Type:application/json');
include('connect.php');
$query="Select * from members";
$rows=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($rows);
echo json_encode($data);
?>