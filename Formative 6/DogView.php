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
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 700px;
            margin: 30px auto;
        }

        .dog-box {
            border: 2px solid #555;
            padding: 10px;
            margin-bottom: 15px;
        }

        a {
            display: block;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Dog Records</h2>
    <a href="DogRegister.php">Add New Dog</a>

    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='dog-box'>";
            echo "<strong>Dog " . $count . "</strong><br>";
            echo "Name: " . $row['d_name'] . "<br>";
            echo "Breed: " . $row['d_breed'] . "<br>";
            echo "Age: " . $row['d_age'] . "<br>";
            echo "Address: " . $row['d_add'] . "<br>";
            echo "Color: " . $row['d_color'] . "<br>";
            echo "Height: " . $row['d_height'] . "<br>";
            echo "Weight: " . $row['d_weight'] . "<br>";
            echo "</div>";
            $count++;
        }
    } else {
        echo "No dog records found.";
    }

    mysqli_close($conn);
    ?>
</div>

</body>
</html>