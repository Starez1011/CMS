<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

include 'db_connect.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $rcomplaint = $_POST['r_complaint'];
    $id = $_SESSION['user']['id'];
    $data = "SELECT complaint_id from complaints where id = '$id' and complaint_id = '$rcomplaint'";
    $r1 = mysqli_query($conn,$data);
    $num = mysqli_num_rows($r1);
    if ((!is_numeric($rcomplaint)) || $num == 0) {
        echo "<script>alert('Invalid complaint ID');</script>";
    }else{
        $sql = "DELETE from complaints where complaint_id = '$rcomplaint'";
        $result = mysqli_query($conn,$sql);
        if($result){
            echo "<script>alert('The complaint is successfully removed');</script>";
        }
        else{
            echo "<script>alert('Complaint Id Mismatched or doesn't exist');</script>";
        }
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
    <link rel="stylesheet" href="remove.css">
    <link rel="stylesheet" href="faq.css">
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
    <form action="removecomplaint.php" method="POST">
        <div class="change-info">
            <h2>Delete complaint By Id:</h2>
            <div class="sub-div">
                <label for="complaint_id">Complaint Id:</label>
                <input type="text" name="r_complaint" required>
                <input type="submit" value="Delete">
            </div>
        </div>
    </form>
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