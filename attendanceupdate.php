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
<title>attendance</title>


<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="styles1.css" type="text/css" />
<style>
p
{
color:red;
font-size:14px;
font-family:arial;
}
.login 
{
border:1px solid silver;
border-radius:10px;			
padding:30px;
width:500px;
margin-left:auto;
margin-right:auto;
margin-top:5%;
display:table;
box-shadow:2px 2px 4px silver ;
}

<style>
input[type='submit'] 
{
float:right;				
cursor:pointer;
}

</style>
</head>
<body onload="f1()">
 <div id="wrapper">
  
  <?php
  include "Header.php";
  ?>
<div class="container" >
<div id="menucase">
  <div id="styletwo">
    <ul>
     
      <li><a href="admin.php" class="current">ADMIN&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
    </ul>
  </div><div style="cursor:pointer;">
</div>
</div>
</div>
  <a href="attendance.php"><img src=img/goback1.png onmouseover="this.src='img/goback.png';" onmouseout="this.src='img/goback1.PNG';" height="40px" width="70px"></a>

  <div  id="content1"> 
<div class="login">
<?php
include("validation.php");
if (isset($_POST['ok']))
{

$a1=$_POST['a1'];
$a3=$_POST['a3'];
$t1=$_POST['t1'];
$t2=$_POST['t2'];
if($t2<=$t1)
{
$t3=($t2/$t1)*100;	//this variable is for calculating percentage
include("connection.php");
if(mysql_query("update attendance set totalclass='$t1', attendedclass='$t2', percentage='$t3' where sid='$a1' and subcode='$a3'"))
{
echo "updated successfully";
}
else
{
echo "not updated";
}
}
else
{
echo "<p>Total attended classes must be less than or equal to total class. please insert again.</p>";
}
}
?>


<h2>Update attendance details</h2>
<table>
<form method="post" action="" id="frm1">
 <tr><td colspan="2"><hr>
<tr><td>Sid:</td><td><input name="a1" class="required number" id="input"></td></tr>
<tr><td>Subject Code:</td><td><input name="a3" class="required" id="input"></td></tr>
<tr><td>Total Class:</td><td><input name="t1" class="required number" id="input"></td></tr>
<tr><td>Total Attended:</td><td><input name="t2" class="required number" id="input"></td></tr>

<tr><td colspan="2"><hr></td></tr>
<tr><td></td><td><input type="submit" name="ok" value="Submit" id="input">
</form>

</table></div>
</div>
  <div style="clear:both;"></div>
  <div>
<?php
 ?></div></div>
</body>
</html>