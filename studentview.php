<?php
session_start();
if(!isset($_SESSION['lu']))
echo "<script>location='admin.php'</script>";
else
{
echo "";
}
?>

<html >
<head>
<title>studentiew</title>

<link href="style3.css" rel="stylesheet" type="text/css" />
<script>
function funclose()
{
document.getElementById('divback').style.display="none"
document.getElementById('pop').style.display="none"
}
function fundel()
{
document.getElementById('divback').style.display="block"
document.getElementById('pop').style.display="block"
}

function fun1(x)
{
location="updatestudent.php?id="+x
}


</script>

</head>

<body >

<div id="divback"></div>
<div id="pop">
<div style="float:right;cursor:pointer" onclick="funclose()">
<img src="img/delete.png">
</div>
<br><br><br><br>
<form   method="post" action="">

&nbsp
ENTER SID NO:
<input type="text" name="rn" />
		<br><br>
		<input type="submit" name="sub" value="DELETE" style="float:right;" >
	

</form>
</div>


<div ><img src="img/sis.jpg" style="width:100%;height:15%;"></div>
<div align="center">

<hr>|
<a href="addstudent.php">Add Record</a>&nbsp|&nbsp

<a href="#" onclick="fundel()">Delete</a>&nbsp|

<a href="searchcourse.php">Search</a>&nbsp|
<a href="adminsection.php"><img src="img/goback1.png" onmouseover="this.src='img/goback.png';" onmouseout="this.src='img/goback1.PNG';" height="35px" width="65px" align="left" ></a>
<a href="logs.php" ><img src=img/logout1.png onmouseover="this.src='img/logout.png';" onmouseout="this.src='img/logout1.PNG';" height="35px" width="65px" align="right"></a>
<hr>


<h1>Student Details</h1>
<div align="center">
<table border='1'>
<th style= 'background-color:pink'>Sid</th>
<th style= 'background-color:pink'>FirstName</th>
<th style= 'background-color:pink'>MiddleName</th>
<th style= 'background-color:pink'>LastName</th>
<th style= 'background-color:pink'>Course</th>
<th style= 'background-color:pink'>CourseYear</th>
<th style= 'background-color:pink'>Cast</th>
<th style= 'background-color:pink'>DOB</th>
<th style= 'background-color:pink'>Gender</th>
<th style= 'background-color:pink'>Address</th>
<th style= 'background-color:pink'>Contactno</th>
<th style= 'background-color:pink'>Email_id</th>
<th style= 'background-color:pink'>Action</th>

<?php
require'connection.php';


$rn=$_POST['rn'];

if(isset($_POST['sub']))
 {

 $del=mysql_query("DELETE FROM student_info where sid='$rn'");
mysql_query("DELETE FROM attendance where sid='$rn'");
mysql_query("DELETE FROM internal where sid='$rn'");
if($del)
{
echo "<br>";
 echo"<div  align='center' >Record Successfully Deleted</div>";
echo "<br>";
}
else
{
echo "<br>";
echo"<div  align='center' >Not Delete Your Record</div>" ;
echo "<br>";
}
 }
?>

<?php

 require'connection.php';

$a=mysql_query("select * from student_info");
$count=0;
while($rec=mysql_fetch_row($a))
{
if($count%2==0)
$color="lightgreen";
else
$color="lightblue";
$count++;
echo "<tr style='background-color:$color'><td>$rec[0]<td>$rec[1]<td>$rec[2]<td>$rec[3]<td>$rec[4]<td>$rec[5]<td>$rec[6]<td>$rec[7]<td>$rec[8]<td>$rec[9]<td>$rec[10]<td>$rec[11]<td><input type='button' value='Update' style='cursor:pointer' onclick=fun1('$rec[0]')>";
}
?>
</table>

</div>
</div>
</body>
</html>




