




<table>
<?php
include("connection.php");

$result1 = mysql_query("SELECT * FROM student_info where course='$_POST[course]' AND cyear='$_POST[cyear]'  ");

if(mysql_num_rows($result1) >0)
				{
echo "<h1 align='center'>Student Details</h1>";

echo <<<abc
<table border='1' align='center'>
<tr>
<th>Sid</th>
<th>Name</th>
<th>Course</th>
<th>Cyear</th>
<th>Cast</th>
<th>Dob</th>
<th>Gender</th>
<th>Address</th>
<th>Contact no</th>
<th>emailid</th>
</tr>
abc;

while($row = mysql_fetch_array($result1))
  {



  echo "<tr>";
  echo "<td>" . $row['sid'] . "</td>";
  echo "<td>" . $row['firstname']. " ". $row['middlename']  ." ". $row['lastname'] . "</td>";
  echo "<td>" . $row['course'] . "</td>";
  echo "<td>" . $row['cyear'] . "</td>";
  echo "<td>" . $row['cast'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['contactno'] . "</td>";
  echo "<td>" . $row['emailid'] . "</td>";
  echo "</tr>";


  }
}
else
			{
			echo "Course or Course Year is not available";	
			}
echo "</table>";

?>










