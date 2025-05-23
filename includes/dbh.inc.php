<?php

$dsn        = 'mysql:host=localhost;dbname=protask';
$dbusername = 'root';
$dbpassword = '';

try {
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
  echo 'Connection failed: ' . $error->getMessage();
};
