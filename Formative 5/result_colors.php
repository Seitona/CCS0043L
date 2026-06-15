<?php 
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $_SESSION['colors'] = [$_POST['color1'], $_POST['color2'], $_POST['color3'], $_POST['color4'], $_POST['color5']];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Your Favorite Colors🎨</h1>

        <?php foreach($_SESSION['colors'] as $color): ?>
            <div class="color-box" style="background:<?= htmlspecialchars ($color) ?>">
                <?= htmlspecialchars($color) ?>
            </div>
        <?php endforeach; ?>

        <a href="favorite_color.php" class="back">Back</a>
    </div>
</body>
</html>