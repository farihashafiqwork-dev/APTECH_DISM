<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<script>
$('document').ready(function(){

//fetching
load();
function load(s){
    $.ajax({
url:'search_res.php',
type:"POST",
data:{'keyword':s},
success:function(data){
$('#result').html(data)
}
    })
}
//Load function ended
$('#search_bar').keyup(function(){
var vari=$(this).val();
if(vari!=''){
    load(vari)
}
else{
    load();
}

})

//insertion

$('#btn').click(function(){
var my_username=$('#username').val();
var my_pass=$('#pwd').val();
var my_con=$('#con').val();
$.ajax({
url:'user.php',
type:"POST",
data:{
'save':1,
'name_of_user':my_username,
'pwd_of_user':my_pass,
'contact_of_user':my_con
},
dataType: 'JSON',
success:function(data){
    alert("Data succesfully inserted");
    $('#username').val('');
    $('#pwd').val('');
    $('#con').val('');
    load();
},
error:function(data){
    alert("Insertion Failed")
}
})
})
})







</script>





<div class="container">

  
    <div class="form-group">
      <label for="email">Username:</label>
      <input type="text" class="form-control" id="username" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="form-group">
      <label for="pwd">CONTACT:</label>
      <input type="text" class="form-control" id="con" placeholder="Enter password" name="pwd">
    </div>
    <button type="submit" class="btn btn-default" id="btn">Submit</button>

</div>



<h1> Data </h1>

<input type="text" placeholder="Search Here..." class="form-control" id="search_bar"/>

<div id="result"> 

</div>







</body>
</html>
