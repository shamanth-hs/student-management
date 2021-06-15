
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
<title>internal</title>


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
width:600px;
margin-left:auto;
margin-right:auto;
margin-top:5%;
display:table;
box-shadow:2px 2px 4px silver ;
}


#input
{
border:1px solid silver;
border-radius:10px;
padding:10px;
color:#621907;
}

input[type='submit'] 
{				
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
  <a href="internal.php"><img src=img/goback1.png onmouseover="this.src='img/goback.png';" onmouseout="this.src='img/goback1.PNG';" height="40px" width="70px" align="left"> </a>
  <div  id="content1"> 

<div class="login">
<br>
<?php
include("validation.php");
if(isset($_POST['sub']))
{
	$t1=$_POST['t1'];
	$t2=$_POST['t2'];
	$t3=$_POST['t3'];
	$t4=$_POST['t4'];
	$t5=$_POST['t5'];
	
	$t6=50;
	$t7=$t3+$t4+$t5;
	if($t7<=$t6)

	{
		include("connection.php");
		if($t7>19)
		{
		$t8='pass';
		}
		else
		{
		$t8='fail';
		}
		if(mysql_query("update internal set finternal='$t3',sinternal='$t4',assignment='$t5', tmarks='$t6', omarks='$t7', result='$t8' where sid='$t1' and subcode='$t2'"))
		{
		echo "result successfully updated.";
		}
		
	}
	else
	{
		echo "<p>You entered obtained marks more than total marks(50).insert data again</p>";
	}
}

?>


<h2>Update Marks For Internal Exam and Assignment</h2>

<table><form method="post" action="" id="frm1">
<tr><td colspan="2"><hr></td>
<tr><td>Sid:<td><input name="t1" class="required number" id="input">
<tr><td>Subject Code:<td><input name="t2" class="required" id="input">
<tr><td>First Internal Marks:<td><input name="t3" class="required number" id="input">
<tr><td>Second Internal Marks:<td><input name="t4" class="required number" id="input">
<tr><td>Assignment Marks:<td><input name="t5" class="required number" id="input">

<tr><td colspan="2"><hr></td>
<tr><td></td><td><input type="submit" name="sub" value="Submit" id="input">
</form></table>
</div>

</div>
  <div style="clear:both;"></div>
  <div>
<?php
 ?></div></div>

</body>
</html>