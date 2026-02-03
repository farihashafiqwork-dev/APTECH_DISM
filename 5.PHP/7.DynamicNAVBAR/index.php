<?php

include ('dbcon.php');
include 'header.php';
$query= "select * from category";
$data= mysqli_query($conn, $query);


$query1= "select * from cakes";
$result= mysqli_query($conn, $query1);

?>



  
    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Top Selling Cakes</h1>
      </div>
<?php 
	
 if($result)
    {
       if(mysqli_num_rows($result)>0)
       {
            while($rows=mysqli_fetch_array($result))
            {
       
				$filename=$rows['c_picture'];
             $id=$rows['c_id'];
				
?>
	
   <div class="row">
  <div class="col-md-4">
 
    <!-- normal -->
    <div class="ih-item square effect1 left_and_right"><a href="#">
        <div class="img">
      <?php  
	  echo '<img src= "'.$filename.'" alt="img">';
	  
	  ?>
	  </div>
        <div class="info">
          <h3>Heading here</h3>
          <p>Description goes here</p>
        </div></a></div>
    <!-- end normal -->
 
  </div> 
    
    
    
    			
<?php             
             
             }
         }
     }
	
	
	 ?>
    

