
  <?php
include("validation.php");

  if(isset($_POST["name"]))
  {
  include("connection.php");
$sql="insert into contact (name, emailid, contactno, subject, message) VALUES ('$_POST[name]','$_POST[email]','$_POST[contact]','$_POST[subject]','$_POST[message]')";
if (!mysql_query($sql,$con))
  {
  die('Error in mysql: ' . mysql_error());
  }
  else
  {
echo "Mail sent Successfully...";
  }
  }
  else
  {
	  ?>
  <head>

<style>
#textarea
{
border:1px solid silver;
border-radius:10px;
padding:10px;
color:black;
}
input[type='submit'] 
{
				

cursor:pointer;
}
</style>
</head>
<body  onload="f1()">

<div id='login' >
<table cellspacing="10">
<form id="frm1"  method="post" action="" name="form1">
<tr><td>
<input type="text" id="input" name="name"  class="required"  placeholder="Your Name" size=40><br></td></tr>
<tr><td>
<input id="input" name="email"  type="email" class="required email" placeholder="Your Email" size=40><br></td></tr>
<tr><td>
<input  name="contact"    id="input"  class="required number" size=40 minlength=10 maxlength=10 placeholder="Contact number"><br></td></tr>
<tr><td>
<input type="text" id="input" name="subject" class="required" size=40 placeholder="Subject"><br></td></tr>
<tr><td>
<textarea id="textarea"name="message" class="required" rows=8 cols=30 placeholder="Write your message here..."></textarea><br></td>

<tr><td >
<input id="input" type="submit" value="Send" name="sub" ><br><br></td></tr>
</form>
</table>
</div>

</body>
<?php
  }
  ?>
