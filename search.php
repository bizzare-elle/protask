<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Validate and sanitize the data
  $taskSearch = htmlspecialchars($_POST['taskSearch']);

  try {
    // include the database connection file
    include_once 'includes/dbh.inc.php';

    // Prepare and execute the query and insert the data into the database
    $query     = 'SELECT * FROM tasks WHERE title LIKE :taskSearch OR subject LIKE :taskSearch OR description LIKE :taskSearch;';
    $statement = $pdo->prepare($query);

    $statement->bindParam(':taskSearch', $taskSearch);

    $statement->execute();

    // Fetch all the results
    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    // close the connection
    $pdo       = null;
    $statement = null;

    // You can process $results here if needed
  } catch (PDOException $error) {
    die('Query failed:' . $error->getMessage());
  };
} else {
  header('Location: ../index.php');
  exit();
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
</style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles/styles.general.css">
  <link rel="stylesheet" href="styles/search.css">
  <title>Search Task</title>
</head>
<body>
  <div class="container">
    <h1>Search Results:</h1>

    <?php

    if (empty($results)) {
      echo '<div>';
      echo '<h1>No results found</h1>';
      echo '</div>';
      ?>
      <a href="index.php"><button class="btn btn-primary">Back to Home</button></a>
      <?php
    } else {
      foreach ($results as $task) {
        echo '<div class="task">';
        echo '<h2>' . htmlspecialchars($task['title']) . '</h2>';
        echo '<p><strong>Subject:</strong> ' . htmlspecialchars($task['subject']) . '</p>';
        echo '<p><strong>Description:</strong> ' . htmlspecialchars($task['description']) . '</p>';
        echo '</div>';
        ?>
      <a href="index.php"><button class="btn btn-primary">Back to Home</button></a>
      <?php
      }
    };

    ?>

  </div>
  
</body>
</html>