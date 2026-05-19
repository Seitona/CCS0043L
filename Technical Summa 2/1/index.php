<?php
$fruits = [
    [
        "name"=>"Apple",
        "image"=>"https://www.collinsdictionary.com/images/full/apple_158989157.jpg",
        "description"=>"A sweet red fruit.",
        "facts"=>"Apples float because they are 25% air."
    ],

    [
        "name"=>"Banana",
        "image"=>"https://nutritionsource.hsph.harvard.edu/wp-content/uploads/2018/08/bananas-1354785_1920-1024x683.jpg",
        "description"=>"A long yellow fruit.",
        "facts"=>"Bananas are berries."
    ],

    [
        "name"=>"Cherry",
        "image"=>"https://www.shutterstock.com/image-vector/two-cherries-isolated-on-white-600nw-2425952009.jpg",
        "description"=>"A small red fruit.",
        "facts"=>"Cherries belong to the rose family."
    ],

    [
        "name"=>"Grapes",
        "image"=>"https://static.wikia.nocookie.net/fruit/images/a/a1/Download_%286%29.jpg/revision/latest/thumbnail/width/360/height/450?cb=20250214145209",
        "description"=>"Small round fruits.",
        "facts"=>"Grapes can be made into wine."
    ],

    [
        "name"=>"Kiwi",
        "image"=>"https://cdn.britannica.com/45/126445-050-4C0FA9F6/Kiwi-fruit.jpg",
        "description"=>"A brown fruit with green flesh.",
        "facts"=>"Kiwi has more vitamin C than oranges."
    ],

    [
        "name"=>"Mango",
        "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSe4OzPMUZFtQ-TJxNf5k37h07WhwkJjgkezQ&s",
        "description"=>"A sweet tropical fruit.",
        "facts"=>"Mango is called the king of fruits."
    ],

    [
        "name"=>"Orange",
        "image"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShDZibBehmTA9pQayLFU2USSAPr8MBVIhBdQ&s",
        "description"=>"A citrus fruit.",
        "facts"=>"Oranges are rich in vitamin C."
    ],

    [
        "name"=>"Papaya",
        "image"=>"https://andamangreengrocers.com/wp-content/uploads/2021/12/1639840955890-e1639848809306.jpg",
        "description"=>"A soft orange tropical fruit.",
        "facts"=>"Papaya helps digestion."
    ],

    [
        "name"=>"Pineapple",
        "image"=>"https://www.healthxchange.sg/adobe/dynamicmedia/deliver/dm-aid--c06c2aed-90cf-4360-a423-7f053b2a44d9/pineapple-health-benefits-and-ways-to-enjoy.jpg?preferwebp=true",
        "description"=>"A tropical fruit with spiky skin.",
        "facts"=>"Pineapple is made of many berries."
    ],

    [
        "name"=>"Watermelon",
        "image"=>"https://weresmartworld.com/sites/default/files/styles/full_screen/public/2021-04/watermeloen_2.jpg?itok=CCYHLr5M",
        "description"=>"A large juicy fruit.",
        "facts"=>"Watermelon is about 92% water."
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Fruits</title>

    <style>

        body {
            font-family: Arial;
            background: #f4f8f3;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: green;
            margin-bottom: 30px;
        }

        .container {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 0 10px #ccc;
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }

        h2 {
            color: darkgreen;
        }

    </style>
</head>

<body>

<h1>My Fruits</h1>

<div class="container">

<?php foreach ($fruits as $fruit): ?>

    <div class="card">

        <img src="<?php echo $fruit['image']; ?>">

        <h2><?php echo $fruit['name']; ?></h2>

        <p><?php echo $fruit['description']; ?></p>

        <strong>Fact:</strong>

        <p><?php echo $fruit['facts']; ?></p>

    </div>

<?php endforeach; ?>

</div>

</body>
</html>