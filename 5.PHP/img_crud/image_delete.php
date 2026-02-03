<?php
include("connection.php");
$id=$_GET['id'];
$d_q="DELETE FROM `images` WHERE id=$id";

$s_q="SELECT * FROM images WHERE id=$id";

$result=mysqli_query($con,$s_q);

$data=mysqli_fetch_assoc($result);

$old_path=$data['image'];

$del=mysqli_query($con,$d_q);
if($del){
    if (file_exists($old_path)) {
        unlink($old_path);
    }
    echo "<script>alert('Data deleted successfully'); window.location.href='view_image.php'; </script>";
}
else{
    echo "<script>alert('Failed to delete')</script>";
}
?>