<?php
    include 'db_connect.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../icons/l.png"/>
    <title>CMS</title>
    <link rel="stylesheet" href="general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="leftbar">
    <header>CMS</header>
    <ul>
        <li><a href="#"><i class="fas fa-user-circle"></i>Profile</a></li>
        <li><a href="#"><i class="fas fa-user "></i>User</a></li>
        <li><a href="allcomplaint.php"><i class="fas fa-message "></i>All Complaints</a></li>
        <li><a href="#"><i class="fas fa-cog "></i>General</a></li>
        <li><a href="log.php"><i class="fas fa-sign-out"></i>Logout</a></li>
    </ul>
</div>
<h1>General Settings</h1>
<section>
    <div class="change-info">
        <a href="changepass.php"><button><p>Change Admin Password</p></button></a>
        <a href="removeuser.php"><button><p>Remove Users</p></button></a>
    </div>
</section>
</body>