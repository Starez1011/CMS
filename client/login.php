<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        include 'db_connect.php';
        $email = $_POST["email"];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num==1){
            $_SESSION['logged in']=true;
            $_SESSION['username']=$username;
            header("Location: homepage.html");
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
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="container">
    <h1>Complaint Management System</h1>
    <br>
    <br>
    <br>
    <form action="login.php" method="post" name="form">
      <h2>Login</h2>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <button type="submit">Login</button>
      </div>
      <div class="form-group">
        <span>Don't have an account?</span>
        <a href="signup.php">Create New Account</a>
      </div>
    </form>
  </div>

  <footer>
    <img src="icons/logo.jpg" >
    <p>&copy; 2023 Complaint Management System.</p>
  </footer>
</body>
</html>
