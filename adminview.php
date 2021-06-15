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
<title>adminview</title>


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
</div><div style="float:right;cursor:pointer; "><a href="adminsection.php"><img src=img/goback1.png onMouseOver="this.src='img/goback.png';" onMouseOut="this.src='img/goback1.PNG';" height="40px" width="70px"> </a>
</div>
</div>
  
  <div  id="content1" ><h2>Admin Details</h2></br>
<?php

include("connection.php");
if($_GET["view"] == "delete")
{
mysql_query("DELETE FROM admin_table WHERE adminid ='$_GET[did]'");
}
$a = mysql_query("SELECT * FROM admin_table");
?>
<div align="center" id="login">
<table border='1'>
<th style= 'background-color:pink'>&nbsp;</th>
<th style= 'background-color:pink'>Adminid</th>
<th style= 'background-color:pink'>Adminname</th>
<th style= 'background-color:pink'>Uname</th>
<th style= 'background-color:pink'>Contactno</th>
<th style= 'background-color:pink'>Email_id</th>


<?php

while($rec=mysql_fetch_row($a))
{
echo "<tr style='background-color:pink'>";
echo "<td>&nbsp;";
 ?>
<a href='adminview.php?did=<?php echo $rec[0]; ?>&view=delete' style='float:right;'><img src='img/delete.png'  title='delete'   onclick="return confirm('Are you sure?')"/></a>
 
 
<?php
echo  " </td>";
echo "<td>$rec[0]<td>$rec[1]<td>$rec[2]<td>$rec[4]<td>$rec[5]";

} 
?>

</table>
</br></br>
<a href="addadmin.php" style="color:purple;font-size:20px;">Add New Admin </a>
</div>

 </div>
  <div style="clear:both;"></div>
  <div>
<?php
 ?></div></div>
</body>
</html>









