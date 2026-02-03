<?php
include('connect.php');
if(isset($_POST['q'])){
$searchtext=$_POST['q'];
$q="select * from student where st_Name LIKE '%$searchtext%'";
$rows=mysqli_query($con,$q);
}
else{
$q="select * from student";
$rows=mysqli_query($con,$q);
}
?>






<table border=1>
<tr>
<th> id </th>
<th> Name </th>
<th> Course </th>
<th> fees</th>
</tr>
<?php
while($data=mysqli_fetch_assoc($rows)){
echo "<tr>
<td>".$data['Id']."</td>
<td>".$data['st_Name']."</td>
<td>".$data['st_Course']."</td>
<td>".$data['st_Fees']."</td>
</tr>";
}
?>
</table>

