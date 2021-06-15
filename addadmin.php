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
<title>addadmin</title>


<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="styles1.css" type="text/css" />

<style type="text/css">
<!--
.style8 {font-size: 24px}
.style9 {font-size: 95%; font-weight: bold; color: #003300; font-family: Verdana, Arial, Helvetica, sans-serif; }
-->


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
  </div><div style="float:right;cursor:pointer;"><a href="adminview.php"><img src=img/goback1.png onmouseover="this.src='img/goback.png';" onmouseout="this.src='img/goback1.PNG';" height="40px" width="70px"> </a>
</div>
</div>
</div>
  
  <div  id="content1"><h2> Add Admin Details</h2>

<?php
include("validation.php");
include("connection.php");
if(isset($_POST["submit"]))
{
	
$sql="insert into admin_table (adminid, adminname, uname, password, contactno,email)
values
('$_POST[adminid]','$_POST[adminname]','$_POST[uname]','$_POST[password]','$_POST[contactno]','$_POST[email]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  else
  {
	  echo " Record Inserted Successfully.";
  }
}
$result = mysql_query("select * from admin_table");
while($row1 = mysql_fetch_array($result))
  {
	$adminid = $row1["adminid"]+1;
	}


?> 
<div id='login' >
<form name="form1" method="post" action="" id="frm1" >
<table cellspacing="10">
 <tr><td>
    <label for="adminid">Admin ID</label></td><td>
    <input type="text" name="adminid" id="input"   value="<?php echo $adminid; ?>">
<br></td></tr>
 <tr><td>
    <label for="adminname">Admin Name</label></td><td>
    <input type="text" name="adminname" id="input"  class="required"  >
<br></td></tr>
<tr><td>
  <label for="uname">Uname</label></td><td>
  <input type="text" name="uname" id="input"  class="required" >
<br></td></tr>
<tr><td>
  <label for="password">Password</label></td><td>
  <input type="password" name="password" id="input"  class="required" >
<br></td></tr>


<tr><td>
    <label for="contactno">Contact No</label></td><td>
    <input type="text" name="contactno" id="input"  class="required number" minlength=10 maxlength=10>
<br></td></tr>
<tr><td>
    <label for="email">Email_id</label></td><td>
    <input type="text" name="email" id="input" class="required email"  >
<br></td><tr>
<td colspan="2">
    <input type="submit" name="submit" id="b2" value="Submit">
   
</td></tr>
</form><br>
</table>
</div>


 </div>
  <div style="clear:both;"></div>
  <div>
<?php
 ?></div></div>
</body>
</html>





















