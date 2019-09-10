<!doctype html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Anketa</h5>
                    <form action="table.php" method="post" class="needs-validation" novalidate>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user[0]" id="firstName"
                                   placeholder="Enter name" required>
                            <div class="invalid-feedback">
                                Please enter a first name.
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="user[1]" id="lastName"
                                   placeholder="Enter last name"
                                   required>
                            <div class="invalid-feedback">
                                Please enter a last name.
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="user[2]" id="middleName"
                                   placeholder="Enter middle name">
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="user[3]" id="male" value="male"
                                       checked>
                                <label class="form-check-label" for="male">Male</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="user[3]" id="female" value="female">
                                <label class="form-check-label" for="female">Female</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="birthday" class="col-3 col-form-label">Birthday</label>
                            <div class="col-6">
                                <input class="form-control" type="date" name="user[4]" <?php $date = date("Y-m-d");
                                echo "value=\"$date\""; ?> id="birthday">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="education">Education</label>
                            <select id="education" name="user[5]" class="form-control" required>
                                <?php
                                $levels = ["Associate", "Bachelor's", "Master's", "Doctoral"];

                                foreach ($levels as $level) {
                                    echo "<option value='$level'>$level degree</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="course">Course</label>
                            <select id="course" name="user[6]" class="form-control" required>
                                <option value=""></option>
                                <?php
                                $courses = ["Computer science", "Computer security"];

                                foreach ($courses as $course) {
                                    echo "<option value='$course'>$course</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="specialty">Specialty</label>
                            <select id="specialty" name="user[7]" class="form-control" required></select>
                        </div>

                        <div class="form-group">
                            <label for="experience">Experience</label>
                            <input type="number" name="user[8]" class="form-control" min="0" id="experience"
                                   required>
                            <div class="invalid-feedback">
                                Please enter a experience in years.
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="number" name="user[9]" class="form-control" min="1" id="salary" required>
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
<script>
    $('#course').change(function() {
        const courseValue = $("#course option:selected").val();
        const spec = $("#specialty");

        if (courseValue === '') {
            spec.attr('disabled', true);
            spec.empty();
        } else {
            spec.attr('disabled', false);
            spec.load('specialty.php', {
                course: courseValue
            });
        }
    });
</script>
</html>
