<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: log.php");
    exit();
}

include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_SESSION['user']['aid'];
    $oldpass = md5($_POST['old_pass']);
    $newpass = md5($_POST['new_pass']);
    $repass = md5($_POST['re_pass']);

    if ($newpass == $repass) {
        $sql= "SELECT * FROM `admin` WHERE aid = '$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $update_query = "UPDATE `admin` SET admin_password = '$newpass' WHERE admin_password = '$oldpass'";
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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS</title>
    <link rel="icon" type="image" href="../icons/l.png"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="changepass.css">
</head>
<body>
<div class="leftbar">
    <header>CMS</header>
    <ul>
        <li><a href="admin_home.php"><i class="fas fa-user-circle"></i>Profile</a></li>
        <li><a href="admin_users.php"><i class="fas fa-user "></i>User</a></li>
        <li><a href="allcomplaint.php"><i class="fas fa-message "></i>All Complaints</a></li>
        <li><a href="general.php"><i class="fas fa-cog "></i>General</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out"></i>Logout</a></li>
    </ul>
</div>
<h1>General Settings</h1>
<section>
    <form action="changepass.php" method="POST">
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
</body>
</html>