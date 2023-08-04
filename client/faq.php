<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image" href="../icons/l.png"/>
  <link rel="stylesheet" type="text/css" href="faq.css">
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
    <div class="animated-gradient-background">
  <h1>Frequently Asked Questions(FAQ)</h1>
  
  <div class="faq-container">
    <div class="faq-item">
      <input type="checkbox" id="faq1" class="faq-toggle">
      <label for="faq1" class="faq-question">Q: What should I do if I'm struggling to keep up with the coursework?

      </label>
      <div class="faq-answer">
        A: If you're having difficulty with coursework, don't hesitate to ask for help. Speak with your teacher, attend tutoring sessions, or join study groups with classmates who can help you better understand the material.
      </div>
    </div>
    <br>
    <br>
    <div class="faq-item">
      <input type="checkbox" id="faq2" class="faq-toggle">
      <label for="faq2" class="faq-question">Q: How do I handle conflicts with fellow students or roommates at college?

      </label>
      <div class="faq-answer">
        A: Conflicts are a natural part of life, but addressing them maturely is essential. Try having an open and honest conversation with the person involved, seeking to understand their perspective, and finding a resolution that works for both of you.

      </div>
    </div>
    <br>
    <br>
    <div class="faq-item">
      <input type="checkbox" id="faq3" class="faq-toggle">
      <label for="faq3" class="faq-question">Q: How can I deal with a heavy workload and academic stress in school or college?

      </label>
      <div class="faq-answer">
        A: Academic stress is common, but it's essential to manage it effectively. Break tasks into smaller, manageable chunks, take short breaks during study sessions, practice mindfulness techniques, and don't hesitate to seek support from teachers or counselors.
      </div>
    </div>
  </div>
  <br>
    <br>

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
</div>
</body>
</html>
