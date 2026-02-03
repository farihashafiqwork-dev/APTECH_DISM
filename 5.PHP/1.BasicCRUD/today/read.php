<?php
include('connect.php');
$q="select * from practice";
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

<?php
while($data=mysqli_fetch_assoc($rows)){ ?>
<tr>
<td> <?php echo $data[Id] ?> </td>
<td> <?php echo $data[Name] ?> </td>
</tr>

<?php } ?>
</table>