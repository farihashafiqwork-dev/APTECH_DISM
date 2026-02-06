<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Update Data</h1>
    <form action="/update" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$editdata->id}}"><br><br>
        <input type="text" name="stdname" value="{{$editdata->Std_Name}}"><br><br>
        <input type="email" name="stdemail" value="{{$editdata->Std_Email}}"><br><br>
        <input type="submit" value="Update Data">
    </form>

</body>
</html>