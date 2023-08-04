<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Complaints</title>
    <link rel="icon" type="image" href="../icons/l.png"/>
    <link rel="stylesheet" href="faq.css">
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <table>
        <tr>
            <th>Complaint Id</th>
            <th>Title</th>
            <th>Complaint</th>
            <th>Date of Complaint</th>
        </tr>
        <?php
        include 'db_connect.php';
        $userId = $_SESSION['user']['id'];
        $sql= "SELECT complaint_id,title, complaint, date_of_complaint FROM users INNER JOIN complaints ON users.id=complaints.id WHERE users.id ='$userId'";
        $result=mysqli_query($conn, $sql);

        while($row=mysqli_fetch_assoc($result)){
            $id=$row['complaint_id'];
            $complaint = $row['complaint'];
            $date = $row['date_of_complaint'];
            $title = $row['title'];
            echo "
            <tr>
                <td>$id</td>
                <td>$title</td>
                <td>$complaint</td>
                <td>$date</td>
            </tr>";
        }
        ?>
    </table>
    <a href="removecomplaint.php"><button>Delete Complaint</button></a>
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
