<table>
<?php
include 'connection.php';

$query="DESCRIBE student_info";
$result=mysql_query($query);
$row=mysql_num_rows($result);
echo "<table><tr><th>column</th><th>type</th><th>null</th><th>Key</th></tr>";

 $row=mysql_fetch_row($result);
echo "<tr>";
echo"<td>$row[$result]</td>";
echo "</tr>";


?>
</table>