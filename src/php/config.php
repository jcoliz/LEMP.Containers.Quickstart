<?php
// Basic connection settings
$databaseHost = getenv("MARIADB_HOST");
$databaseUsername = getenv("MARIADB_USER");
$databasePassword = getenv("MARIADB_PASSWORD");
$databaseName = getenv("MARIADB_DATABASE");

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

file_put_contents('php://stdout', 'Connected!');