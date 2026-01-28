<?php

echo 'Hello, World! <br>';


// echo 'Hello, '.$_GET['name'];

$name = $_GET['name'] ?? 'Aliens';

echo 'Hello, '.$name;

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5 p-5 bg-light">
        <form action="" method="get">
            <input type="text" name="name" class="form-control" placeholder="name">
            <input type="password" name="password" class="form-control" placeholder="password">
            <input type="submit" value="Submit" class="btn btn-primary mt-2">
        </form>

        <div class="card">
            <div class="card-body text-bg-info text-center">
                <h1 class="card-title">
                    <?php echo 'Hello, '.$name; ?>
                </h1>
            </div>
        </div>
    </div>

  </body>
</html>