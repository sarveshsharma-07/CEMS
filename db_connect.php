<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "itp";

// SELECT
//     u.roll_no,
//     u.name,
//     e.event_name,
//     e.category,
//     e.day_name,
//     e.event_time,
//     e.venue,
//     r.registration_id
// FROM registrations r
// INNER JOIN users u
//     ON r.user_id = u.id
// INNER JOIN events e
//     ON r.event_id = e.event_id
// ORDER BY r.registered_on DESC;

try {
    $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);
    // Set error mode to exception to catch any connection issues
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>