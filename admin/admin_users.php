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
    <link rel="icon" type="image" href="../icons/l.png"/>
    <title>CMS</title>
    <link rel="stylesheet" href="admin_users.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="leftbar">
    <header>CMS</header>
    <ul>
        <li><a href="admin_home.php"><i class="fas fa-user-circle"></i>Profile</a></li>
        <li><a href="admin_users.php"><i class="fas fa-user"></i>User</a></li>
        <li><a href="allcomplaint.php"><i class="fas fa-message"></i>All Complaints</a></li>
        <li><a href="general.php"><i class="fas fa-cog"></i>General</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out"></i>Logout</a></li>
    </ul>
</div>
<div class="content">
    <h1>Users Data</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Contact Info</th>
            <th>Email</th>
        </tr>
        <?php
            include 'db_connect.php';
            $sql = "SELECT * FROM users";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $age = $row['age'];
                $gender = $row['gender'];
                $address = $row['address'];
                $contact = $row['contact_info'];
                $email = $row['email'];

                echo "
                <tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$age</td>
                    <td>$gender</td>
                    <td>$address</td>
                    <td>$contact</td>
                    <td>$email</td>
                </tr>";
            }
        ?>
    </table>
</div>
</body>
</html>
