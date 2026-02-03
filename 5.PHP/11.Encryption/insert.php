<?php
include('connect.php');
if(isset($_POST["subbtn"]))
{
$n=$_POST["name"];
$p=PASSWORD_HASH($_POST["pass"], PASSWORD_DEFAULT);
$q="insert into members(Name,Password) values ('$n','$p')";
$result=mysqli_query($con,$q);

if($result)
{
echo "<script> alert('done'); window.location.href='read.php';</script>";
}
else
{
echo mysqli_error($con);
}

}
?>