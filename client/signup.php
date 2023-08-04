<?php
include 'db_connect.php';

if($_SERVER['REQUEST_METHOD']=="POST"){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $email= $_POST["email"];
    $password = md5($_POST["password"]);
    $re_pass = md5($_POST["repassword"]);
    
    $errors = [];
    if (empty($name) || strlen($name)<4) {
        $errors[] = "Name is required with at least 5 characters.";
    }
    if (empty($age) || $age<0 || $age>130) {
        $errors[] = "Age is invalid.";
    }
    if (empty($gender)) {
        $errors[] = "Gender is required.";
    }
    if (empty($address)) {
        $errors[] = "Address is required.";
    }
    if (empty($contact) || strlen($contact) !=10 || !is_numeric($contact)) {
        $errors[] = "Contact is Invalid and Must be of 10 numbers.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }
    if (empty($re_pass)) {
        $errors[] = "Please re-enter the password.";
    } else if ($password !== $re_pass) {
        $errors[] = "Passwords do not match.";
    }

    // If there are no validation errors, proceed with further actions
    if (empty($errors)) {
      $sql="INSERT INTO `users`(`name`,`age`,`gender`,`address`,`contact_info`,`email`,`password`)
      VALUES ('$name','$age','$gender','$address','$contact','$email','$password')";
      $result = mysqli_query($conn,$sql);
      if($result){
          header("Refresh: 0; url=redirect.php");
      }else{
        echo "<script>alert('Error occurred !!! Please try again');</script>";
      }
    } else {
        // If there are validation errors, display them
        foreach ($errors as $error) {
            echo "$error<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image" href="../icons/l.png"/>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="container">
    <h1>Complaint Management System</h1>
    <br>
    <br>
    <br>
    <form action="signup.php" method="POST" name="form">
        <h2>REGISTER</h2>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="age">Age:</label>
          <input type="number" id="age" name="age" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" id="address" name="address" required>
        </div>
        <div class="form-group">
          <label for="contact">Contact Info:</label>
          <input type="text" id="contact" name="contact" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" id="password" name="password" required>
        </div>
        <div class="form-group">
          <label for="repassword">Re-enter Password:</label>
          <input type="password" id="repassword" name="repassword" required>
        </div>
        <button type="submit">Confirm</button>
      </form>
  </div>

  <footer>
    <img src="../icons/l.png" class="logo">
    <p>&copy; 2023 Complaint Management System.</p>
  </footer>
</body>
</html>
