                                   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<script>
    $('document').ready(function()
    {
        $('#submitbtn').click(function(){
            var nae=$('#SName').val();
            var fs=$('#SFees').val();
            $.ajax({
                url:'crudajax.php',
                type:"POST",
                data:{
                    'save':1,
                    'name':nae,
                    'fees':fs
                },
 dataType    :   'JSON',
                success:function(data)
{
                    alert(data.status);
                    $('#SName').val('');
                    $('#SFees').val('');
                },
                error:function()
                {
                    alert("Failed");
                }
            })
        })
    })
</script>
<div class="container" style="margin-top:30px">

  <div class="form-group">
    <label for="SName">Enter Name</label>
    <input type="text" class="form-control" name="sname" id="SName" placeholder="Enter Name">
  </div>
<div class="form-group">
    <label for="SFees">Enter Password</label>
    <input type="text" class="form-control" id="SFees" name="sfees" placeholder="Enter Fees">
  </div>
  <button type="submit" name="sub" id="submitbtn" class="btn btn-primary">Submit</button>

</div>
</body>
</html>