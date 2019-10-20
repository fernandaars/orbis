<?php

$database = 'orbis';
$host = 'localhost';
$user = 'ketlynsena';
$pass = NULL;


try {
    $conn = new PDO('mysql: host=localhost; dbname=orbis; charset=utf8', 'ketlynsena', NULL);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }


?>
