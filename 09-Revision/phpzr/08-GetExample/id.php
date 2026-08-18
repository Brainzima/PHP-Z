<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
  
  <div class="container mt-3">
    <div class="card col-4">
        <div class="card-header">
            ID Card Generated
        </div>
        <div class="card-body text-center">
            <img src="https://bifindr.com/placeholder/150" class="rounded-pill" alt="">
            <div class="container border mt-3">
                <div class="row">
                <div class="col">Roll No</div>
                <div class="col">:</div>
                <div class="col"><?php echo $_GET['roll'] ?></div>
            </div>
             <div class="row">
                <div class="col">Name</div>
                <div class="col">:</div>
                <div class="col"><?php echo $_GET['name'] ?></div>
            </div>
             <div class="row">
                <div class="col">Course</div>
                <div class="col">:</div>
                <div class="col"><?php echo $_GET['course'] ?></div>
            </div>
             <div class="row">
                <div class="col">Father Name</div>
                <div class="col">:</div>
                <div class="col"><?php echo $_GET['fname'] ?></div>
            </div>
             <div class="row">
                <div class="col">Mother Name</div>
                <div class="col">:</div>
                <div class="col"><?php echo $_GET['mname'] ?></div>
            </div>
             <div class="row">
                <div class="col">Address</div>
                <div class="col">:</div>
                <div class="col"><?php echo $_GET['address'] ?></div>
            </div>
            </div>
        </div>
    </div>
  </div>



  </body>
</html>