<!DOCTYPE html>
<html>
<head>
    <title>Portfolio Resume</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
$name = "John Jeiven Tejuco";
$location = "Malolos, Bulacan";
$phone = "+63-998-972-0113";
$email = "jbtejuco@fit.edu.ph";

$profile = "I am an aggressive IT student with experience in creating websites using HTML, CSS, and PHP. I enjoy solving problems and learning new technologies.";

$expertise = [
    "Web Development",
    "PHP Programming",
    "HTML and CSS",
    "JavaScript",
    "Database Basics",
];

$skills = [
    "Communication",
    "Teamwork",
    "Problem Solving",
    "Web Design",
    "Programming",
    "Information Technology"
];
?>

<div class="resume">

    <div class="header">
        <div>
            <h1><?php echo $name; ?></h1>
            <p><?php echo $location; ?></p>
            <small>
                <?php echo $phone; ?><br>
                <?php echo $email; ?><br>
            </small>
        </div>

    </div>

    <div class="content">

        <div class="sidebar">
            <h2>EXPERTISE</h2>
            <ul>
                <?php
                foreach ($expertise as $item) {
                    echo "<li>$item</li>";
                }
                ?>
            </ul>

            <h2>OPERATIONAL SKILLS</h2>
            <ul>
                <?php
                foreach ($skills as $skill) {
                    echo "<li>$skill</li>";
                }
                ?>
            </ul>

        </div>

        <div class="main">
            <h2>PROFILE</h2>
            <p><?php echo $profile; ?></p>

            <h2>EXPERIENCE</h2>

            <div class="job">
                <h3>OJT - Marketing Department</h3>
                <p>CEU Malolos | 2025 </p>
                <ul>
                    <li>Encoded data.</li>
                    <li>Designed PubMats.</li>
                    <li>Assisted in marketing campaigns.</li>
                </ul>
            </div>

            <h2>EDUCATION</h2>
            <p>
                <strong>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</strong><br>
                FEU Institute of Technology | 2024 - Present
            </p>
        </div>

    </div>
</div>

</body>
</html>