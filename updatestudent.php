<?php
session_start();
if(!isset($_SESSION['lu']))
echo "<script>location='index.php'</script>";
else
{
echo "";
}
?>
<html >
<head>
<title>updatestudent</title>

<link href="style3.css" rel="stylesheet" type="text/css" />

<style>
input[type='submit'] 
{
float:right;				
cursor:pointer;
}
</style>
</head>

<body>
 <div ><img src="img/sis.jpg" style="width:100%;height:15%;"></div>
<hr>
<a href="studentview.php"><img src="img/goback1.png" onmouseover="this.src='img/goback.png';" onmouseout="this.src='img/goback1.PNG';" height="35px" width="65px" align="left"></a>
<a href="logs.php" ><img src=img/logout1.png onmouseover="this.src='img/logout.png';" onmouseout="this.src='img/logout1.PNG';" height="35px" width="65px" align="right"></a>
<hr>
<div>
<h1>Update Student Details</h1> 
<div id='login' >
<?php
include("connection.php");
session_start();
$qs=$_REQUEST['id'];
$data=mysql_query("select * from student_info where sid='$qs'");
$rec=mysql_fetch_row($data);
$_SESSION['old']=$rec[0];
echo <<<abc
<form method="post" action="savestudent.php" >

<table cellspacing="5">
 
 <tr><td>
    <label for="firstname">First Name</label></td><td>
    <input type="text" value=$rec[1] name="txt2" id="input"   >
<br></td></tr>
<tr><td>
  <label for="middlename">Middle Name</label></td><td>
  <input type="text" value=$rec[2] name="txt3" id="input"   >
<br></td></tr>
<tr><td>
  <label for="lastname">Last Name</label></td><td>
  <input type="text" value=$rec[3] name="txt4" id="input" >
<br></td></tr>
<tr><td>
  <label for="course"> Course</label></td><td>
<input value=$rec[4] name="txt5" id="input"><br></td></tr>
<tr><td>
  <label for="cyear">Course Year</label></td><td>
  <input value=$rec[5] name="txt6" id="input">
<br></td></tr>
<tr><td>
  <label for="cast">Cast</label></td><td>
  <input value=$rec[6] name="txt7" id="input">
<br></td></tr>
<tr><td>
    <label for="dob">Date of Birth</label></td><td>
    <input type="date" value=$rec[7] name="txt8" id="input"  >
<br></td></tr>
<tr><td>
    <label for="gender">Gender</label></td><td>  
<input value=$rec[8] name="txt9" id="input"><br></td></tr>
<tr><td>
    <label for="address">Address</label></td><td>
    <input value=$rec[9] name="txt10" id="input">
<br></td></tr>
<tr><td>
    <label for="contactno">Contact No</label></td><td>
    <input type="text" value=$rec[10] name="txt11" id="input"   minlength=10 maxlength=10>
<br></td></tr>
<tr><td>
    <label for="email">Email_id</label></td><td>
    <input type="email" value=$rec[11] name="txt12" id="input" >
<br></td><tr >
<td colspan="2">
    <input type="submit" name="submit" id="input" value="Save">
   </td></tr>
<br>
</table>
</form>
abc;
?>
 </div>
 
</body>
</html>





















