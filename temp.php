<?php
include("../connection.php");
if(isset($_GET['id']))
{
    $idd=$_GET['id'];
    $id="UPDATE ORDERS SET delivery_status='delivered' WHERE order_id='$idd'";
    $query=mysqli_query($conn,$id);
    if($query)
    {
        echo "<script>alert('Delivery status updated')</script>";
         echo "<script>window.open('orders.php','_self')</script>";
    }
    else
    
    {
       echo "<script>alert('Something went wrong,please try again')</script>"; 
    }
}





?>