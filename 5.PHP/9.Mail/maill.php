<form method=POST action="index.php">
  <input type="submit" name="subbtn" value="Submit">
</form>



<?php
if(isset( $_POST['subbtn'])){
$to_email = 'aatikaliaquat16@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: lab1807c1@gmail.com';
mail($to_email,$subject,$message,$headers) or die("Error!");
echo "Email sent!";
}
?>