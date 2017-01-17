<?php
include('conn.php');
?>
<table cellpadding="5" cellspacing="0" border="1">
	<tr>
		<th>Student ID</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Action</th>
	</tr>
<?php
$sql    = "select * from tblinfo";
$result = $con->query($sql);

if($result->num_rows > 0)

	$i=1;
		while($row = mysqli_fetch_array($result)) {
			echo "
				<tr>
					<th>" . $row['StudentID'] . "</th>
					<th>" . $row['FirstName'] . "</th>
					<th>" . $row['MiddleName'] . "</th>
					<th>" . $row['LastName'] . "</th>
					<th>
					<a href=\"#\">Edit</a> |
					<a href=\"#\">Delete</a>
					</th>
				</tr>
			";
		}
?>	
<tr>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th>&nbsp;</th>
<th><a href="add.php">Add New</a></th>
</tr>
</table>