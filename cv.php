<?php
// Validate and sanitize input
function sanitize($input) {
    return htmlspecialchars(trim($input ?? ''), ENT_QUOTES, 'UTF-8');
}

// Check if POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cv_data = [
        'name' => sanitize($_POST['name'] ?? ''),
        'email' => filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL) ?: '',
        'phone' => sanitize($_POST['phone'] ?? ''),
        'education' => sanitize($_POST['education'] ?? ''),
        'skills' => sanitize($_POST['skills'] ?? ''),
        'experience' => sanitize($_POST['experience'] ?? ''),
    ];
} else {
    $cv_data = array_fill_keys(['name', 'email', 'phone', 'education', 'skills', 'experience'], '');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CV - <?php echo $cv_data['name']; ?></title>
    <link rel="stylesheet" href="cv.css">
</head>
<body>
    <div class="cv">
        <header>
            <h1><?php echo $cv_data['name']; ?></h1>
            <p>Email: <a href="mailto:<?php echo $cv_data['email']; ?>"><?php echo $cv_data['email']; ?></a></p>
            <p>Phone: <?php echo $cv_data['phone']; ?></p>
        </header>

        <section>
            <h2>Education</h2>
            <p><?php echo nl2br($cv_data['education']); ?></p>
        </section>

        <section>
            <h2>Skills</h2>
            <p><?php echo nl2br($cv_data['skills']); ?></p>
        </section>

        <section>
            <h2>Experience</h2>
            <p><?php echo nl2br($cv_data['experience']); ?></p>
        </section>

        <button onclick="window.print();">Download CV (Print to PDF)</button>
    </div>
</body>
</html>
