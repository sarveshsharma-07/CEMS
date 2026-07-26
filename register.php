<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - PRAVAH </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/lr.css">
    <link rel="icon" href="pravah_logo.png" style="border-radius:50%">
</head>
<body>

<div class="split-container">

    <!-- Left Panel -->
    <div class="brand-section">

        <div class="logo">
            <img src="pravah_logo.png" alt="PRAVAH Logo">
            <span>PRAVAH 2027</span>
        </div>


        <div class="my-auto py-5">

            <h1 class="brand-title">
                Join Us
            </h1>

            <p class="brand-subtitle text-uppercase mt-2">
                Create your account contextually.
            </p>

        </div>

        <div class="small text-muted">
            7 DAYS • UNLIMITED EXPERIENCES • ONE PRAVAH
        </div>

    </div>

    <!-- Right Panel -->

    <div class="form-section">

        <div class="glass-card">

            <h2 class="h4 fw-semibold mb-1">
                Get Started
            </h2>

            <p class="text-muted small mb-4">
                Create a new system account
            </p>

            <?php
            if(isset($_GET['error']))
            {
                if($_GET['error']=="exists")
                {
                    echo '<div class="alert alert-danger">Email already exists.</div>';
                }

                if($_GET['error']=="password")
                {
                    echo '<div class="alert alert-warning">Passwords do not match.</div>';
                }

                if($_GET['error']=="empty")
                {
                    echo '<div class="alert alert-warning">Please fill in all fields.</div>';
                }
                if($_GET['error']=="rolltaken")
                {
                    echo '<div class="alert alert-danger">
                            Roll Number already exists.
                        </div>';
                }
            }

            if(isset($_GET['success']))
            {
                echo '<div class="alert alert-success">Registration successful. Please login.</div>';
            }
            ?>

            <form action="checkregister.php" method="POST">

                <!-- Name -->

                <div class="custom-form-group">

                    <label for="name">Full Name</label>

                    <div class="input-icon-wrapper">

                        <i class="bi bi-person form-icon"></i>

                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="form-control custom-input"
                            placeholder="Enter your full name"
                            required>

                    </div>

                </div>

                <!-- Roll Number -->

                <div class="custom-form-group">

                    <label for="roll_no">Roll Number</label>

                    <div class="input-icon-wrapper">

                        <i class="bi bi-card-text form-icon"></i>

                        <input
                            type="text"
                            name="roll_no"
                            id="roll_no"
                            class="form-control custom-input"
                            placeholder="Ex. 25ESKCS23"
                            required>

                    </div>

                </div>

                <!-- Email -->

                <div class="custom-form-group">

                    <label for="email">Email</label>

                    <div class="input-icon-wrapper">

                        <i class="bi bi-envelope form-icon"></i>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control custom-input"
                            placeholder="Enter your email"
                            required>

                    </div>

                </div>

                <!-- Password -->

                <div class="custom-form-group">

                    <label for="password">Password</label>

                    <div class="input-icon-wrapper">

                        <i class="bi bi-lock form-icon"></i>

                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control custom-input"
                            placeholder="Create a password"
                            required>

                    </div>

                </div>

                <!-- Confirm Password -->

                <div class="custom-form-group">

                    <label for="confirm_password">Confirm Password</label>

                    <div class="input-icon-wrapper">

                        <i class="bi bi-lock-fill form-icon"></i>

                        <input
                            type="password"
                            name="confirm_password"
                            id="confirm_password"
                            class="form-control custom-input"
                            placeholder="Retype your password"
                            required>

                    </div>

                </div>

                <button
                    type="submit"
                    class="btn btn-auth-primary w-100 mt-4">

                    REGISTER →

                </button>

            </form>

            <div class="text-center small text-muted mt-4">

                Already have an account?

                <a href="login.php"
                   class="text-white text-decoration-none fw-semibold">

                    Login Now

                </a>

            </div>

        </div>

    </div>

</div>

<script src="login.js"></script>

</body>
</html>