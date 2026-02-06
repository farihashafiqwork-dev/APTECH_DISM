<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/insert" method="post">
  @csrf
<!-- (Cross-site Request Forgery) -->
 <input type="text" name="stdname" placeholder="Student Name">
 <input type="email" name="stdemail" placeholder="Student Email">
 <input type="submit" name="ADD RECORD">
 </form>

</body>
</html>