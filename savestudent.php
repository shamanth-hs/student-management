



<?php
session_start();
$od=$_SESSION['old'];
$t1=$_POST['txt1'];
$t2=$_POST['txt2'];
$t3=$_POST['txt3'];
$t4=$_POST['txt4'];
$t5=$_POST['txt5'];
$t6=$_POST['txt6'];
$t7=$_POST['txt7'];
$t8=$_POST['txt8'];
$t9=$_POST['txt9'];
$t10=$_POST['txt10'];
$t11=$_POST['txt11'];
$t12=$_POST['txt12'];
mysql_connect("localhost","root","");
mysql_select_db("student");
$sqlstt="update student_info set firstname='$t2', middlename='$t3', lastname='$t4', course='$t5', cyear='$t6', cast='$t7', dob='$t8', gender='$t9', address='$t10', contactno='$t11', emailid='$t12' where sid='$od'";
mysql_query($sqlstt);
header("location:studentview.php");
?>