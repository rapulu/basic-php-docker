<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'database');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'example');
define('DB_NAME', 'app_db');

try {
  $dbh = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD);
  print("Database connection successful");
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}