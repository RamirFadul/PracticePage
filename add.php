<?php
include("conn.php");

if (isset($_POST['Save']))
	{
		$fname=$_POST['FirstName'];
		$mname=$_POST['MiddleName'];
		$lname=$_POST['LastName'];
		echo 
		$fname . " " .
		$mname . " " .
		$lname . " "
		;

		$sql="insert into tblinfo (FirstName,MiddleName,LastName)values('$fname','$mname','$lname')";
		$query=mysql_query($query);
		if($query)
		{
			header('Refresh:0; add.php');
		}
	}
?>

<form action="index.php" method="post">
<table border=1 align="center">
	<tr>
	<th colspan="2">New Student</th>
	</tr>
	<tr align="left">
	<th>First Name:</th>
	<th><input type="text" name="FirstName"></th>
	</tr>
	<tr align="left">
	<th>Middle Name:</th>
	<th><input type="text" text name="MiddleName"></th>
	</tr>
	<tr align="left">
	<th>Last Name:</th>
	<th><input type="text" text name="LastName"></th>
	</tr>
	<tr>
	<th colspan="2"><input type="submit" value="Save" name="Save"></th>
	</tr>

</table>
</form>