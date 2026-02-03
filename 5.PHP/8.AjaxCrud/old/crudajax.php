<?php



if(isset($_POST['save']))
{
    include 'connection.php';
    $sname=$_POST['name'];
    $pas=$_POST['fees'];
    $query="Insert into members(Name,Password) values ('$sname','$pas')";
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