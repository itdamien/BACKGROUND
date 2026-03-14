<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$education = $_POST['education'];
$skills = $_POST['skills'];
$experience = $_POST['experience'];
?>

<!DOCTYPE html>
<html>
<head>
<title>My CV</title>
<link rel="stylesheet" href="style.css">

<script>
function downloadCV(){
    window.print();
}
</script>

</head>

<body>

<div class="cv">

<h1><?php echo $name; ?></h1>

<p>Email: <?php echo $email; ?></p>
<p>Phone: <?php echo $phone; ?></p>

<h2>Education</h2>
<p><?php echo $education; ?></p>

<h2>Skills</h2>
<p><?php echo $skills; ?></p>

<h2>Experience</h2>
<p><?php echo $experience; ?></p>

<button onclick="downloadCV()">Download CV</button>

</div>

</body>
</html>