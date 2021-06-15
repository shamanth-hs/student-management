<?php
$con = mysql_connect("localhost","root","root","student");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("student", $con);
?>
