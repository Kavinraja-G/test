<html>
<body>
<?php

$user = "kavin";
$pass = "mypassword";
$database = "student";
$mysqli = new mysqli("127.0.0.1", $user, $pass, $database);

$query = "SELECT * FROM student_details";
echo '<table border="1" cellspacing="2" cellpadding="2">
     <tr>
	<td> <font face="Arial">Student ID</font> </td>
	<td> <font face="Arial">Name</font> </td>
	<td> <font face="Arial">Email</font> </td>
	<td> <font face="Arial">Department</font> </td>
	<td> <font face="Arial">Mobile</font> </td>
     </tr>';

$result = $mysqli->query($query);
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		$field1name = $row["student_id"];
		$field2name = $row["name"];
		$field3name = $row["email"];
		$field4name = $row["department"];
		$field5name = $row["phone"];

		echo '<tr>
			<td>'.$field1name.'</td>
			<td>'.$field2name.'</td>
			<td>'.$field3name.'</td>
			<td>'.$field4name.'</td>
			<td>'.$field5name.'</td>
			</tr>';
	}
	$result->free();
}

?>
</body>
</html>