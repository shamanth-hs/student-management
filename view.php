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
<title>viewmessage</title>

<link href="style3.css" rel="stylesheet" type="text/css" />
<style>

</style>
</head>
<body>
<hr>
<a href="contactview.php"><img src="img/goback1.png" onmouseover="this.src='img/goback.png';" onmouseout="this.src='img/goback1.PNG';" height="35px" width="65px" align="left"></a>
<a href="logs.php" ><img src=img/logout1.png onmouseover="this.src='img/logout.png';" onmouseout="this.src='img/logout1.PNG';" height="35px" width="65px" align="right"></a>
<hr>
<div align='center'>
<?php
session_start();
$qs=$_REQUEST['id'];
include("connection.php");

$data=mysql_query("select * from contact where cid='$qs' ");
$rec=mysql_fetch_row($data);
$_SESSION['old']=$rec[0];
echo <<<abc
<form method="post" action="view.php" >

<table  cellspacing="5" border='1' width="500">
 
 <tr>
    <td width="319" height="39">&nbsp; <strong>Name: </strong> $rec[1]</td>
  </tr>
  <tr>
    <td height="36">&nbsp; <strong>Email ID: </strong> $rec[2] </td>
  </tr>
  <tr>
    <td height="33">&nbsp; <strong>Contact No:</strong> $rec[3]</td>
  </tr>
  <tr>
    <td height="35">&nbsp; <strong>Subject: </strong> $rec[4] </td>
  </tr>
  <tr>
    <td height="338" valign="top"><br>&nbsp; <strong>Message: </strong> $rec[5] </td>
  </tr>
</table>
</form>
abc;
?>

</div>
</body>
</html>