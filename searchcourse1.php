		
			

<?php





			$sid=$_POST['sid'];
			
	
			
			include("connection.php");
			
			$Query="SELECT * from student_info where sid LIKE '%$sid%' order by sid ";
			$dbresult=mysql_query($Query);

			



			if(mysql_num_rows($dbresult) >0)
				{
echo "<h1 align='center'>Student Details</h1>";
echo "<table border='1' align='center'>";
echo "              <tr >";
echo "                 <td >Sid No</td>";
echo "                 <td>Firstname</td>";
echo "                 <td>Middlename</td>";
echo "                 <td>LastName</td>";
echo "                 <td>Course</td>";
echo "                 <td>Cyear</td>";
echo "                 <td>Cast</td>";
echo "                 <td>Dob</td>";
echo "                 <td>Gender</td>";
echo "                 <td>Address</td>";
echo "                 <td>Contactno</td>";
echo "                 <td>Email_id</td>";
echo "               </tr>";
					while($rec=mysql_fetch_row($dbresult))
					{


				echo "<tr style='background-color:$color'><td>$rec[0]<td>$rec[1]<td>$rec[2]<td>$rec[3]<td>$rec[4]<td>$rec[5]<td>$rec[6]<td>$rec[7]<td>$rec[8]<td>$rec[9]<td>$rec[10]<td>$rec[11]</tr>";
                



		
				
				}
			  

				}	
				
			
			else
			{
			echo "Student Id is not available";	
			}
	
			echo"</table>";
			?>
