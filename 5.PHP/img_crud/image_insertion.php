<?php    
include('connection.php');     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- enctype: This stands for "encoding type." It defines how the browser packages the form data before sending it to the server.

multipart/form-data: This is the encoding type used when a form includes file uploads. It allows the form to send not only textual data but also binary data, like images, PDFs, or any other files. -->


 <form action="" method="post" enctype="multipart/form-data" >
 <label>Image name</label>
<input type="text" name="img_name"  id="img_name"><br><br>
<input type="file" name="image" id="image">
<input type="submit" name="sub" >
</form>
  
</body>
</html>
<?php 
if (isset($_POST['sub'])){
    $img_name=$_POST['img_name'];
    $img=$_FILES['image']['name'];
    $temp_name=$_FILES['image']['tmp_name'];
    $img_type=$_FILES['image']['type'];
    $img_size=$_FILES['image']['size'];
    $folder="myimg/";
    echo $img_type;
    if($img_type=="image/png" || $img_type=="image/jpg" || $img_type=="image/jpeg"){
        if($img_size<=1000000){
        $path=$folder.$img;
        $q="insert into images(img_name,image) values ('$img_name','$path')";
        $result=mysqli_query($con,$q);
        move_uploaded_file($temp_name,$path);  // Move the uploaded file from temporary location to the desired folder
  
    if($result)
            {
            echo "<script> alert('done'); window.location.href='view_image.php'; </script>";
            }
            else
            {
            echo mysqli_error($con);
            }
            }
        
        else{
        echo "<script> alert('size should be less than 1 MB');</script>";
        }
    }
    else{
        echo "<script> alert('only jpg, png and jpeg files are allowed');</script>";
        }
        }

?>
