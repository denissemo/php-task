<!doctype html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
<table class="table table-striped">
    <thead class="thead-dark">
    <tr>
        <?php
        $names = ["First name", "Last name", "Middle name", "Gender", "Birthday", "Education", "Course", "Specialty", "Experience", "Salary"];

        foreach ($names as $name) {
            echo "<th scope='col'>$name</th>";
        }
        ?>
    </tr>
    </thead>
    <tbody>
    <?php
        echo "<tr>";
        if(isset($_POST['user'])) {
            $userInfo = $_POST['user'];
            foreach ($userInfo as $user) {
                echo "<th scope='col'>$user</th>";
            }
        }
        echo "</tr>";
    ?>
    </tbody>
</table>
</body>
</html>
