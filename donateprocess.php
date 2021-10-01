<?php
session_start();
include("connection.php");
if(isset($_POST['amount']) && isset($_POST['email'])){
    $amount=$_POST['amount'];
    $username=$_POST['username'];
    $phone=$_POST['phone'];
    $selecttype=$_POST['selecttype'];
    $street=$_POST['street'];
    $email=$_POST['email'];
    $payment_status="pending";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn,"INSERT INTO `payment` (`name`, `email`, `street`, `selecttype`, `phone`, `amount`, `payment_status`) VALUES ('$username', '$email', '$street', '$selecttype', '$phone', '$amount', '$payment_status');");
    $_SESSION['OID']=mysqli_insert_id($conn);
}


if(isset($_POST['payment_id']) && isset($_SESSION['OID'])){
    $payment_id=$_POST['payment_id'];
    mysqli_query($conn,"update payment set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}
?>