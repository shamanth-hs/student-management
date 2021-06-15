<?php
session_start();
if(isset($_SESSION['lu']))
header("location:adminsection.php");
?>


<?php
include("validation.php");
?>



<html>
<title>admin login</title>	
<head>
	<style>
p
{
color:red;
font-size:20px;
font-family:arial;
}
.img1
{
border-radius:50%;
box-shadow:2px 2px 2px black;"
}
.login 
{
border:1px solid silver;
border-radius:10px;			
padding:30px;
margin-left:auto;
margin-right:auto;
margin-top:10%;
display:table;
box-shadow:2px 2px 4px silver ;
background-color:;
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
				
float:right;
cursor:pointer;
}


</style>
</head>
<body >
<div class="login">
		
<form  id="frm1" method="post" action="" >
<div style="color:#621907;" align='center' class="ab">
<img src="img/newuser.png" class="img1"><b>Admin Login</b></div><br><br>
			<input id="input" name="txtname" class="required" placeholder='Enter User Name'/><br/><br/>
		<input id="input" type="password"  name="pwd" class="required" placeholder='Password'/><br/><br/>

<input id="input"  type="submit" name="sub" value="Login"/>
</form>
</div>	
</body>
</html>

<?php
if(isset($_POST['sub']))
{
$uname=$_POST['txtname'];
$pwd=$_POST['pwd'];
include "connection.php";
$sqlstt="select * from admin_table where uname='$uname' and password='$pwd'";
$data=mysql_query($sqlstt);
if(mysql_num_rows ($data)==1)
{
session_start();
$_SESSION['lu']=true; 
header("location:adminsection.php");
}
else
{
echo "<p>Entered user name or password is incorrect. Try again</p>";
}
}
?>

