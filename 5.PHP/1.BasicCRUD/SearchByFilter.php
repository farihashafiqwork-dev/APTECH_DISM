<form action="" method="GET">
<input type="text" name="searchtxt" placeholder="Search"/>
<select name="filter" id="">
<option value="">Filter</option>
<option value="Name">Name</option>
<option value="Id">Id</option>
</select>
<input type="submit" value="Search" name="btnsearch">
<input type="submit" value="Refresh" name="refresh">
<br>
<br>
</form>
<?php
include('connect.php');
$q="select * from practice";
if(isset($_GET['btnsearch']))
{
    $filter=$_GET['filter'];
    $name = $_GET["searchtxt"];
    $q="select * from table3 where $filter='$name' ";
    
}
if(isset($_GET["refresh"]))
{
echo "<script>window.location.href='read1.php'; </script>";
}
$rows=mysqli_query($con,$q);


?>

<table border=1>
<tr>
<th>Id</th>
<th>Name</th>
<th>Edit</th>
<th>Delete</th>
</tr>
<?php
while($data=mysqli_fetch_assoc($rows)){
echo "<tr>
<td>".$data['Id']."</td>
<td>".$data['Name']."</td>
<td><a href='Update.php?idd=".$data['Id']."'> Edit </a></td>
<td><a href='Delete.php?idd=".$data['Id']."'> Delete </a></td>
</tr>";
}
?>
</table>