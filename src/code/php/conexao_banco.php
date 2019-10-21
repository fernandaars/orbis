<?php

$database = 'orbis';
$host = 'localhost';
$user = 'fernandaars';
$pass = 'password';


try {
    $conn = new PDO('mysql: host=localhost; dbname=orbis; charset=utf8', $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
  }
?>
