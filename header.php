<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>PRAVAH 2027</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="icon" href="pravah_logo.png" type="image/png">

</head>

<body>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<div class="page-wrapper">

<nav class="navbar navbar-expand-lg navbar-dark pravah-navbar">

    <div class="container">

        <a class="navbar-brand brand-logo" href="dashboard.php">
            <img src="pravah_logo.png" alt="PRAVAH Logo">
            <span>PRAVAH 2027</span>
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mx-auto">

                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="schedule.php">Schedule</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="events.php">Events</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="tp.php">Team Pravah</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="yregitor.php">Registrations</a>
                </li>

            </ul>

            <?php if(isset($_SESSION['user_id'])): ?>

            <div class="d-flex align-items-center">

                <span class="text-white me-3">
                    <i class="bi bi-person-circle"></i>
                    <?php echo htmlspecialchars($_SESSION['name']); ?>
                </span>

                <a href="logout.php" class="btn btn-outline-light btn-sm">
                    Logout
                </a>

            </div>

            <?php endif; ?>

        </div>

    </div>

</nav>

<main class="content-wrapper">