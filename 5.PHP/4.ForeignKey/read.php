<?php
include('connect.php');
$query="Select m.Id,m.Name,r.Role_Name from members m join role_table r on m.Role=r.Id";
if(isset($_GET['searchbtn']))
{
$searchtext=$_GET['search'];
$query="Select m.Id,m.Name,r.Role_Name from members m join role_table r on m.Role=r.Id where m.Name='$searchtext'";
}

$rows=mysqli_query($con,$query);


 
?>
<form action="" method="GET">
<input type="text" name="search">
<input type="submit" name="searchbtn" Value="Search">
<a href="read.php"><input type="submit" name="reset" Value="Reset"></a>
</form>


<table border=1>
<tr>
<th> id </th>
<th> Name </th>
<th> Role</th>
<th> Edit </th>
<th> Delete </th>
</tr>
<?php
while($data=mysqli_fetch_assoc($rows)){
echo "
<tr>
<td>".$data['Id']."</td>
<td>".$data['Name']."</td>
 <td>".$data['Role_Name']."</td>
<td><a href='Update.php?Id=$data[Id]'>Edit</a></td>
<td><a href='Delete.php?id=$data[Id]'>Delete</a></td>
</tr>";
}
?>
</table>

