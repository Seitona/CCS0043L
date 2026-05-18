<?php
$names = [
    "chris anna", "mark joseph", "julia mae", "angelo cruz", "maria clara",
    "john paul", "kevin santos", "ella rose", "patrick james", "sofia grace",
    "daniel lee", "nicole ann", "jerome villanueva", "alexander rey", "bea marie",
    "ronald james", "kristine joy", "michael angelo", "louise anne", "carlo miguel"
];

echo "<table border='1' cellpadding='10'>";
echo "<tr>
        <th>Name</th>
        <th>Number of Characters</th>
        <th>Uppercase First Character</th>
        <th>Replace Vowels with @</th>
        <th>Position of Letter a</th>
        <th>Reverse Name</th>
      </tr>";

foreach ($names as $name) {
    $length = strlen($name);
    $uppercase = ucfirst($name);
    $replaceVowels = str_replace(
        ["a", "e", "i", "o", "u", "A", "E", "I", "O", "U"],
        "@",
        $name
    );
    $positionA = strpos($name, "a");
    $reverse = strrev($name);

    if ($positionA === false) {
        $positionA = "Not found";
    }

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$length</td>";
    echo "<td>$uppercase</td>";
    echo "<td>$replaceVowels</td>";
    echo "<td>$positionA</td>";
    echo "<td>$reverse</td>";
    echo "</tr>";
}

echo "</table>";
?>