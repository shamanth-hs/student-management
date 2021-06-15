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
<script>
function funview(x)
{
location="view.php?id="+x
}
</script>


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
  
  <div  id="content1" align="center" ><h2>Contact: Inbox</h2></br>
<?php

include("connection.php");
if($_GET["view"] == "delete")
{
mysql_query("DELETE FROM contact WHERE cid ='$_GET[did]'");
}
$a = mysql_query("SELECT * FROM contact");
?>
<div  id="login">
<table border='1' width="500">
<th style= 'background-color:pink'>&nbsp;</th>

<th style= 'background-color:pink'>Name</th>
<th style= 'background-color:pink'>Email_id</th>
<th style= 'background-color:pink'>Action</th>



<?php

while($rec=mysql_fetch_row($a))
{
echo "<tr style='background-color:pink'>";
echo "<td>&nbsp;";
 ?>
<a href='contactview.php?did=<?php echo $rec[0]; ?>&view=delete' style='float:right;'><img src='img/delete.png'  title='delete'   onclick="return confirm('Are you sure?')"/></a>
 
 
<?php
echo  " </td>";
echo "<td>$rec[1]<td>$rec[2]<td ><input type='button' value='view' style='cursor:pointer;' onclick=funview('$rec[0]')>";

} 
?>

</table>


</div>

</div> 
  <div style="clear:both;"></div>
  <div>
<?php
 ?></div></div>
</body>
</html>









