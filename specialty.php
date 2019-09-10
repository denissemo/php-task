<?php

if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $specialties = [
        "Computer science" => ["Programming", "Design", "Testing"],
        "Computer security" => ["Hardware", "Software"]
    ];

    $course = $_POST['course'];

    foreach ($specialties[$course] as $spec) {
        echo "<option value='$spec'>$spec</option>";
    }
}

?>
