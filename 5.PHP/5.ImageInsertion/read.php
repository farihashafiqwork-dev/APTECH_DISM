<?php
include('connect.php');
$query="Select * from members";
if(isset($_GET['searchbtn']))
{
$searchtext=$_GET['search'];
$query="Select * from members where Name='$searchtext'";
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
<th> Image</th>
<th> Edit </th>
<th> Delete </th>
</tr>
<?php
while($data=mysqli_fetch_assoc($rows)){
echo "<tr>
<td>".$data['Id']."</td>
<td>".$data['Name']."</td>
<td><img src='$data[Image]' height=50></td>
<td><a href='Update.php?idd=".$data['Id']."'> Edit </a></td>
<td><a href='Delete.php?idd=".$data['Id']."'> Delete </a></td>
</tr>";
}
?>
</table>

