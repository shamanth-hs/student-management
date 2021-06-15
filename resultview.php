
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
      
      <li><a href="admin.php">ADMIN&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</li>
    </ul>
  </div>
</div>
</div>
  
  <div id="content1">
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
  <div style="clear:both;"></div>
  <div>
<?php
 ?></div></div>
</body>
</html>
