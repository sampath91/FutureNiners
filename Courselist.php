<?php
include "database/db_connection.php";
if (isset ( $_POST ['deptname'] )) {
	$SearchDept = $_POST ['deptname'];
	
	$sql = "select CourseID, COURSE_TITLE, CREDIT_HOURS
 from courses where DeptID IN (select DeptID
from Department where DeptName = '$SearchDept');";
	$result = mysqli_query ( $dbcon, $sql );
	// echo "<table class=\"table table-striped\" summary=\"Table\" border=\"1\" cellspacing=\"2\" cellpadding=\"1\">
	// <thead><tr align=\"left\" valign=\"top\" style=\"color:Red;font-style:italic\"><th>Assistantship Name</th>
	// <th>Assistantship Type</th><th>Assistantship Duration</th><th>Professor Contact</th>
	// </tr></thead><tbody>";
	
	if (mysqli_num_rows ( $result ) > 0) {
		echo "<ul>";
		// output data of each row
		while ( $row = mysqli_fetch_assoc ( $result ) ) {

	
		echo "<li>
				<table border="0" style="width:100%">
  <tr>
    <td>$row["CourseID"]</td>
    <td>$row["Course_TITLE"]</td>		
    <td>$row["CREDIT_HOURS"]</td>
  </tr>
</table>
				
				</li>";
		}
		echo "</ul>";
	} else {
		echo "<p class= \" error\"> Sorry, No Jobs offered currently.</p>";
	}
	echo "</tbody></table>";
}
?>