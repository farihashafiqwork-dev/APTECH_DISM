<?php
include 'Cart.class.php'; 
include 'connect.php';
$cart = new Cart;
$redirectLoc = 'index.php'; 
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){ 

    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])){ 
        $productID = $_REQUEST['id']; //id from link to a variable

         // Get product details 
        $query = "SELECT * FROM products WHERE id = ".$productID; 
        $run = mysqli_query($con,$query);
        $row = mysqli_fetch_assoc($run); 
        $itemData = array( 
            'id' => $row['id'], 
            'name' => $row['Name'], 
            'price' => $row['price'], 
            'qty' => 1 
        ); 
 //echo $itemData["qty"];
     $insertItem = $cart->insert($itemData); 
       $redirectLoc = $insertItem?'viewCart.php':'index.php'; 
    }
    elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['id'])){ 
        // Update item data in cart 
        $itemData = array( 
            'rowid' => $_REQUEST['id'], 
            'qty' => $_REQUEST['qty'] 
        ); 
        $updateItem = $cart->update($itemData); 
         
        // Return status 
        echo $updateItem?'ok':'err';die; 
    }
    elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['id'])){ 
        // Remove item from cart 
        $deleteItem = $cart->remove($_REQUEST['id']); 
         
        // Redirect to cart page 
        $redirectLoc = 'viewCart.php'; 
    }

    else if($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0){ 
     //   echo "after";
       // $redirectLoc = 'checkout.php'; 
         
        // Store post data 
        $_SESSION['postData'] = $_POST; 
     
    
         
    
                // Insert order info in the database 
                $q="INSERT INTO orders (customer_id, grand_total, created) VALUES ('1', '".$cart->total()."', NOW())";
                $run=mysqli_query($con,$q);
                
                if($run){ 
                    $orderID = $con->insert_id; 
                     
                    // Retrieve cart items 
                    $cartItems = $cart->contents(); 
                     
                    // Prepare SQL to insert order items 
                    $sql = ''; 
                    foreach($cartItems as $item){ 
                        $sql .= "INSERT INTO order_items (order_id, product_id, quantity) VALUES ('".$orderID."', '".$item['id']."', '".$item['qty']."');"; 
                    } 
                     
                    // Insert order items in the database 
                    $insertOrderItems = $con->multi_query($sql); 
                     
                    if($insertOrderItems){ 
                        // Remove all items from cart 
                        $cart->destroy(); 
                         
                        // Redirect to the status page 
                        $redirectLoc = 'orderSuccess.php?id='.$orderID; 
                    }
                }
           
        
      //  $_SESSION['sessData'] = $sessData; 
    } 
} 
 
// Redirect to the specific page 
header("Location: $redirectLoc"); 
exit();
?>