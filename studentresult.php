<?php 
include("connection.php");
if(isset($_GET['resid']))
{
$rid =	$_GET['resid'];

}
else
{
	$rid =	$_POST['sid'];
}
$result= mysql_query("SELECT * FROM student_info where sid='$rid' ");
$result1= mysql_query("SELECT * FROM internal where sid='$rid'");
$result2= mysql_query("SELECT * FROM attendance where sid='$rid'");

 while($row1 = mysql_fetch_array($result))
  {
	  $sidno = $row1['sid'];
	  $name = $row1['firstname'] . " " . $row1['middlename']. " " .$row1['lastname'] ;
	  $course = $row1['course'];
	  $courseyear = $row1['cyear'];
	  $dob = $row1['dob'];
	 
	  
  }
?>

<html>
<head>

<title>studentResult</title>

<style>


#login 
{

padding:20px;
margin-left:3%;
margin-rigth:auto;
float:left;
width:750px;
margin-top:3%;
dispaly:table;
border:1px solid #621907;
border-radius:10px;
padding:10px;
box-shadow:2px 2px 2px #621907;				
}
p
{
color:#621907;
font-size:20px;
font-weight:bold;
}
td
{
color:ligthblue;
font-size:20px;
}

</style>
</head>

<body >
<div id="login" >

<form name="form1" method="post" action="">

  <p>
    <label>Sid No:&nbsp&nbsp&nbsp </lable> <?php echo $sidno; ?>
 
  
  <p>
    <label >Name:&nbsp&nbsp&nbsp</label> <?php echo $name; ?>
  </p>
  <p>
    <label >Course</label>
:  <?php echo $course; ?> </p>
<p>
    <label >Course Year</label>
    :  <?php echo $courseyear; ?>
  </p>
  
  <p>
    <label >Date Of Birth</label>
    :  <?php echo $dob; ?>
  </p>

<hr>
<p>Internal Result</p>
  <table width="700" height="" border="1">
    <tr>
      <td width="100">Subcode</td>
      <td width="100">First Internal Marks</td>
      <td width="150">Second Internal Marks</td>
<td width="100">Assignment Marks</td>
<td width="100">Total Marks</td>
<td width="80">Obtained Marks</td>
      <td width="70">Result</td>
    </tr>
    
       
     <?php
     while($row3 = mysql_fetch_array($result1))
  {?>
    <tr>
      <td>&nbsp;<?php echo $row3['subcode']; ?> </td>
      <td>&nbsp;<?php echo $row3['finternal']; ?> </td>
       <td>&nbsp;<?php echo $row3['sinternal']; ?> </td>
       <td>&nbsp;<?php echo $row3['assignment']; ?> </td>
       <td>&nbsp;<?php echo $row3['tmarks']; ?> </td>
       <td>&nbsp;<?php echo $row3['omarks']; ?> </td>
      <td>&nbsp;<?php echo $row3['result']; ?> </td>

    </tr>
    <?php
  }
  ?>
</table>
    



<hr>
<p>Attendance Report</p>
  <table width="486"  border="1">
    <tr>
      <td width="60" height="45">Subcode</td>
      <td width="75">Total Classes</td>
      <td width="104">Attended Classes</td>
      <td width="75">Percentage</td>
    </tr>
    <?php
     while($row4 = mysql_fetch_array($result2))
  {?>
    <tr>
      <td>&nbsp;<?php echo $row4['subcode']; ?></td>
      <td>&nbsp;<?php echo $row4['totalclass']; ?> </td>
      <td>&nbsp;<?php echo $row4['attendedclass']; ?> </td>
       <td>&nbsp;<?php echo $row4['percentage']; ?> </td>

    </tr>
    <?php
  }
  ?>
    
  </table>

</form>
</div>
</body>
</html>
