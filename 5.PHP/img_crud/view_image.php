<?php
include('connection.php');
$q="SELECT * FROM `images`";
$row=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
<table class="table table-dark">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Image</th>
      <th>Edit</th>
      <th>Delete</th>
      
    </tr>
  </thead>
  <tbody>
    <?php while($data=mysqli_fetch_assoc($row)){?>
    <tr>
      <td><?php echo $data['id'] ?></td>
      <td><?php echo $data['img_name'] ?></td>
      <td><img src="<?php echo $data['image'] ?>" alt=""></td>
      <td><a href="image_edit.php?id=<?php echo $data['id'] ?>" class="btn btn-success">Edit</a></td>
      <td><a href="image_delete.php?id=<?php echo $data['id']?>" class="btn btn-danger">Delete</a></td>
    </tr>
 <?php } ?>
  </tbody>
</table>

</body>
</html>