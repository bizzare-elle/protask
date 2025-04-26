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
  <title>ProTask</title>
</head>
<body>
  <div class="container">
  <h1>Pro<span class="tag">Task</span></h1>
  <span>Welcome to <span class="tag">ProTask!</span> The best task manager.</span>

  <a href="createTask.php" method="GET"><button class="btn btn-primary">Get Started</button></a>
  </div>

  <div class="container">
    <form class="search-form" action="search.php" method="POST">
      <label class="form-label" for="taskSearch">Search for a task:</label>
      <input type="text" name="taskSearch" class="form-control" placeholder="Search..." >
      <button class="btn btn-primary">Seach</button>
    </form>

  </div>
</body>
</html>