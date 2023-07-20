<?php
    include 'db_connect.php';
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $remail=$_POST['r_email'];
        $sql="DELETE FROM users WHERE email = $remail";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('User is successfully removed');</script>";
        }
        else{
            echo "<script>alert('User doesn't exist');</script>";
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
    <link rel="stylesheet" href="removeuser.css">
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
    <form action="general.php" method="POST">
        <div class="change-info">
            <h2>Remove Users</h2>
            <div class="sub-div">
                <label for="user_email">By Email:</label>
                <input type="email" name="r_email" required>
                <input type="submit" value="Submit">
            </div>
        </div>
    </form>
</body>
</html>