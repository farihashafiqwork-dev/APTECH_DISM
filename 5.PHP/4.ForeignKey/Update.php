<?php
include('connect.php');
$iid=$_GET['Id'];
$qu="Select * from members join role_table on members.Role=role_table.Id where members.Id='$iid'";
$rows=mysqli_query($con,$qu);
$data=mysqli_fetch_assoc($rows);
$rolename= $data['Role_Name'];
echo $rolename;
?>

<form action="" method="POST">
  First name:<br>
  <input type="text" name="nam" value="<?php echo $data['Name'];  ?>">
  <br>
Role:<br>
<?php
include ('connect.php');
$q="select * from role_table";
$rows=mysqli_query($con,$q);
echo "<select name='role'>";
 while($data = mysqli_fetch_assoc($rows))
            { 
                
                echo "<option value='$data[Id]' ";
                if($rolename == $data['Role_Name']) {
                  echo "selected='selected'";
                }
                echo ">$data[Role_Name]</option>\n";
}
echo "</select>";
?>

<br><br>
  <input type="submit" name="subbtn" value="Submit">
</form> 

<?php
if(isset($_POST['subbtn'])){
$newName=$_POST['nam'];
$newRole=$_POST['role'];
$q="update members set Name='$newName',Role='$newRole' where Id='$iid'";
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