<!DOCTYPE html>
<html>
<head>
<title>Professional CV Generator</title>
</head>

<body>

<h2>Create Your CV</h2>

<form action="generate.php" method="POST">

Name<br>
<input type="text" name="name"><br><br>

Email<br>
<input type="email" name="email"><br><br>

Phone<br>
<input type="text" name="phone"><br><br>

Education<br>
<textarea name="education"></textarea><br><br>

Skills<br>
<textarea name="skills"></textarea><br><br>

Experience<br>
<textarea name="experience"></textarea><br><br>

Theme<br>
<select name="theme">
<option value="modern">Modern</option>
<option value="dark">Dark</option>
<option value="minimal">Minimal</option>
<option value="elegant">Elegant</option>
<option value="creative">Creative</option>
</select>

<br><br>
<button type="submit">Generate CV</button>

</form>

</body>
</html>