<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorite Color</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Enter your Favorite Colors🎨</h1>

        <form method="post" action="result_colors.php">
            <label>Favorite Color 1:</label>
            <input type="text" name="color1" required>

            <label>Favorite Color 2:</label>
            <input type="text" name="color2" required>

            <label>Favorite Color 3:</label>
            <input type="text" name="color3" required>

            <label>Favorite Color 4:</label>
            <input type="text" name="color4" required>

            <label>Favorite Color 5:</label>
            <input type="text" name="color5" required>

            <input type="submit" value="Send Colors">
        </form>
    </div>
</body>
</html>