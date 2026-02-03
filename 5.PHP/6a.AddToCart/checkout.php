<?php 
// Include the database config file 
require_once 'connect.php'; 
 
// Initialize shopping cart class 
include_once 'Cart.class.php'; 
$cart = new Cart; 
 
// If the cart is empty, redirect to the products page 
// if($cart->total_items() <= 0){ 
//     header("Location: index.php"); 
// } 
 
// // Get posted data from session 
// $postData = !empty($_SESSION['postData'])?$_SESSION['postData']:array(); 
// unset($_SESSION['postData']); 
 
// // Get status message from session 
// $sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:''; 
// if(!empty($sessData['status']['msg'])){ 
//     $statusMsg = $sessData['status']['msg']; 
//     $statusMsgType = $sessData['status']['type']; 
//     unset($_SESSION['sessData']['status']); 
// } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Checkout - PHP Shopping Cart Tutorial</title>
<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1>CHECKOUT</h1>
    <div class="col-12">
        <div class="checkout">
            <!-- <div class="row">
                <?php if(!empty($statusMsg) && ($statusMsgType == 'success')){ ?>
                <div class="col-md-12">
                    <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                </div>
                <?php } else if(!empty($statusMsg) && ($statusMsgType == 'error')){ ?>
                <div class="col-md-12">
                    <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
                </div>
                <?php } ?> -->
				
                <div class="col-md-12 order-md-12 mb-12">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your Cart</span>
                        <span class="badge badge-secondary badge-pill"><?php echo $cart->total_items(); ?></span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php 
                        if($cart->total_items() > 0){ 
                            //get cart items from session 
                            $cartItems = $cart->contents(); 
                            foreach($cartItems as $item){ 
                        ?>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                                <small class="text-muted"><?php echo '$'.$item["price"]; ?>(<?php echo $item["qty"]; ?>)</small>
                            </div>
                            <span class="text-muted"><?php echo '$'.$item["subtotal"]; ?></span>
                        </li>
                        <?php } } ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong><?php echo '$'.$cart->total(); ?></strong>
                        </li>
                    </ul>
                    <a href="index.php" class="btn btn-block btn-info">Add Items</a>
                </div>
                            </div></div>
<br>
                <form method="post" action="cartAction.php">
                <input type="hidden" name="action" value="placeOrder"/>
                        <input class="btn btn-success btn-lg btn-block" type="submit" name="checkoutSubmit" value="Place Order">
                    </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>