<?php
include("validation.php");
?>

<html >
<head>
<title>SIS</title>


<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="styles1.css" type="text/css" />

<style type="text/css">
.login 
{
border:1px solid silver;
border-radius:10px;			
padding:30px;
width:350px;
margin-left:auto;
margin-right:auto;
margin-top:10%;
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
<!--
.style8 {font-size: 24px}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
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
      <li><a href="index.php" >HOME&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
      <li><a href="students.php" class="current">STUDENTS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
      <li><a href="admin.php">ADMIN&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
      <li><a href="contact.php" >CONTACT US&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
    </ul>
  </div>
</div>
</div>
  
  <div id="content">
<div class="login">
<h2>Enter Student Id</h2><br>
<form name="form1" method="post" id="frm1" action="studentresult.php"><br>
    <input type="text" name="sid" id="input"  placeholder='Type your Sid number' class="required number"><br><br>
<br>
  <input type="submit" name="button2" id="input" value="Search">
 
</form>
 </div>
</div>
  <div style="clear:both;"></div>
  <div>
<?php
 ?></div></div>
</body>
</html>
