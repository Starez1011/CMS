<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'db_connect.php';
        $uname = $_POST["uname"];
        $password = ($_POST['password']);

        $sql = "SELECT * FROM admin WHERE admin_uname='$uname' AND admin_password='$password'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num==1){
            header("Location: admin1.html");
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
      </div>
    </form>
  </div>

  <footer>
    <img src="../icons/logo.jpg" >
    <p>&copy; 2023 Complaint Management System.</p>
  </footer>
</body>
</html>
