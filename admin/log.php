<?php
include 'db_connect.php';
  session_start();
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $uname = $_POST["uname"];
      $password = md5($_POST['password']);
      $sql = "SELECT * FROM admin WHERE admin_uname='$uname' AND admin_password='$password'";
      $result = mysqli_query($conn,$sql);
      if($result && mysqli_num_rows($result) > 0){
        $data = mysqli_fetch_assoc($result);
          $_SESSION['user']=$data;
          header("Location: admin_home.php");
          exit();
      }
      else{
        echo "<script>alert('Email or Password Mismatch');</script>";
      }
    }
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image" href="../icons/l.png"/>
  <link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
  <div class="container">
    <h1>Complaint Management System</h1>
    <form action="log.php" method="post" name="form">
      <h2>Admin Login</h2>
      <br>
      <div class="form-group">
        <label for="uname">Username</label>
        <input type="text" id="uname" name="uname" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
        <a href="../client/login.php">User Login</a>
      </div>
    </form>
  </div>

  <footer>
    <img src="../icons/l.png" >
    <p>&copy; 2023 Complaint Management System.</p>
  </footer>
</body>
</html>
