<?php # Script 9.6 - view_users.php #2
// This script retrieves all the records from the users table.

$page_title = 'Our Customers';
include('includes/header.html');

// Page header:
echo '<h1>Our Customers</h1>';

require('../mysqli_connect.php'); // Connect to the db.

// Make the query:
$q = "select* from customers";
$r = @mysqli_query($dbc, $q); // Run the query.

// Count the number of returned rows:
$num = mysqli_num_rows($r);

if ($num > 0) { // If it ran OK, display the records.

	// Print how many users there are:
	echo "<p>There are currently $num registered customers.</p>\n";

	// Table header.
	echo '<table width="60%">
	<thead>
	<tr>
		<th align="left">State</th>
		<th align="left">Name</th>
		<th align="left">Email</th>
		<th align="left">Customer Incidents</th>
		<th align="left">Customer Registratio</th>
	</tr>
	</thead>
	<tbody>
';

	// Fetch and print all the records:
	while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
		echo '<tr><td align="left">' . $row['state'], ['firstName'], ['lastName'], ['email']. '</td><td align="left">' . $row['dr'] . '</td></tr>
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