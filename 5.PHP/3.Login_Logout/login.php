state Management? state lost while postback(define postback)
need?
solution:
session and cookies
24 mins

<form action="" method="POST">
  User name: <br>
  <input type="text" name="name">
  <br>
   password :<br>
  <input type="text" name="pass">
  <br>
  <input type="submit" name="login" value="Submit">
</form> 


<?php
session_start();
if(isset($_POST['login']))
{
$un=$_POST['name'];
$pas=$_POST['pass'];
$q="select * from admin where User_Name='$un' && Password='$pas'";
$run=mysqli_query($con,$q);
$f=mysqli_fetch_assoc($run);
$myid=$f['Id'];
$img=$f['Image'];
if($run)
{
	$row=mysqli_num_rows($run);
	if($row>0){
		echo "<script>alert('Logged in'); window.location.href='home.php'</script>";
		$_SESSION['AUN']=$un;
		$_SESSION['AUI']=$myid;
		$_SESSION['I']=$img;
	}
	else{
		echo "<script>alert('failed') </script>";
		}
}

}

?>
