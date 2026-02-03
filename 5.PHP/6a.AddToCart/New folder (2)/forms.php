

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.min.js">
</script>

<h2>HTML Forms</h2>

<form action="insert.php" method="POST" enctype="multipart/form-data">
  First name:<br>
  <input type="text" name="name" >
  <br>

<br><br>
   <input type="file" name="image" onChange="readURL(this)" height=50/>
<img id="proimg">
<br><br>
  <input type="submit" name="subbtn" value="Submit">
</form> 


<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#proimg')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(250)
                   .css( "visibility", "visible" );		
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script> 
