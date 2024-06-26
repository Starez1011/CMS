<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: log.php");
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
    <link rel="stylesheet" href="allcomplaint.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="leftbar">
    <header>CMS</header>
    <ul>
        <li><a href="admin_home.php"><i class="fas fa-user-circle"></i>Profile</a></li>
        <li><a href="admin_users.php"><i class="fas fa-user"></i>Users</a></li>
        <li><a href="allcomplaint.php"><i class="fas fa-message"></i>All Complaints</a></li>
        <li><a href="general.php"><i class="fas fa-cog"></i>General</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out"></i>Logout</a></li>
    </ul>
</div>
<div class="content">
    <h1>All Complaints</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Complaint Id</th>
            <th>Title</th>
            <th>Complaint</th>
            <th>Date of Complaint</th>
        </tr>
        <?php
        include 'db_connect.php';
        $sql= "SELECT name, email,complaint_id,title, complaint, date_of_complaint FROM users INNER JOIN complaints ON users.id=complaints.id";
        $result=mysqli_query($conn, $sql);

        while($row=mysqli_fetch_assoc($result)){
            $id=$row['complaint_id'];
            $name = $row['name'];
            $email = $row['email'];
            $complaint = $row['complaint'];
            $date = $row['date_of_complaint'];
            $title = $row['title'];
            echo "
            <tr>
                <td>$name</td>
                <td>$email</td>
                <td>$id</td>
                <td>$title</td>
                <td>$complaint</td>
                <td>$date</td>
            </tr>";
        }
        ?>
    </table>
</div>
</body>
</html>
