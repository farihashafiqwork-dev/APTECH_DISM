<?php
include('connect.php');
if(isset($_POST["subbtn"]))
{
$n=$_POST["name"];
$q="insert into practice(Name) values ('$n')";
$result=mysqli_query($con,$q);
if($result)
{
echo "<script> alert('done'); window.location.href='form.php';</script>";
/*header('Location:form.php');*/
}
else
{
echo "retry";
}
}
?>