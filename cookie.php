<?php
session_start();

setcookie ("HI",$_SESSION['customer'],time()+63072000, '/');

echo "<script type='text/javascript'>  window.location='cust-index.php'; </script>";


?>
