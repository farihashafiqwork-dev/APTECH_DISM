<?php
include('connection.php');
@$rec_data=$_POST['keyword'];
if(isset($rec_data)){
    $q="select * from users where username like '%$rec_data%'";
}
else{
    $q="select * from users";
}

$run=mysqli_query($link,$q);

?>





 <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
        <?php while($data=mysqli_fetch_assoc($run)){ ?>
      <tr>
        <td> <?php echo $data['username'] ?> </td>
        <td> <?php echo $data['password'] ?> </td>
        <td> <?php echo $data['contact'] ?> </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>