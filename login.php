<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PRAVAH 2027</title>
    <link rel="icon" href="pravah_logo.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Your CSS -->
    <link rel="stylesheet" href="css/lr.css">
</head>
<body>

<div class="split-container">

    <!-- Left Section -->
    <div class="brand-section">

        <div class="logo">
            <img src="pravah_logo.png" alt="PRAVAH Logo">
            <span>PRAVAH 2027</span>
        </div>

        <div class="my-auto py-5">

            <h1 class="brand-title">
                PRAVAH<br>
                <span class="grey">2027</span>
            </h1>

            <p class="brand-subtitle text-uppercase mt-2">
                Where ideas flow, impact grows.
            </p>

            <p class="text-muted mt-4" style="max-width:400px;">
                A 7-day celebration of talent, innovation and culture.
                Join us in creating memories that last a lifetime.<br>
            </p>

            <a href="https://pravah.skit.ac.in/" class="text-white text-decoration-none border-bottom pb-1 d-inline-block mt-3 small">
                LEARN MORE →
            </a>

        </div>

        <p class="brand-subtitle text-uppercase mt-2">
                <b>Made by Sarvesh Sharma.</b>
            </p>


        <div class="small text-muted">
            7 DAYS • UNLIMITED EXPERIENCES • ONE PRAVAH
        </div>

    </div>

    <!-- Right Section -->


    <div class="form-section">

        <div class="glass-card">

            <h2 class="h4 fw-semibold mb-1">Welcome Back </h2>

            <p class="text-muted small mb-4">
                Login to continue to your account
            </p>

            <?php
            if (isset($_GET['signup']) && $_GET['signup'] == "success") {
                echo '
                <div class="success-message">
                    <i class="bi bi-check-circle-fill"></i>
                    Registration successful! Please login.
                </div>';
            }
            ?>

            <?php
            if(isset($_GET['error']))
            {
                if($_GET['error']=="invalid")
                {
                    echo '<div class="alert alert-danger">Invalid Email or Password.</div>';
                }

                if($_GET['error']=="empty")
                {
                    echo '<div class="alert alert-warning">Please fill in all fields.</div>';
                }
            }
            ?>

            <form action="checklogin.php" method="POST">

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
                            placeholder="Enter your password"
                            required>

                    </div>

                </div>

                <div class="d-flex justify-content-between align-items-center small mb-4">

                    <div class="form-check">

                        <input class="form-check-input bg-transparent border-secondary"
                               type="checkbox"
                               id="remember">

                        <label class="form-check-label text-muted" for="remember">
                            Remember me
                        </label>

                    </div>

                    <a href="#" class="text-muted text-decoration-none">
                        Forgot Password?
                    </a>

                </div>

                <button class="btn btn-auth-primary w-100 mb-3" type="submit">
                    LOGIN →
                </button>

                <div class="hr-text">
                    OR
                </div>

                <button
                    type="button"
                    class="btn btn-auth-outline w-100 d-flex align-items-center justify-content-center gap-2 mb-4">

                    <i class="bi bi-google"></i>

                    Continue with Google

                </button>

            </form>

            <div class="text-center small text-muted">

                New here?

                <a href="register.php"
                   class="text-white text-decoration-none fw-semibold">

                    Register Now

                </a>

            </div>

        </div>

    </div>

</div>

<script src="login.js"></script>

</body>
</html>