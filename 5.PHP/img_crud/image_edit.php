<?php
// Include the database connection file
include("connection.php");

// Get the ID from the URL
$id = $_GET['id'];

// Fetch the specific image record from the database
$q = "SELECT * FROM `images` WHERE id=$id";
$row = mysqli_query($con, $q);

// Fetch the data as an associative array
$data = mysqli_fetch_assoc($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Image</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <label>Current Image Name:</label>
    <input type="text" name="img_name" value="<?php echo $data['img_name']; ?>"><br><br>

    <label>Current Image:</label><br>
    <img src="<?php echo $data['image']; ?>" width="150"><br><br>

    <label>Upload New Image (optional):</label>
    <input type="file" name="new_image"><br><br>

    <input type="submit" name="update" value="Update Image">
</form>

</body>
</html>

<?php
if (isset($_POST['update'])) {
    $new_name = $_POST['img_name'];
    $new_img = $_FILES['new_image']['name'];
    $temp_name = $_FILES['new_image']['tmp_name'];
    $img_type = $_FILES['new_image']['type'];
    $img_size = $_FILES['new_image']['size'];
    $folder = "myimg/";

    // Case 1: New image uploaded
    if (!empty($new_img)) {
        if ($img_type == "image/png" || $img_type == "image/jpg" || $img_type == "image/jpeg") {
            if ($img_size <= 1000000) {
                $path = $folder . $new_img;
                $old_path = $data['image'];

                // Update name and new image path in DB
                $update_query = "UPDATE `images` SET img_name='$new_name', image='$path' WHERE id=$id";
                $update_result = mysqli_query($con, $update_query);

                if ($update_result) {
                    // Delete old image
                    if (file_exists($old_path)) {
                        unlink($old_path);
                    }

                    // Upload new image
                    move_uploaded_file($temp_name, $path);

                    echo "<script>alert('Image updated successfully'); window.location.href='view_image.php';</script>";
                } else {
                    echo "<script>alert('Error updating image');</script>";
                    echo mysqli_error($con);
                }
            } else {
                echo "<script>alert('Size should be less than 1 MB');</script>";
            }
        } else {
            echo "<script>alert('Only jpg, png, and jpeg files are allowed');</script>";
        }
    } 
    // Case 2: Only name is updated
    else {
        $update_query = "UPDATE `images` SET img_name='$new_name' WHERE id=$id";
        $update_result = mysqli_query($con, $update_query);

        if ($update_result) {
            echo "<script>alert('Image name updated successfully'); window.location.href='view_image.php';</script>";
        } else {
            echo "<script>alert('Error updating image name');</script>";
            echo mysqli_error($con);
        }
    }
}
?>
