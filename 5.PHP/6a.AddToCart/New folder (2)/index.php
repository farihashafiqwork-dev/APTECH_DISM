<?php
include('connect.php');
$query="Select * from products";
$rows=mysqli_query($con,$query);
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
 
<div class="container">

  <div class="card" style="width:400px">

<?php
while($data=mysqli_fetch_assoc($rows)){ ?>
    <img class="card-img-top" src="<?php echo $data['Image'] ?>" alt="Card image" height=200>
    <div class="card-body">
 <p class="card-text"><?php echo $data['Name'] ?></p>
      <h4 class="card-title"> <?php echo $data['price'] ?> </h4>
      <a href="cartAction.php?action=addToCart&id=<?php echo $data["id"]; ?>" class="btn btn-primary">Add To cart</a>
<?php } ?>
  </div>
     </div>
