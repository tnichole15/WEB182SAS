<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$DB_SERVER = 'localhost';
$DB_USER = 'sally';
$DB_PASS = 'somepa55word';
$DB_NAME = 'salamanders';

// 1. Create a database connection
$connection = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASS, $DB_NAME); 

// Test if connection succeeded
if(mysqli_connect_errno()) {
  $msg = "Database connection Failed: ";
  $msg .= mysqli_connect_errno() . ")";
  $msg .= " (" . mysqli_connect_errno() . ")";
  exit($msg);
} 

// 2. Perform database query
$query = "SELECT * FROM salamanders";
$result_set = mysqli_query($connection, $query);

// Test if query succeeded
if (!$result_set) {
  exit("Database Query failed.");
}

// 3. Use returned data (if any)
while($salamander = mysqli_fetch_assoc($result_set)) {
  echo $salamander["name"] . " <br>";
}

// 4. Release returned data
mysqli_free_result($result_set);

// 5. Close database connection
mysqli_close($connection);

?>
