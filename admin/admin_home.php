<?php
    session_start();

    if(!isset($_SESSION['user'])){
        header("Location: log.php");
        exit();
    }
    include 'db_connect.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../icons/l.png"/>
    <title>CMS</title>
    <link rel="stylesheet" href="admin_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="leftbar">
    <header>CMS</header>
    <ul>
        <li><a href="#"><i class="fas fa-user-circle"></i>Profile</a></li>
        <li><a href="admin_users.php"><i class="fas fa-user "></i>Users</a></li>
        <li><a href="allcomplaint.php"><i class="fas fa-message "></i>All Complaints</a></li>
        <li><a href="general.php"><i class="fas fa-cog "></i>General</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out"></i>Logout</a></li>
    </ul>
</div>
<h1>Welcome To Complaint management system</h1>
<section>
    <div class="container">
        <div class="box">
            <div class="icon"><i class="fa fa-message"aria-hidden="true"></i></div>
            <div class="content">
                <h2>Total Complaints</h2>
                <?php
                    $count1 = "SELECT COUNT(*) from complaints";
                    $result = mysqli_query($conn,$count1);
                    while($row=mysqli_fetch_assoc($result)){
                        echo $row['COUNT(*)'];
                    }
                ?>
            </div>
        </div>
        <div class="box">
            <div class="icon"><i class="fa fa-user-circle"aria-hidden="true"></i></div>
            <div class="content">
                <h3>Total Users</h3>
                <?php
                    $count2 = "SELECT COUNT(*) from users";
                    $result = mysqli_query($conn,$count2);
                    while($row=mysqli_fetch_assoc($result)){
                        echo $row['COUNT(*)'];
                    }
                ?>
            </div>  
        </div>
        <div class="box">
            <div class="icon"><i class="fa fa-paper-plane"aria-hidden="true"></i></div>
            <div class="content">
                <a href="allcomplaint.php"><h4>View Complaints</h4></a>
            </div>    
        </div>
    </div>    
</section>
</body>