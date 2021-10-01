<?php

session_start();
session_unset();
setcookie ("HI","",time()-3072000, '/');

header("location:index.php");

?>