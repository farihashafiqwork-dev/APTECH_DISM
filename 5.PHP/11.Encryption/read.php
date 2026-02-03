<?php
include('connect.php');
$query="Select * from members";
$rows=mysqli_query($con,$query);
?>



<table border=1>
<tr>
<th> id </th>
<th> Name </th>
<th> Password </th>

</tr>
<?php
while($data=mysqli_fetch_assoc($rows)){
echo "<tr>
<td>".$data['id']."</td>
<td>".$data['Name']."</td>
<td>".$data['Password']."</td>

</tr>";
}
?>
</table>

