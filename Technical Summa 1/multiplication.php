<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>

    <style>

        table{
            border-collapse: collapse;
            margin: auto;
        }

        td{
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 30px;
            border: 1px solid black;
        }

        .yellow{
            background-color: orange;
        }

        .red{
            background-color: teal;
        }

        h1{
            text-align: center;
        }

    </style>
</head>

<body>

<h1>Multiplication Table</h1>

<table>

<?php

for($row = 0; $row <= 10; $row++){

    echo "<tr>";

    for($col = 0; $col <= 10; $col++){

        $result = $row * $col;

        // Alternating colors
        if(($row + $col) % 2 == 0){
            $color = "yellow";
        }else{
            $color = "red";
        }

        echo "<td class='$color'>$result</td>";
    }

    echo "</tr>";
}

?>

</table>

</body>
</html>
