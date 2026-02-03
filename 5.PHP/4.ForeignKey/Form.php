<h2>HTML Forms</h2>

<form action="create.php" method="POST">
  First name:<br>
  <input type="text" name="name">
  <br>
Role:<br>
<?php
include ('connect.php');
$q="select * from role_table";
$rows=mysqli_query($con,$q);
echo "<select name='role'>";
while($data=mysqli_fetch_assoc($rows)){
 echo "<option value='$data[Id]'>". $data[Role_Name] ." </option>";
}
echo "</select>";
?>

<br><br>
  <input type="submit" name="subbtn" value="Submit">
</form> 

