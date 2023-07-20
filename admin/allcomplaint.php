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
        <li><a href="#"><i class="fas fa-user-circle"></i>Profile</a></li>
        <li><a href="#"><i class="fas fa-user "></i>Users</a></li>
        <li><a href="allcomplaint.php"><i class="fas fa-message "></i>All Complaints</a></li>
        <li><a href="general.php"><i class="fas fa-cog "></i>General</a></li>
        <li><a href="log.php"><i class="fas fa-sign-out"></i>Logout</a></li>
    </ul>
</div>
<h1>All Complaints</h1>
    <?php
    include 'db_connect.php';
    $sql= "Select name,email,complaint,date_of_complaint from users inner join complaints on users.id=complaints.id";
    $result=mysqli_query($conn,$sql);

    while($row=mysqli_fetch_assoc($result)){
        $name=$row['name'];
        $email=$row['email'];
        $complaint=$row['complaint'];
        $date=$row['date_of_complaint'];
        echo "
            <table cellspacing=0 cellpadding=5>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Complaint</th>
                    <th>Date of Complaint</th>
                </tr>
                <tr>
                    <td>$name</td>
                    <td>$email</td>
                    <td>$complaint</td>
                    <td>$date</td>
                </tr>
            </table>
        
        ";
    }
    
    
    
    ?>
</body>
</html>