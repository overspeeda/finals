<?php 

require('connection.php');
//login user
if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $results = mysqli_query($db, $query);
  
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['username'] = $username;
          header('location: index.php');
        }
        else {
            array_push($errors, "Wrong username/password combination");
        }
    }
  }
  
//reg user
if (isset($_POST['reg_user'])) {

    $username = $_POST['username'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $email = $_POST['email'];

    if (empty($username)) { 
        array_push($errors, "Username is required"); }

    if (empty($email)) { 
        array_push($errors, "Email is required"); }

    if (empty($password_1)) { 
        array_push($errors, "Password is required"); }

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
      }

    if (count($errors) == 0) {
    $password = md5($password_1);

    $query = "INSERT INTO user (username, email, password)
            VALUES('$username', '$email', '$password')";
    mysqli_query($db, $query);
    header('location: index.php');
    }
  }

//input employee data to database
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $position = $_POST['position'];

    $hours = $_POST['hours'];
    $rate = $_POST['rate'];
    $bonus = $_POST['bonus'];
    $OT = $_POST['OT'];

    
    if (empty($name)) { 
        array_push($errors, "Name is required"); }

    if (empty($hours)) { 
        array_push($errors, "Hours is required"); }

    if (empty($rate)) { 
        array_push($errors, "Rate is required"); }

    if (empty($bonus)) { 
        array_push($errors, "Bonus is required"); }

    if (count($errors) == 0) {
    $salary = $hours * $rate + $bonus;
    $hoursInWork = $hours + $OT;
    $query = "INSERT INTO employee (name, position, hours, rate, bonus, OT, salary, hoursInWork )
  			  VALUES('$name', '$position', '$hours', '$rate', '$bonus', '$OT', '$salary', '$hoursInWork')";
  	mysqli_query($db, $query);
  	header('location: index.php');
    }
}

//delete employee
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $query = "DELETE FROM `employee` WHERE id=$id";
    mysqli_query($db, $query);
    header('location:index.php');

}

// edit selected employee
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $query = "SELECT * FROM employee WHERE id=$id";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result)== 1) {

        $row = $result->fetch_assoc();
        $name = $row['name'];
        $position = $row['position'];
        $hours = $row['hours'];
        $OT = $row['OT'];
        $rate = $row['rate'];
        $bonus = $row['bonus'];

    }
}

//update employee
if (isset($_POST['update'])) {
    $id = $_POST['employee_id'];
    $name = $_POST['name'];
    $position = $_POST['position'];

    $hours = $_POST['hours'];
    $rate = $_POST['rate'];
    $bonus = $_POST['bonus'];
    $OT = $_POST['OT'];

    if (empty($id)) { 
        array_push($errors, "Id is required"); }

    if (empty($name)) { 
        array_push($errors, "Name is required"); }

    if (empty($hours)) { 
        array_push($errors, "Hours is required"); }

    if (empty($rate)) { 
        array_push($errors, "Rate is required"); }

    if (empty($bonus)) { 
        array_push($errors, "Bonus is required"); }

    if (empty($OT)) { 
        array_push($errors, "Overtime is required"); }

    if (count($errors) == 0) {
    $salary = $hours * $rate + $bonus;
    $hoursInWork = $hours + $OT;
    $query = "UPDATE employee SET name='$name', position='$position', rate='$rate', hours='$hours', bonus='$bonus', OT='$OT', salary='$salary', hoursInWork='$hoursInWork' WHERE id='$id' ";
    mysqli_query($db, $query);
    header('location: index.php');
    }
}

//display the data
$employee_db=mysqli_query($db, "SELECT * FROM employee");
$employee=mysqli_fetch_all($employee_db, MYSQLI_ASSOC);

?>