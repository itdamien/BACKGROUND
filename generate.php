<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$education = $_POST['education'];
$skills = $_POST['skills'];
$experience = $_POST['experience'];
$theme = $_POST['theme'];

?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="themes/<?php echo $theme; ?>.css">
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

<form action="download.php" method="POST">

<input type="hidden" name="name" value="<?php echo $name ?>">
<input type="hidden" name="email" value="<?php echo $email ?>">
<input type="hidden" name="phone" value="<?php echo $phone ?>">
<input type="hidden" name="education" value="<?php echo $education ?>">
<input type="hidden" name="skills" value="<?php echo $skills ?>">
<input type="hidden" name="experience" value="<?php echo $experience ?>">
<input type="hidden" name="theme" value="<?php echo $theme ?>">

<button type="submit">Download PDF</button>

</form>

</div>

</body>
</html>