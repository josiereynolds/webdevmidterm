<?php # Script 3.7 - index.php #2

// This function outputs theoretical HTML
// for adding ads to a Web page.
function create_ad() {
  echo '<div class="alert alert-info" role="alert"><p>This is an add for the Midterm Exam! This is an add for the Midterm Exam! This is an add for the Midterm Exam!</p></div>';
} // End of the function definition.

$page_title = 'Welcome to Midterm!';
include('includes/header.html');

// Call the function:
create_ad();
?>

<div class="page-header"><h1>Midterm</h1></div>
<p>The midterm includes all we have learned so far. Please use accessible styles.
Your site will display data from the tech_support database. In addition to the home page, the
customer, incidents and technicians’ pages, supply additional pages to show the following
information or provide functionality:</p>

<p>1. Add two hyperlinks to the customer page (see example below). When hyperlinks are clicked:
1. Display incidents for this customer (HINT: most customers have NO incidents)
2. Display products this customer has registered for</p>

<p>2. On the technician’s page, provide an EDIT link so technician information can be updated
(NOT the ID)</p>

<?php
// Call the function again:
create_ad();

include('includes/footer.html');
?>