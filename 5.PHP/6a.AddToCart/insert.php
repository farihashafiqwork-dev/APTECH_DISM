<?php
include('connect.php');
if(isset($_POST["subbtn"]))
{
$n=$_POST["name"];
$image = $_FILES['image']['name'];
$imgtn=$_FILES['image']['tmp_name'];
$imgty=$_FILES['image']['type'];
$imgsi=$_FILES['image']['size'];
$folder="myimages/";
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jgpeg"){
if($imgsi<=1000000){
$path= $folder.$image;
$q="insert into members(Name,Image) values ('$n','$path')";
$result=mysqli_query($con,$q);
move_uploaded_file($imgtn,$path);
if($result)
{
echo "<script> alert('done'); window.location.href='read.php';</script>";
}
else
{
echo mysqli_error($con);
}
}
else{
echo "<script> alert('Image size error'); window.location.href='read.php';</script>";
}
}
else{
echo "<script> alert('Image format error'); window.location.href='read.php';</script>";
}
}
?>