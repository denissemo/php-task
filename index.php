<!doctype html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Simple form</h5>
                    <form action="form.php" method="post" class="needs-validation" novalidate>
                        <div class="form-group">
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Enter name" required>
                            <div class="invalid-feedback">
                                Please enter a first name.
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Enter last name"
                                   required>
                            <div class="invalid-feedback">
                                Please enter a last name.
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="middleName" id="middleName" placeholder="Enter middle name">
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                       checked>
                                <label class="form-check-label" for="male">Male</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-3 col-form-label">Birthday</label>
                            <div class="col-6">
                                <input class="form-control" type="date" name="birthday" <?php $date = date("Y-m-d");
                                echo "value=\"$date\""; ?> id="birthday">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="education">Education</label>
                            <select id="education" name="education" class="form-control" required>
                                <?php
                                $levels = ["Associate", "Bachelor's", "Master's", "Doctoral"];

                                foreach ($levels as $level) {
                                    echo "<option value='$level'>$level degree</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="specialty">Specialty</label>
                            <select id="specialty" name="specialty" class="form-control" required>
                                <?php
                                $courses = ["Computer science", "Computer security"];
                                $specialties = [
                                        "Computer science" => ["Programming", "Design", "Testing"],
                                        "Computer security" => ["Hardware", "Software"]
                                ];

                                foreach ($courses as $course) {
                                    echo "<optgroup label='$course'>";
                                        foreach ($specialties[$course] as $spec) {
                                            echo "<option value='$spec'>$spec</option>";
                                        }
                                    echo "</optgroup>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="experience">Experience</label>
                            <input type="number" name="experience" class="form-control" min="0" id="experience" required>
                            <div class="invalid-feedback">
                                Please enter a experience in years.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="number" name="salary" class="form-control" min="1" id="salary" required>
                            <div class="invalid-feedback">
                                Please enter a salary.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
