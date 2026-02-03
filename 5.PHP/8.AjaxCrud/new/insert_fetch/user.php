<?php
if(isset($_POST['save']))
{
    include 'connection.php';
    $sname=$_POST['name_of_user'];
    $cons=$_POST['contact_of_user'];
    $pas=$_POST['pwd_of_user'];
    $query="INSERT INTO `users`(`username`, `password`, `contact`) VALUES ('$sname','$cons','$pas')";
    $result=mysqli_query($link,$query);
    if($result){
$data = array();
$data['status'] = 'success';
       echo json_encode($data);
    }
    else{
$data = array();
$data['status'] = 'error';
       echo json_encode($data);
    }
    mysqli_close($link);
    exit();
}

?>