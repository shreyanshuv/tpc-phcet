<?php
include("../../connection.php");

$result = $conn->query("SELECT * FROM company");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="printComp.css">
    <link rel="stylesheet" href="../navbar.css">
    <title>Companes</title>
</head>

<body>
    <nav>
        <img src="../../images/image-removebg-preview.png" alt="">
        <div class="Navigation">
            <ul>
                <li><a href="../../index.html">Home</a></li>
                <li><a href="../About/about.html">About</a></li>
                <li><a href="#">Companies</a></li>
                <li><a href="../Contact/contact.html">Contact</a></li>
                <li><a href="../Course/courses.html">Course</a></li>
                <li><a href="../Notifications/noti.php">Notifications</a></li>
                <li><a href="../Admin login/adminLogin.php">Admin login</a></li>
            </ul>
        </div>
    </nav>
    <br><br><br><br><br><br><br>
    <h1>View Companies</h1>
    <table>
        <thead>
            <tr>
                <th>Company Name</th>
                <th>Job detail</th>
                <th>HR Name</th>
                <th>HR Email</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td>
                    <?php echo $row['CompanyName']; ?>
                </td>
                <td>
                    <?php echo $row['JobDetail']; ?>
                </td>
                <td>
                    <?php echo $row['HRName']; ?>
                </td>
                <td>
                    <?php echo $row['HREmail']; ?>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>