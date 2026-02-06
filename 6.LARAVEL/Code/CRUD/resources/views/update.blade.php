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
    <h1>update Form</h1>
    <div class="container">
    <form action="{{url('/')}}/user/update/{{$user_Data->id}}" method="POST">
        @csrf
        <!-- @if(isset($errors))
                @php
                print_r($errors);
                @endphp
            @endif -->

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">UserName</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" value="{{$user_Data->Name}}" >
      <span class="text-danger">@error('username'){{$message}}@enderror</span>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="{{$user_Data->Email}}">
      <span class="text-danger">@error('email'){{$message}}@enderror</span>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="phone" value="{{$user_Data->Phone}}" >
      <span class="text-danger">@error('phone'){{$message}}@enderror</span>

          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Address</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="{{$user_Data->Address}}">
      <span class="text-danger">@error('address'){{$message}}@enderror</span>

          </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</body>
</html>