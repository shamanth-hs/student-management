
<?php

if(!isset($_SESSION['lu']))
echo "<script>location='admin.php'</script>";
else
{
echo "";
}
?>

<head>
<link rel="stylesheet" href="styles2.css" type="text/css" />
</head>
<body>
    <h2>Admin Menu</h2>
<hr />
<div class="scroll" >
    <div id="menu" >
  <ul>
    
    <li><a href="studentview.php">Add Student</a></li><hr />
    <li><a href="internal.php">Examination</a></li><hr />
    <li><a href="attendance.php">Attendance</a></li><hr />
<li><a href="adminview.php">Add Admin</a></li><hr />
    <li><a href="contactview.php">Inbox</a></li><hr />

    
    
  </ul><br>

</div>
</div>
</body>