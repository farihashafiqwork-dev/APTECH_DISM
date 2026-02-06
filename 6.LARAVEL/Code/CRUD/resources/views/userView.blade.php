<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1>User Registration Data</h1>
<div class="table-responsive" >
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>

                <th scope="col">Address</th>

                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
        @foreach($data as $v)
            <tr class="">
           
                <td scope="row">{{$v->id}}</td>
                <td>{{$v->Name}}</td>
                <td>{{$v->Email}}</td>
                <td>{{$v->Phone}}</td>

                <td>{{$v->Address}}</td>
                <!-- <td><a class="btn btn-danger" href="{{route('dlt',['id'=>$v->id])}}"></a></td> -->
                <td>
    <a class="btn btn-danger" href="{{ route('dlt', ['id' => $v->id]) }}">Delete</a>
    <a class="btn btn-success" href="{{ route('edit', ['id' => $v->id]) }}">Update</a>
</td>


            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
</body>
</html>