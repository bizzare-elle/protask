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
  <link rel="stylesheet" href="styles/create.css">
  <title>Create Task</title>
</head>
<body>
  <div class="container">
   <h1>Create <span class="tag">Task</span></h1>
   <span>Fill-out each field to add new task to your protask!</span>

   <div class="container">
      <form action="includes/createTask.inc.php" method="POST">
          <label class="form-label" for="title">Title</label>
          <input type="text" name="title" class="form-control" placeholder="Enter task title" >
          <label class="form-label" for="subject">Subject</label>
          <input type="text" name="subject" class="form-control" placeholder="Enter task subject" >
          <label class="form-label" for="description">Description</label>
          <textarea type="text" name="description" class="form-control" placeholder="Enter task description" rows="5"></textarea>
          <button class="btn btn-primary" type="submit">Add Task</button>
      </form>

   </div>
  </div>
</body>
</html>