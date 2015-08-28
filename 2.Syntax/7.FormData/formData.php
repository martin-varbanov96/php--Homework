<!DOCTYPE html>
<html>
<head>
    <title>Get Form Data</title>
</head>
<body>
<form action="GetFormData.php" method="post">
    <input type="text" name="name" placeholder="Name...">
    <input type="text" name="age" placeholder="Age...">
    <input type="radio" name="sex" value="male" id="male-radio">
    <label for="male-radio">Male</label>
    <input type="radio" name="sex" value="female" id="female-radio">
    <label for="female-radio">Female</label>
    <input type="submit" value="Submit">
</form>
<?php if (isset($_POST['name'], $_POST['age'], $_POST['sex'])):?>
    <p>
        My name is <?= htmlentities($_POST['name']) ?>. I am <?= htmlentities($_POST['age']) ?> years old. I am <?= htmlentities($_POST['sex']) ?>.
    </p>
<?php endif; ?>
</body>
</html>