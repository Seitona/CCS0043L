<?php
$conn = mysqli_connect("localhost", "root", "", "dog_database");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$message = "";

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (d_name, d_breed, d_age, d_add, d_color, d_height, d_weight)
            VALUES ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if (mysqli_query($conn, $sql)) {
        $message = "Dog information saved successfully!";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 30px auto;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 8px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
        }

        .message {
            text-align: center;
            color: green;
            margin-bottom: 10px;
        }

        a {
            display: block;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Dog Information</h2>

    <p class="message"><?php echo $message; ?></p>

    <form method="POST">
        <label>Name</label>
        <input type="text" name="name" required>

        <label>Breed</label>
        <input type="text" name="breed" required>

        <label>Age</label>
        <input type="text" name="age" required>

        <label>Address</label>
        <input type="text" name="address" required>

        <label>Color</label>
        <input type="text" name="color" required>

        <label>Height</label>
        <input type="text" name="height" required>

        <label>Weight</label>
        <input type="text" name="weight" required>

        <button type="submit" name="save" style="background-color: #4CAF50; color: white;">save</button>
    </form>

    <a href="DogView.php">View Dog Records</a>
    <p>© 3T Sahur</p>
</div>

</body>
</html>