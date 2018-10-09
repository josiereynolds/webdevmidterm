<?php # Script 9.6 - view_users.php #2
// This script retrieves all the records from the users table.

$page_title = 'All Open Incidents';
include('includes/header.html');

// Page header:
echo '<h1>All Open Incidents</h1>';

require('../mysqli_connect.php'); // Connect to the db.

// Make the query:
$q = "select * from incidents";
$r = @mysqli_query($dbc, $q); // Run the query.

// Count the number of returned rows:
$num = mysqli_num_rows($r);

if ($num > 0) { // If it ran OK, display the records.


	// Table header.
	echo '<table width="60%">
	<thead>
	<tr>
		<th align="left">Tech Name</th>
		<th align="left">Incident ID</th>
		<th align="left">Title</th>
		<th align="left">Product Code</th>
		<th align="left">Date Opened</th>
	</tr>
	</thead>
	<tbody>
';

	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<tr><td align="left">' . $row['firstName'], ['lastName'], ['incidentID'], ['title'], ['productCode'], ['dateOpened'] . '</td><td align="left">' . $row['dr'] . '</td></tr>
		';
	}

	echo '</tbody></table>'; // Close the table.

	mysqli_free_result ($r); // Free up the resources.

} else { // If no records were returned.

	echo '<p class="error">There are currently no registered users.</p>';

}

mysqli_close($dbc); // Close the database connection.

include('includes/footer.html');
?>