<?php
    include 'db_connect.php';
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: login.php");
        exit();
    }
    else{
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $complaint = $_POST['complaint'];
            $title = $_POST['title'];
            $sql = "INSERT INTO complaints (`id`,`title`,`complaint`,`date_of_complaint`) VALUES('{$_SESSION['user']['id']}','$title','$complaint',CURRENT_TIMESTAMP)";
            $result = mysqli_query($conn,$sql);
            if($result){
                echo "<script>alert('Your complaint has been received')</script>";
            }
            else{
                echo "<script>alert('Error occurred !!! Please try again');</script>";
            }
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../icons/l.png"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Complain</title>
  <title>Complaint Management System</title>
  <link rel="stylesheet" type="text/css" href="addcomplaint.css">
</head>
<body>
    <nav class="nav-bar">
        <div class="right">
            <ul>
                <li><a href="homepage.php">Home</a></li>
                <li><a href="#">Add Complaint</a></li>
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
        <a href="view.php"><button>View Your complaints</button></a>
  <div class="container">
        <h2>Submit your Complaint</h2>
        <form action="addcomplaint.php" method="POST">
            <label for="Title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="complaint">Complaint:</label>
            <textarea id="complaint" name="complaint" rows="17" required></textarea>

            <input type="submit" value="Submit">
        </form>
  </div>
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
</body>
</html>
