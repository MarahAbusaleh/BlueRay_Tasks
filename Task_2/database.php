<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) { //This checks if there was an error while connecting to the database.
    die("Connection failed: " . mysqli_connect_error());  //If there was a connection error, this line stops the script and displays an error message.
}
