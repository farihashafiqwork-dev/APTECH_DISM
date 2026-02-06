<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>

<tr>
<th>Std Name:</th>
<th>Std Email:</th>
</tr>
@foreach($record as $pro)
<tr>
<td> {{$pro->Std_Name}} </td>
<td> {{$pro->Std_Email}} </td>
<td>
    <a href="/edit/{{ $pro->id }}">Edit</a>
    <a href="/delete/{{ $pro->id }}">Delete</a>
</td>
</tr>
@endforeach
</table> 
</body>
</html>