<?php include('function.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
    <link rel="stylesheet" href="style.css">
    <title>Edit Employee</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
      <!-- Form column -->
      <div class="col-12 col-md-3">
        <form id="employee-form" action="edit_employee.php" method="post">

        <?php include('errors.php'); ?>

         <div class="form-group">
            <label>Employee Id</label>
            <input type="text" class="form-control" placeholder="Employee Id" name="employee_id" value="<?php echo $id; ?>">
          </div>

          <div class="form-group">
            <label>Employee Name</label>
            <input type="text" class="form-control" placeholder="Employee Name" name="name" value="<?php echo $name; ?>">
          </div>

            <label>Position :</label>
                <select name="position" value="<?php echo $position; ?>">
                    <option>Service Crew</option>
                    <option>Crew</option>
                    <option>Cashier</option>
                </select>

          <div class="form-group">
            <label>Hours in work</label>
            <input type="text" class="form-control" placeholder="Hour in work" name="hours" value="<?php echo $hours; ?>">
          </div>

          <div class="form-group">
            <label>Overtime</label>
            <input type="text" class="form-control" placeholder="Overtime" name="OT" value="<?php echo $OT; ?>">
          </div>         

          <div class="form-group">
            <label>Rate</label>
            <input type="text" class="form-control" placeholder="Rate" name="rate" value="<?php echo $rate; ?>">
          </div>

          <div class="form-group">
            <label>Bonus</label>
            <input type="text" class="form-control" placeholder="Bonus" name="bonus" value="<?php echo $bonus; ?>">
          </div>


          <button type="submit" class="btn btn-primary" name="update">Update</button>
          <a class="btn btn-primary" href="index.php">Go back</a>
        </form>
      </div>
</body>
</html>