<?php
include('connection.php');
if(isset($_POST['q'])){
$searchtext=$_POST['q'];
$q="select * from members where Name LIKE '%$searchtext%'";
$rows=mysqli_query($link,$q);
}
else{
$q="select * from members ";
$rows=mysqli_query($link,$q);
}
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

