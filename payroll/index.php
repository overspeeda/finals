<?php include('function.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="style.css">
  <title>Employee Payroll</title>
</head>

<body>


  <div class="jumbotron jumbotron-fluid bg-dark text-light text-center">
    <h1>Employee Payroll</h1>
    <a href="logout.php" style="color: red;">Log out</a>
    <?php include('errors.php'); ?>
  </div>

  <div class="container-fluid">
    <div class="row">

      <div class="col-12 col-md-3">
        <form id="employee-form" action="index.php" method="post">

          <div class="form-group">
            <label>Employee Name</label>
            <input type="text" class="form-control" placeholder="Employee Name" name="name">
          </div>

            <label>Position :</label>
                <select name="position">
                    <option>Service Crew</option>
                    <option>Crew</option>
                    <option>Cashier</option>
                </select>

          <div class="form-group">
            <label>Hours in work</label>
            <input type="text" class="form-control" placeholder="Hour in work" name="hours">
          </div>

          <div class="form-group">
            <label>Overtime</label>
            <input type="text" class="form-control" placeholder="Overtime" name="OT">
          </div>         

          <div class="form-group">
            <label>Rate</label>
            <input type="text" class="form-control" placeholder="Rate" name="rate">
          </div>

          <div class="form-group">
            <label>Bonus</label>
            <input type="text" class="form-control" placeholder="Bonus" name="bonus">
          </div>


          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          <a class="btn btn-primary" href="print.php">Print all</a>
        </form>
      </div>
      <!-- table column -->
      <div class="col-12 col-md-9">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Employee Name</th>
              <th scope="col">Role</th>
              <th scope="col">Hours In Work</th>
              <th scope="col">Overtime</th>
              <th scope="col">Rate</th>
              <th scope="col">Bonus</th>
              <th scope="col">Salary</th>
            </tr>
          </thead>
          <tbody id="employee-table">
            <?php foreach($employee as $item): ?>
            <tr>
              <th scope="col"><?php echo $item['name']; ?></th>
              <th scope="col"><?php echo $item['position']; ?></th>
              <th scope="col"><?php echo $item['hoursInWork']; ?></th>
              <th scope="col"><?php echo $item['OT']; ?></th>
              <th scope="col"><?php echo $item['rate']; ?></th>
              <th scope="col"><?php echo $item['bonus']; ?></th>
              <th scope="col"><?php echo $item['salary']; ?></th>
              <th><a href="edit_employee.php?edit=<?php echo $item['id']; ?>" class="">Edit</a></th>
              <th><a href="index.php?delete=<?php echo $item['id']; ?>" class="">Delete</a></th>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>

</html>