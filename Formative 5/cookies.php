<?php
    if(isset($_POST['submit'])){
        setcookie("firstname", $_POST['firstname'], time() + 10);
        setcookie("middlename", $_POST['middlename'], time() + 20);
        setcookie("lastname", $_POST['lastname'], time() + 30);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies🍪</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Cookies🍪</h1>

        <form method="post">
            <label>First Name:</label>
            <input type="text" name="firstname" required>

            <label>Middle Name:</label>
            <input type="text" name="middlename" required>

            <label>Last Name:</label>
            <input type="text" name="lastname" required>

            <input type="submit" name="submit" value="Set Cookies">
        </form>

        <div class="result">
            <p>Refresh after 10 seconds <?= $_COOKIE['firstname'] ?? 'Not yet available' ?></p>
            <p>Refresh after 20 seconds <?= $_COOKIE['middlename'] ?? 'Not yet available' ?></p>
            <p>Refresh after 30 seconds <?= $_COOKIE['lastname'] ?? 'Not yet available' ?></p>
        </div>
    </div>
</body>
</html>