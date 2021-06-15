<?php
session_start();
if(!isset($_SESSION['lu']))
echo "<script>location='admin.php'</script>";
else
{
echo "";
}
?>

<?php
include "validation.php";
include "validation1.php";

?>


<html >
<head>
<title>searchstudent</title>


<style>
input[type='submit'] 
{
float:;				
cursor:pointer;
}
body
{
background :url(img/a.jpg);
background-repeat:no repeat;
background-size:100%;
}


#login {
			
padding:20px;
				margin-left:25%;
			margin-rigth:auto;
float:left;
width:600px;
height:400px;
				margin-top:3%;
		
border:1px solid silver;
border-radius:10px;
padding:10px;
box-shadow:2px 2px 2px silver;				
			}

#input
{
border:1px solid silver;
border-radius:10px;
padding:8px;
color:black;
}
h2
{
color:#621907;
}
option{
border-radius:10px;
color:#621907;
cursor:pointer;
}



</style>




</head>
<body onload="f1()">
 <div ><img src="img/sis.jpg" style="width:100%;height:15%;"></div>


<hr>
<a href="studentview.php" ><img src="img/goback1.png" onmouseover="this.src='img/goback.png';" onmouseout="this.src='img/goback1.PNG';" height="35px" width="65px" align="left"></a>
<a href="logs.php" ><img src=img/logout1.png onmouseover="this.src='img/logout.png';" onmouseout="this.src='img/logout1.PNG';" height="35px" width="65px" align="right" align="right"></a>
<hr><br>
<div id="login" >
<table border='1'>
<form  id="frm1" action = "searchcourse1.php" method="post">
                      <h2>Search By Student Id</h2><br>
                   
                      <input name="sid" type="text" class="required number " placeholder="Enter sid number" id="input" size="25"  /><br><br>
                      <input name="Search" type="submit" class="menu" id="input" value="Search" >
                      
            </form><br>
<hr style="color:#621907;">

<form name="form1" method="post" action="studentdetails.php">
 <h2>Search By Student Course and Course Year</h2><br>
<lable >Course&nbsp</lable>
    <select name="course" id="input">
<option value="0" selected>Select Course</option>
    <option value="MCA">MCA</option>
      <option value="MSC(CA)" >MSC(CA)</option>
      <option value="MSC(CN)">MSC(CN)</option>
</select>
 &nbsp&nbsp&nbsp
<lable>Course Year&nbsp</lable>
    <select name="cyear" id="input">
<option value="0" selected>Select Course Year</option>
    <option value="First">First</option>
      <option value="Second">Second</option>
      <option value="Third">Third</option>
</select>
<br><br>
    <input type="submit" name="button" id="input" value="Search" onclick="return validate(course,cyear)">

</form>

	
</table>

 </div>
 
</body>
</html>

































        