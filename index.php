<!doctype html>
<html lang="en">
<?php include 'header.php'; ?>
<body>
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Login</h5>
                    <form class="needs-validation" novalidate>
                        <div class="form-group">
                            <input type="text" class="form-control" name="login" id="login" placeholder="Login" required>
                            <div class="invalid-feedback">
                                Please enter a login.
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                                   required>
                            <div class="invalid-feedback">
                                Please enter a password.
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Enter</button>

                        <div class="text-center">
                            <a href="anketa.php" id="nextPage" class="isDisabled">Next page - anketa.php</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
