<?php
session_start();
    if(!isset($_SESSION['user'])){
        header("Location: login.php");
        exit();
    }

    include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_SESSION['user']['id'];
    $oldpass = md5($_POST['old_pass']);
    $newpass = md5($_POST['new_pass']);
    $repass = md5($_POST['re_pass']);

    if ($newpass == $repass) {
        $sql= "SELECT * FROM `users` WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $update_query = "UPDATE `users` SET password = '$newpass' WHERE id = '$id'";
                $update_result = mysqli_query($conn, $update_query);

                if ($update_result) {
                    echo "<script>alert('Password Changed Successfully');</script>";
                } else {
                    echo "<script>alert('Error occurred while changing password');</script>";
                }
            } else {
                echo "<script>alert('Old Password Mismatch');</script>";
            }
        } else {
            echo "<script>alert('Error occurred while checking the old password');</script>";
        }
    } else {
        echo "<script>alert('New and Retype Password Mismatch');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../icons/l.png"/>
  <link rel="stylesheet" type="text/css" href="change.css">
</head>
<body>
    <nav class="nav-bar">
        <div class="right">
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="addcomplaint.php">Add Complaint</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="change.php">Change Password</a></li>
                <li><a href="logout1.php">Log Out</a></li>
            </ul>
        </div>
        <div class="left">
            <ul>
                <li><a href="homepage.php">CMS</a></li>
            </ul>
        </div>
    </nav>
    <h1>Change Your Password</h1>
<section>
    <form action="change.php" method="POST">
        <div class="change-info">
            <h2>Change Password For Admins</h2>
            <br>
            <label for="old_pass">Old Password:</label>
            <input type="password" name="old_pass" required>
            <br>
            <label for="new_pass">New Password:</label>
            <input type="password" name="new_pass" required>
            <br>
            <label for="re_pass">Re-type Password:</label>
            <input type="password" name="re_pass" required>
            <br>
            <input type="submit" value="Submit">
        </div>
    </form>
</section>

  <footer>
    <div class="bottom">
        <h2><u>About Us</u></h2>
        <br>
        <div class="box">
            <p>Our Branch Location</p>
            <p>Kathmandu</p>
            <p>Bhaktapur</p>
            <p>Lalitpur</p>
            <p>Chitwan</p>
        </div>
        <div class="box">
            <h3>Social Media</h3>
            <a href="#"><img src="../icons/facebook.png" alt="Facebook">Facebook</a>
            <br>
            <a href="#"><img src="../icons/instagram.png" alt="Instagram">Instagram</a>
            <br>
            <a href="#"><img src="../icons/twitter.png" alt="Twitter"></i>Twitter</a>
            <br>
            <a href="#"><img src="../icons/linkedin.png" alt="Linkedln">Linkedln</a>
        </div>
    </div>
    <p>&copy; 2023 Complaint Management System.</p>
  </footer>
</div>
</body>
</html>
