<?php
$conn = mysqli_connect("localhost", "root", "", "dog_database");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM dogs";
$result = mysqli_query($conn, $sql);

$count = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container view-container">

    <h2>Dog Records</h2>

    <a href="DogRegister.php" class="back-link">
        ← Add New Dog
    </a>

    <?php

    if (mysqli_num_rows($result) > 0) {

        while ($row = mysqli_fetch_assoc($result)) {

            echo "<div class='dog-box'>";

            echo "<strong>Dog " . $count . "</strong><br><br>";

            echo "<b>Name:</b> " . $row['d_name'] . "<br>";
            echo "<b>Breed:</b> " . $row['d_breed'] . "<br>";
            echo "<b>Age:</b> " . $row['d_age'] . " years old<br>";
            echo "<b>Address:</b> " . $row['d_add'] . "<br>";
            echo "<b>Color:</b> " . $row['d_color'] . "<br>";
            echo "<b>Height:</b> " . $row['d_height'] . " inches<br>";
            echo "<b>Weight:</b> " . $row['d_weight'] . " kg<br>";

            echo "</div>";

            $count++;
        }

    } else {
        echo "<p>No dog records found.</p>";
    }

    mysqli_close($conn);
    ?>

</div>

</body>
</html>