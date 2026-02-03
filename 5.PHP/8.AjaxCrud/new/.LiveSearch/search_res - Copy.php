<?php
include('connection.php');
@$rec_data=$_POST['keyword'];
if(isset($rec_data)){
    $q="select * from products where pro_name like '%$rec_data%'";
}
else{
    $q="select * from products";
}

$run=mysqli_query($link,$q);

?>





<?php while($data=mysqli_fetch_assoc($result)) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                    
                        <div class="card product-item border-0 mb-4">
                       
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img class="img-fluid w-100" src="../admin/<?php echo $data['pro_image']?>" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?php echo $data['cat_name']?></h6>
                                <h6 class="text-truncate mb-3"><?php echo $data['pro_name']?></h6>
                                <div class="d-flex justify-content-center">
                                    <h6><?php echo $data['pro_price']?></h6><h6 class="text-muted ml-2"><?php echo $data['pro_gram']?></h6>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                <a href="detail.php?id=<?php echo $data['pro_id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                                <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>