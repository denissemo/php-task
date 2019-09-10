<!doctype html>
<html lang="en">
<body>
<?php
    $names = ["firstName", "lastName", "middleName", "gender", "birthday", "education", "specialty", "experience", "salary"];
    foreach ($names as $name) {
        $item = strip_tags($_POST[$name]);
        echo "<p>$name - $item</p>";
    }
?>
</body>
</html>
