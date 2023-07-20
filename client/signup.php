<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'db_connect.php';
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $address = $_POST["address"];
    $contact = $_POST["contact"];
    $email= $_POST["email"];
    $password = md5($_POST["password"]);
    $re_pass = md5($_POST["repassword"]);

    if($password == $re_pass){
        $sql="INSERT INTO `users`(`name`,`age`,`gender`,`address`,`contact_info`,`email`,`password`)
        VALUES ('$name','$age','$gender','$address','$contact','$email','$password')";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('Your account has been created successfully');</script>";
            header("Location: login.php");
        }
        else{
          echo "<script>alert('Password Mismatch');</script>";
        }
    }
    else{
        echo "Connection Failed";
        
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
          <textarea id="address" name="address" required></textarea>
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
    <img src="../icons/logo.jpg" class="logo">
    <p>&copy; 2023 Complaint Management System.</p>
  </footer>
</body>
</html>
