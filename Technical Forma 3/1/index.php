<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 90%;
            margin: auto;
            border-collapse: collapse;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        img {
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>

<?php
$students = array(
    array("name" => "Mark", "image" => "https://i.pinimg.com/736x/24/be/b6/24beb6154b31617bd8d3451531d75f17.jpg", "age" => 36, "birthday" => "June 28, 1989", "contact" => "09123456789"),
    array("name" => "Felix", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCaFbmALgurDtWn-Cn88oBKOBBWNV-cwhmFw&s", "age" => 36, "birthday" => "October 24, 1989", "contact" => "09234567890"),
    array("name" => "Sean", "image" => "https://pbs.twimg.com/profile_images/1949524628579160064/0yHcPxsU_400x400.jpg", "age" => 36, "birthday" => "February 7, 1990", "contact" => "09345678901"),
    array("name" => "Toni", "image" => "https://images.genius.com/622ed1e3512c5a75e1787d6000e25c19.810x810x1.jpg", "age" => 34, "birthday" => "July 23, 1991", "contact" => "09456789012"),
    array("name" => "Arman", "image" => "https://aphrodite.gmanetwork.com/entertainment/articles/640_480_28_-20250115175039.jpg", "age" => 40, "birthday" => "August 8, 1986", "contact" => "09567890123"),
    array("name" => "Cha Eun Woo", "image" => "https://i.mydramalist.com/JBLjqX_5c.jpg", "age" => 29, "birthday" => "March 30, 1997", "contact" => "09678901234"),
    array("name" => "Faker", "image" => "https://static.wikia.nocookie.net/lolesports_gamepedia_en/images/5/5a/T1_Faker_2026_LCK_Cup.png/revision/latest?cb=20260122163312", "age" => 30, "birthday" => "May 7, 1996", "contact" => "09789012345"),
    array("name" => "Karina", "image" => "https://www.nme.com/wp-content/uploads/2024/08/aespa-karina-prada-ambassador-280824-696x442.jpg", "age" => 26, "birthday" => "April 11, 2000", "contact" => "09890123456"),
    array("name" => "Bato", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjJLbhU6IO2hUuh5L1DxT6ucIVbVZ2o9mPeA&s", "age" => 64, "birthday" => "January 21, 1962", "contact" => "09901234567"),
    array("name" => "Sara", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwKsYWtdaJzmpfj7qQnxMzC6UxrDaItXNfOQ&s", "age" => 47, "birthday" => "May 31, 1978", "contact" => "09012345678")
);

usort($students, function($a, $b) {
    return strcmp($a["name"], $b["name"]);
});
?>

<table>
    <tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
    </tr>

    <?php
    $no = 1;
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $no++ . "</td>";
        echo "<td>" . $student["name"] . "</td>";
        echo "<td><img src='" . $student["image"] . "'></td>";
        echo "<td>" . $student["age"] . "</td>";
        echo "<td>" . $student["birthday"] . "</td>";
        echo "<td>" . $student["contact"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>