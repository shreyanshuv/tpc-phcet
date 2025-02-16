<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    
    $valid_username = 'admin';
    $valid_password = 'password123'; // Change this to a hashed password in a real app
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION['loggedin'] = "true";
            header("location: ../../Admin panel/dashborad.php");
            exit;
        } else {
            echo "Invalid username or password.";
        }
    }
?>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminLogin.css">
    <link rel="stylesheet" href="../navbar.css">
    <title>Admin Login</title>
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
                <li><a href="../Course/courses.html">Course</a></li>
                <li><a href="..//Notifications/noti.php">Notifications</a></li>
                <li><a href="#">Admin login</a></li>
            </ul>
        </div>
    </nav>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form action="adminLogin.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>