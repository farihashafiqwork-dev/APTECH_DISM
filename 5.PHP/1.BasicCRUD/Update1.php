<?php
include('connect.php');
$iid=$_GET['id'];
$qu="select * from practice where Id='$iid'";
$rows=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($rows);
?>

<form action="" method="POST">
  First name:<br>
  <input type="text" name="nam" value="<?php echo $data['Name']; ?>">
  <br>
  <input type="submit" name="subbtn" value="Submit">
</form> 

<?php
if(isset($_POST['subbtn'])){
$newName=$_POST['nam'];
$q="update practice set Name='$newName' where Id='$iid'";
$res=mysqli_query($con,$q);
if($res){
echo "<script> alert('Done Editing'); window.location.href='read.php';</script>";
}
else
{
echo "<script> alert('error'); </script>";
}
}

?>