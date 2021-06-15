<?php
header("content-type:application/pdf");
$fp=fopen("studentresult.php","r");
$size=filesize("studentresult.php");
echo fread($fp,$size);
?>