<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Validate and sanitize the data
  $title       = htmlspecialchars($_POST['title']);
  $subject     = htmlspecialchars($_POST['subject']);
  $description = htmlspecialchars($_POST['description']);

  // Check if any of the fields are empty
  if (empty($title) || empty($subject) || empty($description)) {
    header('Location: ../index.php?error=emptyfields');
    die();
  };
  try {
    // include the database connection file
    include_once 'dbh.inc.php';

    // Prepare and execute the query and insert the data into the database
    $query     = 'INSERT INTO tasks(title, subject, description) VALUES (:title, :subject, :description);';
    $statement = $pdo->prepare($query);

    $statement->bindParam(':title', $title);
    $statement->bindParam(':subject', $subject);
    $statement->bindParam(':description', $description);
    $statement->execute();

    // close the connection
    $pdo       = null;
    $statement = null;

    header('Location: ../createTask.php');
    die();
  } catch (PDOException $error) {
    die('Query failed:' . $error->getMessage());
  };
} else {
  header('Location: ../index.php');
  exit();
};
