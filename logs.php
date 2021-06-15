<?php
session_start();
setcookie("PHPSESSID","","time()-1");
session_destroy();

header("location:admin.php");

?>


