<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$conn = new mysqli("localhost", "root", "", "itp");

if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];
$message = "";

// ===========================
// CANCEL REGISTRATION
// ===========================

if (isset($_GET['cancel'])) {

    $event_id = intval($_GET['cancel']);

    $delete = $conn->prepare("DELETE FROM registrations WHERE user_id=? AND event_id=?");
    $delete->bind_param("ii", $user_id, $event_id);

    if ($delete->execute()) {

        $message = "Registration cancelled successfully.";

    } else {

        $message = "Unable to cancel registration.";

    }
}

$event = null;

/* ===========================
   REGISTER EVENT
=========================== */

if (isset($_GET['id'])) {

    $event_id = intval($_GET['id']);

    // Check whether event exists
    $stmt = $conn->prepare("SELECT * FROM events WHERE event_id=?");
    $stmt->bind_param("i", $event_id);
    $stmt->execute();
    $event = $stmt->get_result()->fetch_assoc();

    if (!$event) {
        die("Event not found.");
    }

    // Check duplicate registration
    $check = $conn->prepare("SELECT * FROM registrations WHERE user_id=? AND event_id=?");
    $check->bind_param("ii", $user_id, $event_id);
    $check->execute();

    if ($check->get_result()->num_rows == 0) {

        $insert = $conn->prepare("INSERT INTO registrations(user_id,event_id) VALUES(?,?)");
        $insert->bind_param("ii", $user_id, $event_id);

        if ($insert->execute()) {
            $message = "Successfully Registered.";
        } else {
            $message = "Registration Failed.";
        }

    } else {

        $message = "You have already registered for this event.";

    }

}

/* ===========================
   MY REGISTERED EVENTS
=========================== */

$list = $conn->query("

SELECT
users.roll_no,
users.name,
events.event_id,
events.event_name,
events.category,
events.day_name,
events.event_time,
events.venue

FROM registrations

INNER JOIN users
ON registrations.user_id = users.id

INNER JOIN events
ON registrations.event_id = events.event_id

WHERE registrations.user_id = $user_id

ORDER BY events.day_name, events.event_name

");

include "header.php";
?>

<div class="container py-5">

<?php if($event){ ?>

<div class="glass-panel mb-4">

<?php if($message!=""){ ?>

<div class="alert alert-success mb-3">

<?php echo $message; ?>

</div>

<?php } ?>

<h2><?php echo htmlspecialchars($event['event_name']); ?></h2>


<p><strong>Category :</strong> <?php echo htmlspecialchars($event['category']); ?></p>

<p><strong>Day :</strong> <?php echo htmlspecialchars($event['day_name']); ?></p>

<p><strong>Time :</strong> <?php echo htmlspecialchars($event['event_time']); ?></p>

<p><strong>Venue :</strong> <?php echo htmlspecialchars($event['venue']); ?></p>

</div>

<?php } ?>

<div class="glass-panel">

<h3 class="mb-4">My Registered Events</h3>

<table class="table table-dark table-hover align-middle">

<thead>

<tr>
<th>Roll No</th>
<th>Name</th>
<th>Event Name</th>
<th>Category</th>
<th>Day</th>
<th>Time</th>
<th>Venue</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php

if($list->num_rows>0){

while($row=$list->fetch_assoc()){

?>

<tr>

<td><?php echo htmlspecialchars($row['roll_no']); ?></td>
<td><?php echo htmlspecialchars($row['name']); ?></td>
<td><?php echo htmlspecialchars($row['event_name']); ?></td>
<td><?php echo htmlspecialchars($row['category']); ?></td>
<td><?php echo htmlspecialchars($row['day_name']); ?></td>
<td><?php echo htmlspecialchars($row['event_time']); ?></td>
<td><?php echo htmlspecialchars($row['venue']); ?></td>
<td>

<a href="yregitor.php?cancel=<?php echo $row['event_id']; ?>"
   class="btn btn-danger btn-sm"
   onclick="return confirm('Cancel this registration?')">

    <i class="bi bi-trash"></i> Cancel

</a>

</td>

</tr>

<?php

}

}else{

?>

<tr>

<td colspan="8" class="text-center">

No events registered yet.

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

<?php include "footer.php"; ?>