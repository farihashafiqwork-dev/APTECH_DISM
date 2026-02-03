<h2>HTML Forms</h2>

<form action="#" method="POST">
  First name:<br>
  <input type="text" name="naam">
  <br>
  <input type="submit" name="subbtn" value="Submit">
</form> 

<?php
include('connect.php');
if(isset($_POST["subbtn"]))
{
$n=$_POST["naam"];
$q="insert into practice(Name) values ('$n')";
$result=mysqli_query($con,$q);
if($result)
{
echo "<script> alert('done'); window.location.href='read.php';</script>";
/*header('Location:read.php');*/
}
else
{
echo "retry";
}
}
?>

