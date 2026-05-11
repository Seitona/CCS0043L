<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            background-color: #f0f4ff;
        }

        .container{
            width: 400px;
            margin: 40px auto;
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
        }

        h2{
            text-align: center;
            color: blue;
        }

        label{
            display: block;
            margin-top: 10px;
        }

        input, select{
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        .btn{
            background-color: blue;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 15px;
            cursor: pointer;
        }

        .output{
            margin-top: 20px;
            padding: 10px;
            border: 1px solid blue;
            background-color: #e6f0ff;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Student Registration Form</h2>

    <form method="POST">

        <label>First Name</label>
        <input type="text" name="fname" required>

        <label>Middle Name</label>
        <input type="text" name="mname">

        <label>Last Name</label>
        <input type="text" name="lname" required>

        <label>Age</label>
        <input type="number" name="age" required>

        <label>Gender</label>
        <select name="gender">
            <option>Male</option>
            <option>Female</option>
        </select>

        <label>Course</label>
        <input type="text" name="course" required>

        <input type="submit" name="submit" value="Register" class="btn">

    </form>

<?php

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    $fullname = strtoupper($fname . " " . $mname . " " . $lname);

    echo "<div class='output'>";

    echo "<h3>Student Information</h3>";

    echo "Full Name: " . $fullname . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Gender: " . ucfirst($gender) . "<br>";
    echo "Course: " . strtoupper($course) . "<br>";

    echo "</div>";
}

?>

</div>

</body>
</html>