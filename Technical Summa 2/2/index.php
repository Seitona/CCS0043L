<?php

function cubeVolume($s) {
    return pow($s, 3);
}

function rectangularPrismVolume($l, $w, $h) {
    return $l * $w * $h;
}

function cylinderVolume($r, $h) {
    return pi() * pow($r, 2) * $h;
}

function coneVolume($r, $h) {
    return (1/3) * pi() * pow($r, 2) * $h;
}

function sphereVolume($r) {
    return (4/3) * pi() * pow($r, 3);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>

    <style>

        body {
            font-family: Arial;
            background-color: #f2f2f2;
            padding: 20px;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 2px solid gray;
            padding: 15px;
            text-align: center;
            font-size: 20px;
        }

        th {
            background-color: #e6e6e6;
        }

        .title {
            font-size: 30px;
            font-weight: bold;
            background-color: #d9d9d9;
        }

    </style>

</head>

<body>

<table>

    <tr>
        <th colspan="3" class="title">Volume of Shapes</th>
    </tr>

    <tr>
        <th>Values</th>
        <th>Formula</th>
        <th>Answer</th>
    </tr>

    <tr>
        <td>s = 6</td>
        <td>V = s<sup>3</sup></td>
        <td><?php echo cubeVolume(6); ?></td>
    </tr>

    <tr>
        <td>l = 7, w = 8, h = 9</td>
        <td>V = lwh</td>
        <td><?php echo rectangularPrismVolume(7,8,9); ?></td>
    </tr>

    <tr>
        <td>r = 10, h = 11</td>
        <td>V = πr<sup>2</sup>h</td>
        <td><?php echo round(cylinderVolume(10,11), 2); ?></td>
    </tr>

    <tr>
        <td>r = 12, h = 13</td>
        <td>V = 1/3πr<sup>2</sup>h</td>
        <td><?php echo round(coneVolume(12,13), 2); ?></td>
    </tr>

    <tr>
        <td>r = 14</td>
        <td>V = 4/3πr<sup>3</sup></td>
        <td><?php echo round(sphereVolume(14), 2); ?></td>
    </tr>

</table>

</body>
</html>