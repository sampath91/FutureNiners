<?php
include "database/db_connection.php";
if (isset ( $_GET ['q'] )) {
	$SearchDept = $_GET ['q'];
	
	$sql = "select labname, location from facilities where DeptID IN (select DeptID
		from department where DeptName = '$SearchDept')";
	$result = mysqli_query ( $dbcon, $sql );
	echo "<table class=\"table table-striped\" summary=\"Table\" border=\"1\" cellspacing=\"2\" cellpadding=\"1\">
		<thead><tr align=\"left\" valign=\"top\" style=\"color:Red;font-style:italic\"><th>Lab Name</th>
<th>Lab Location</th>
</tr></thead><tbody>";
	if (mysqli_num_rows ( $result ) > 0) {
		
		// output data of each row
		while ( $row = mysqli_fetch_assoc ( $result ) ) {
			echo "<tr align=\"left\" valign=\"top\" style=\"color:blue\"><td>" . $row ["labname"] . "</td><td>" . $row ["location"] . "</td></tr>";
		}
	} else {
		echo "<p class= \" error\"> Sorry, No Facilities available currently.</p>";
	}
	echo "</tbody></table>";
}
?>