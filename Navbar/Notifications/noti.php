<?php
include("../../connection.php");

$result = $conn->query("SELECT * FROM notifications");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Footer/footer.css">
    <link rel="stylesheet" href="../navbar.css">
    <link rel="stylesheet" href="noti.css">
    <title>Notifications</title>
</head>

<body>
    <nav>
        <img src="../../images/image-removebg-preview.png" alt="">
        <div class="Navigation">
            <ul>
                <li><a href="../../index.html">Home</a></li>
                <li><a href="../About/about.html">About</a></li>
                <li><a href="../Companies/printComp.php">Companies</a></li>
                <li><a href="../Contact/contact.html">Contact</a></li>
                <li><a href="../Course/Courses.html">Course</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="../Admin login/adminLogin.php">Admin login</a></li>
            </ul>
        </div>
    </nav>
    <br><br><br><br><br><br><br>

    <div class="container">

    <?php while ($row = $result->fetch_assoc()) { ?>
        <div class="section">
            <h2><?php echo $row['heading']; ?></h2>
            <p><?php echo $row['info']; ?></p>
        </div>

        <?php
    }
    ?>
    </div>
    <br><br>
    <footer class="footer">
        <div class="footer-container">
          <div class="footer-section">
            <img src="../../images/image-removebg-preview.png" alt="TPC-PHCET Logo" class="logo">
            <p>
              The <strong>Training and Placement Cell</strong> is an integral part of
              the PHCET Institution. The Placement Cell's primary objective is to
              provide training and placements to college students.
            </p>
          </div>
          <div class="footer-section">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="../../index.html">Home</a></li>
              <li><a href="../About/about.html">About</a></li>
              <li><a href="../Contact/contact.html">Contact</a></li>
            </ul>
          </div>
          <div class="footer-section">
            <h3>Address</h3>
            <address>
              Dist. Raigad, Via Panvel (Navi-Mumbai),<br>
              Rasayani, Tal. Khalapur 410207,<br>
              MH, India<br>
              Contact: 02192-669000<br>
              Email: tpctpcphcet@mes.ac.in
            </address>
          </div>
          <div class="footer-section">
            <h3>Other Services</h3>
            <ul>
              <li><a href="#">LinkTree</a></li>
              <li><a href="#">PHCET</a></li>
            </ul>
            <div class="social-icons">
              <a href="https://www.instagram.com/tpc.phcet/"><img src="../../images/instagram.webp" alt="Instagram"></a>
              <a href="https://www.linkedin.com/company/tpc-phcet/"><img src="../../images/linkedin.png" alt="LinkedIn"></a>
            </div>
          </div>
        </div>
        <div class="footer-bottom">
          <p>&copy; Copyright 2025 | TPC-PHCET | All rights reserved.</p>
        </div>
      </footer>
</body>

</html>