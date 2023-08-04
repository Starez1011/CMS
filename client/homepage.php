<?php
include "db_connect.php";

session_start();
    if(!isset($_SESSION['user'])){
        header("Location: login.php");
        exit();
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../icons/l.png"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
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
    <br><br>
    <?php
        echo "Your User Id: {$_SESSION['user']['id']}";
        echo "<br>";
        echo "<h2>Hello {$_SESSION['user']['name']}</h2>";
    ?>
    <h1>Welcome to Complaint Management System</h1>
    <h2>How to complain?</h2>
    <section class="outer">
        <div class="container">
            <img src="../icons/office-icon.png" alt="Office icon">
            <h3>At Office</h3>
            <br>
            <p>If you have a complain about our services
                then you can directly contact by visiting our office and its branches
                which are located at different locations.
            </p>
        </div>
        <div class="container">
            <img src="../icons/telephone1-icon.png" alt="Telephone icon">
            <h3>At telephone</h3>
            <br>
            <p>If you find difficult to visit our office then you can simply contact 
                our office via telephhone:+01-5154145 or email us at : cms@gmail.com .
            </p>
        </div>
        <div class="container">
            <img src="../icons/online-icon.png" alt="Online icon">
            <h3>At online system</h3>
            <br>
            <p><bold>You can simply contact us by using online complaint forms.
                We are online all day and we will reply as soon as possible.</bold>
            </p>
        </div> 
    </section>
    <main>
        <div class="hero">
          <h2>Features of our Complaint Management System</h2>
          <p>We are here to help you resolve your complaints efficiently.</p>
        </div>
    
        <section class="features">
          <div class="feature">
            <img src="../icons/complaint-icon.png" alt="Complaint Icon">
            <h3>Manage Complaints</h3>
            <p>Track the status of your complaints and view their details.</p>
          </div>
          
          <div class="feature">
            <img src="../icons/create-complaint-icon.png" alt="Create Complaint Icon">
            <h3>Create New Complaints</h3>
            <p>Submit a new complaint with all the necessary information.</p>
          </div>
          
          <div class="feature">
            <img src="../icons/faq1-icons.png" alt="FAQ Icon">
            <h3>FAQ</h3>
            <p>Find answers to frequently asked questions about our system.</p>
          </div>
        </section>
      </main>
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
        <p>&copy2023 Complaint Management System.</p>
    </footer>
</body>
</html>