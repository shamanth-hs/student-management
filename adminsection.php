<?php
session_start();
if(!isset($_SESSION['lu']))
header("location:admin.php");
else
{
echo "";
}
?>
<html >
<head>
<title>SIS</title>


<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="styles1.css" type="text/css" />

<style type="text/css">
<!--
.style8 {font-size: 24px}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->
</style>
</head>
<body>
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
  </div>
</div><div style="float:right;cursor:pointer;"><a href="logs.php" ><img src=img/logout1.png onMouseOver="this.src='img/logout.png';" onMouseOut="this.src='img/logout1.PNG';" height="40px" width="70px"></a></div>
</div>
  
  <div  id="content1">
    <?php
 include "adminmenu.php";
 ?>
 </div>
  <div style="clear:both;"></div>
  <div>
<?php
 ?></div></div>
</body>
</html>
