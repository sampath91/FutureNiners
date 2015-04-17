<?php include('header.php')?>

	<header id="head" class="secondary">
		<div class="container">
			<h1>Tution Fees</h1>
			<p>Tuition fees for the 2014-2015 academic year</p>
		</div>
	</header>

	
<div>
		<section class="container">
			<div class="row">
				<!-- Article main content -->
				<content class="maincontent"> <br>
<!-- <p id=setdept ></p>
<p id=setyear hidden></p>
-->

<?php

//$sql = "select DeptName from department order by DeptName asc";
//$result = mysqli_query ( $dbcon, $sql );

//$sql = "select Distinct RecruitedYear from companies order by RecruitedYear asc";
//$result2 = mysqli_query ( $dbcon, $sql );

include "database/db_connection.php";
$sql = "SELECT d.DeptName AS Department, p.ProgName as Program, p.Amount_Instate , p.Amount_Outstate FROM Program p JOIN Department d ON p.DeptID = d.DeptID ORDER BY d.DeptName, p.ProgName;";

$result = mysqli_query ( $dbcon, $sql );
//echo "<form>";
//echo "<h2 align = \"center\">" . $SearchDept . "</h2>";
if (mysqli_num_rows ( $result ) > 0) {
//	echo "<select id = \"Deptid\" name=\"Dept\" onchange=\"setdept(this.value)\">";
//	echo "<option value=\"\">Select a Department:</option>";
	while ( $row = mysqli_fetch_assoc ( $result ) ) {
		echo "<ul>";
		echo "<h4>" . $row ["Department"] . "</h4";
		echo "<li><h4>" . $row ["Program"] . "</h4>"; 
		echo "<li><b> " . "In-State Tuition:  " . $row ["Amount_Instate"] . "</li>";
		echo     "<li>" . "Out-of-State Tuition:  " . $row ["Amount_Outstate"]  . "</b></li>";
		echo "</ul>";
		echo "<hr>";
	}
//	echo "</select>";
} else {
	echo "<p class= \" error\"> Please contact the Admissions Department for this list. </p>";	
	}
	echo "</tbody></table>";


?>
<br>
				<div id="txtHint">
					<b>List of Companies recruited in department will be listed here...</b>


				</div>

				</content>
			</div>
		</section>
	</div>










	


<?php include("footer.php")?>