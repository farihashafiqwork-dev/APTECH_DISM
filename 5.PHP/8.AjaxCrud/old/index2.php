
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 

</head>
<body>

<div class="container" style="margin-top:30px">
<form method="POST" action="crudajax.php">
  <div class="form-group">
    <label for="SName">Enter Name</label>
    <input type="text" class="form-control" name="name" id="SName" placeholder="Enter Name">
  </div>
  <div class="form-group">
    <label for="SCourse">Enter Course</label>
    <input type="text" class="form-control" name="course" id="SCourse" placeholder="Enter Course">
  </div><div class="form-group">
    <label for="SFees">Enter Fees</label>
    <input type="text" class="form-control" id="fees" name="fees" placeholder="Enter Fees">
  </div>
  <button type="submit" name="save" id="submitbtn" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>


