<?php
// Basic connection settings
$databaseHost = 'db';
$databaseUsername = 'dev';
$databasePassword = 'internal';
$databaseName = 'rolodex';

// Connect to the database
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
