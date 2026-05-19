<!DOCTYPE html>
<html>
<head>
    <title>Student Resume</title>

    <style>

        body{
            background-color: white;
            font-family: "Times New Roman", serif;
        }

        table{
            width: 85%;
            margin: 30px auto;
            border-collapse: collapse;
        }

        td{
            border: 2px solid black;
            text-align: center;
            padding: 10px;
            font-size: 20px;
        }

        .image-box{
            width: 300px;
            height: 220px;
        }

        .image-box img{
            width: 200px;
            height: 200px;
        }

        .title{
            font-size: 25px;
        }

        a{
            color: black;
            text-decoration: none;
        }

        a:hover{
            text-decoration: underline;
        }

        .content{
            width: 80%;
            margin: auto;
            border: 2px solid black;
            padding: 20px;
            font-size: 20px;
        }

    </style>

</head>

<body>

<table>

    <tr>

        <td class="image-box">
            <img src="https://i.mydramalist.com/JBLjqX_5c.jpg">
        </td>

        <td class="title">
            Personal information
        </td>

    </tr>

    <tr>
        <td colspan="2">
            • <a href="index.php">Career Objective</a>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            • <a href="education.php">Educational Attainment page</a>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            • <a href="skills.php">Skills page</a>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            • <a href="affiliation.php">Affiliation page</a>
        </td>
    </tr>

    <tr>
        <td colspan="2">
            • <a href="experience.php">Work Experience Page</a>
        </td>
    </tr>

</table>