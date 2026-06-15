<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET information</title>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>GET personal information</h1>
        <form method="get" onsubmit="sentMessage()">
            <label>First Name:</label>
            <input type="text" name = "firstname" required> 

            <label>Middle Name:</label>
            <input type="text" name = "middlename" required>
            
            <label>Last Name:</label>
            <input type="text" name = "lastname" required> 

            <label>Date of Birth:</label>
            <input type="text" name = "dob" required> 

            <label>Address:</label>
            <input type="text" name = "address" required> 

            <input type="submit" value="Submit">
        </form>

        <?php if(isset($_GET['firstname'])): ?>
            <div class="result">
                <p>First Name: <?= htmlspecialchars($_GET['firstname']) ?></p>
                <p>Middle Name: <?= htmlspecialchars($_GET['middlename']) ?></p>
                <p>Last Name: <?= htmlspecialchars($_GET['lastname']) ?></p>
                <p>Date of Birth: <?= htmlspecialchars($_GET['dob']) ?></p>
                <p>Address: <?= htmlspecialchars($_GET['address']) ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>