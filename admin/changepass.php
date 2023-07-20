<?php
    include 'db_connect.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $oldpass=$_POST['old_pass'];
        $newpass=$_POST['new_pass'];
        $repass=$_POST['re_pass'];
        if($newpass == $repass){
            $sql="UPDATE admin SET admin_password = $newpass WHERE admin_password = $oldpass";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<script>alert('Password Changed Successfully');</script>";
            }
            else{
                echo "<script>alert('Old Password Mismatch');</script>";
            }
        }
        else{
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
        <li><a href="#"><i class="fas fa-user-circle"></i>Profile</a></li>
        <li><a href="#"><i class="fas fa-user "></i>User</a></li>
        <li><a href="allcomplaint.php"><i class="fas fa-message "></i>All Complaints</a></li>
        <li><a href="general.php"><i class="fas fa-cog "></i>General</a></li>
        <li><a href="log.php"><i class="fas fa-sign-out"></i>Logout</a></li>
    </ul>
</div>
<h1>General Settings</h1>
<section>
    <form action="general.php" method="POST">
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