<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['name'] ?? "Participant";

include "header.php";
?>

<section class="dashboard-hero py-5">

    <div class="container">

        <!-- Hero -->

        <div class="hero-card text-center mb-5">

            <span class="hero-badge">
                PRAVAH 2027
            </span>

            <h1 class="display-4 fw-bold mt-4">
                Complete Event Schedule
            </h1>

            <p class="lead text-light mt-3">
                Plan your entire PRAVAH journey with the official day-wise
                schedule of Technical, Cultural, Sports, Literary,
                Non-Technical and Night Events.
            </p>

        </div>

        <!-- ================= DAY 1 ================= -->

        <div class="glass-panel mb-5">

            <div class="d-flex align-items-center mb-4">

                <h2 class="mb-0 text-warning">
                    Day 1 Schedule
                </h2>

            </div>

            <div class="table-responsive">

                <table class="table table-dark table-hover align-middle">

                    <thead>

                        <tr>

                            <th width="18%">Time</th>
                            <th width="32%">Event</th>
                            <th width="18%">Category</th>
                            <th>Venue</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>09:00 AM - 11:00 AM</td>
                            <td>Coding Challenge</td>
                            <td>Technical</td>
                            <td>Computer Lab 1</td>

                        </tr>

                        <tr>

                            <td>09:00 AM - 11:00 AM</td>
                            <td>Debate</td>
                            <td>Literary</td>
                            <td>Seminar Hall</td>

                        </tr>

                        <tr>

                            <td>09:00 AM - 11:00 AM</td>
                            <td>Lawn Tennis</td>
                            <td>Sports</td>
                            <td>Tennis Court</td>

                        </tr>

                        <tr>

                            <td>10:00 AM - 12:00 PM</td>
                            <td>Murder Mystery</td>
                            <td>Non-Technical</td>
                            <td>Auditorium</td>

                        </tr>

                        <tr>

                            <td>11:00 AM - 01:00 PM</td>
                            <td>Hackathon</td>
                            <td>Technical</td>
                            <td>Innovation Lab</td>

                        </tr>

                        <tr>

                            <td>11:00 AM - 01:00 PM</td>
                            <td>Toggle</td>
                            <td>Literary</td>
                            <td>Conference Hall</td>

                        </tr>

                        <tr>

                            <td>11:00 AM - 01:00 PM</td>
                            <td>Volleyball</td>
                            <td>Sports</td>
                            <td>Volleyball Court</td>

                        </tr>

                        <tr>

                            <td>12:00 PM - 02:00 PM</td>
                            <td>Horcrux Hunt</td>
                            <td>Non-Technical</td>
                            <td>Campus Ground</td>

                        </tr>

                        <tr>

                            <td>02:00 PM - 04:00 PM</td>
                            <td>Badminton</td>
                            <td>Sports</td>
                            <td>Indoor Sports Hall</td>

                        </tr>

                        <tr>

                            <td>02:00 PM - 04:00 PM</td>
                            <td>Fusion Without Flames</td>
                            <td>Non-Technical</td>
                            <td>Open Arena</td>

                        </tr>

                        <tr>

                            <td>03:00 PM - 05:00 PM</td>
                            <td>Web Designing</td>
                            <td>Technical</td>
                            <td>Computer Lab 2</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

                <!-- ================= DAY 2 ================= -->

        <div class="glass-panel mb-5">

            <h2 class="text-warning mb-4">
                Day 2 Schedule
            </h2>

            <div class="table-responsive">

                <table class="table table-dark table-hover align-middle">

                    <thead>

                        <tr>

                            <th width="18%">Time</th>
                            <th width="32%">Event</th>
                            <th width="18%">Category</th>
                            <th>Venue</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>09:00 AM - 11:00 AM</td>
                            <td>Gully Cricket</td>
                            <td>Sports</td>
                            <td>College Ground</td>

                        </tr>

                        <tr>

                            <td>09:00 AM - 11:00 AM</td>
                            <td>Quizathon</td>
                            <td>Non-Technical</td>
                            <td>Seminar Hall</td>

                        </tr>

                        <tr>

                            <td>10:00 AM - 12:00 PM</td>
                            <td>Rasaverse</td>
                            <td>Cultural</td>
                            <td>Main Stage</td>

                        </tr>

                        <tr>

                            <td>11:00 AM - 01:00 PM</td>
                            <td>Football</td>
                            <td>Sports</td>
                            <td>Football Ground</td>

                        </tr>

                        <tr>

                            <td>11:00 AM - 01:00 PM</td>
                            <td>Designfinity</td>
                            <td>Non-Technical</td>
                            <td>Creative Lab</td>

                        </tr>

                        <tr>

                            <td>12:00 PM - 02:00 PM</td>
                            <td>Rap'arazzi</td>
                            <td>Cultural</td>
                            <td>Open Theatre</td>

                        </tr>

                        <tr>

                            <td>02:00 PM - 04:00 PM</td>
                            <td>Satoliya</td>
                            <td>Sports</td>
                            <td>Sports Arena</td>

                        </tr>

                        <tr>

                            <td>02:00 PM - 04:00 PM</td>
                            <td>Taare Zameen Par</td>
                            <td>Non-Technical</td>
                            <td>Art Room</td>

                        </tr>

                        <tr>

                            <td>03:00 PM - 05:00 PM</td>
                            <td>Sur</td>
                            <td>Cultural</td>
                            <td>Music Hall</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <!-- ================= DAY 3 ================= -->

        <div class="glass-panel mb-5">

            <h2 class="text-warning mb-4">
                Day 3 Schedule
            </h2>

            <div class="table-responsive">

                <table class="table table-dark table-hover align-middle">

                    <thead>

                        <tr>

                            <th width="18%">Time</th>
                            <th width="32%">Event</th>
                            <th width="18%">Category</th>
                            <th>Venue</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>09:00 AM - 11:00 AM</td>
                            <td>Esports</td>
                            <td>Sports</td>
                            <td>Gaming Arena</td>

                        </tr>

                        <tr>

                            <td>09:00 AM - 11:00 AM</td>
                            <td>Rawaz</td>
                            <td>Cultural</td>
                            <td>Main Stage</td>

                        </tr>

                        <tr>

                            <td>10:00 AM - 12:00 PM</td>
                            <td>Squid Game</td>
                            <td>Non-Technical</td>
                            <td>Sports Arena</td>

                        </tr>

                        <tr>

                            <td>11:00 AM - 01:00 PM</td>
                            <td>Chess</td>
                            <td>Sports</td>
                            <td>Indoor Games Hall</td>

                        </tr>

                        <tr>

                            <td>11:00 AM - 01:00 PM</td>
                            <td>Street Warz</td>
                            <td>Cultural</td>
                            <td>Open Stage</td>

                        </tr>

                        <tr>

                            <td>12:00 PM - 02:00 PM</td>
                            <td>Scream & Win</td>
                            <td>Non-Technical</td>
                            <td>Fun Zone</td>

                        </tr>

                        <tr>

                            <td>02:00 PM - 04:00 PM</td>
                            <td>Basketball</td>
                            <td>Sports</td>
                            <td>Basketball Court</td>

                        </tr>

                        <tr>

                            <td>02:00 PM - 04:00 PM</td>
                            <td>Abhivyakti</td>
                            <td>Cultural</td>
                            <td>Auditorium</td>

                        </tr>

                        <tr>

                            <td>03:00 PM - 05:00 PM</td>
                            <td>Escape Room</td>
                            <td>Non-Technical</td>
                            <td>Innovation Block</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

                <!-- ================= DAY 4 ================= -->

        <div class="glass-panel mb-5">

            <h2 class="text-warning mb-4">
                Day 4 Schedule
            </h2>

            <div class="table-responsive">

                <table class="table table-dark table-hover align-middle">

                    <thead>

                        <tr>

                            <th width="18%">Time</th>
                            <th width="32%">Event</th>
                            <th width="18%">Category</th>
                            <th>Venue</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>09:00 AM - 11:00 AM</td>
                            <td>SKIT Roadies</td>
                            <td>Non-Technical</td>
                            <td>Campus Arena</td>
                        </tr>

                        <tr>
                            <td>10:00 AM - 12:00 PM</td>
                            <td>Rang</td>
                            <td>Cultural</td>
                            <td>Art Gallery</td>
                        </tr>

                        <tr>
                            <td>11:00 AM - 01:00 PM</td>
                            <td>Spelling Bee</td>
                            <td>Literary</td>
                            <td>Seminar Hall</td>
                        </tr>

                        <tr>
                            <td>12:00 PM - 02:00 PM</td>
                            <td>IPL Auction</td>
                            <td>Non-Technical</td>
                            <td>Conference Hall</td>
                        </tr>

                        <tr>
                            <td>02:00 PM - 04:00 PM</td>
                            <td>Thirak</td>
                            <td>Cultural</td>
                            <td>Main Stage</td>
                        </tr>

                        <tr>
                            <td>03:00 PM - 05:00 PM</td>
                            <td>MUN</td>
                            <td>Literary</td>
                            <td>Conference Room</td>
                        </tr>

                        <tr class="table-warning text-dark fw-bold">
                            <td>07:00 PM - 09:00 PM</td>
                            <td>Annual Day Celebration</td>
                            <td>Night Event</td>
                            <td>Main Stage</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <!-- ================= DAY 5 ================= -->

        <div class="glass-panel mb-5">

            <h2 class="text-warning mb-4">
                Day 5 Schedule
            </h2>

            <div class="table-responsive">

                <table class="table table-dark table-hover align-middle">

                    <thead>

                        <tr>

                            <th width="18%">Time</th>
                            <th width="32%">Event</th>
                            <th width="18%">Category</th>
                            <th>Venue</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>09:00 AM - 11:00 AM</td>
                            <td>Tug of War</td>
                            <td>Sports</td>
                            <td>College Ground</td>
                        </tr>

                        <tr>
                            <td>10:00 AM - 12:00 PM</td>
                            <td>Kavyanjali</td>
                            <td>Literary</td>
                            <td>Auditorium</td>
                        </tr>

                        <tr>
                            <td>11:00 AM - 01:00 PM</td>
                            <td>Real Life Among Us</td>
                            <td>Non-Technical</td>
                            <td>Campus Ground</td>
                        </tr>

                        <tr>
                            <td>12:00 PM - 02:00 PM</td>
                            <td>The Persona Show</td>
                            <td>Cultural</td>
                            <td>Convention Hall</td>
                        </tr>

                        <tr>
                            <td>02:00 PM - 04:00 PM</td>
                            <td>Carrom</td>
                            <td>Sports</td>
                            <td>Indoor Games Hall</td>
                        </tr>

                        <tr>
                            <td>03:00 PM - 05:00 PM</td>
                            <td>AD Flix</td>
                            <td>Non-Technical</td>
                            <td>Mini Auditorium</td>
                        </tr>

                        <tr class="table-warning text-dark fw-bold">
                            <td>07:00 PM - 09:00 PM</td>
                            <td>DJ Night</td>
                            <td>Night Event</td>
                            <td>Open Air Arena</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <!-- ================= DAY 6 ================= -->

        <div class="glass-panel mb-5">

            <h2 class="text-warning mb-4">
                Day 6 Schedule
            </h2>

            <div class="table-responsive">

                <table class="table table-dark table-hover align-middle">

                    <thead>

                        <tr>

                            <th width="18%">Time</th>
                            <th width="32%">Event</th>
                            <th width="18%">Category</th>
                            <th>Venue</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>09:00 AM - 11:00 AM</td>
                            <td>Kabbadi</td>
                            <td>Sports</td>
                            <td>Sports Ground</td>
                        </tr>

                        <tr>
                            <td>10:00 AM - 12:00 PM</td>
                            <td>Hands On Art</td>
                            <td>Non-Technical</td>
                            <td>Fine Arts Room</td>
                        </tr>

                        <tr>
                            <td>11:00 AM - 01:00 PM</td>
                            <td>Open Mic</td>
                            <td>Literary</td>
                            <td>Auditorium</td>
                        </tr>

                        <tr>
                            <td>02:00 PM - 04:00 PM</td>
                            <td>Table Tennis</td>
                            <td>Sports</td>
                            <td>Indoor Sports Hall</td>
                        </tr>

                        <tr>
                            <td>03:00 PM - 05:00 PM</td>
                            <td>Silent DJ</td>
                            <td>Non-Technical</td>
                            <td>Open Arena</td>
                        </tr>

                        <tr>
                            <td>04:00 PM - 06:00 PM</td>
                            <td>Dodgeball</td>
                            <td>Sports</td>
                            <td>Multipurpose Court</td>
                        </tr>

                        <tr class="table-warning text-dark fw-bold">
                            <td>07:00 PM - 09:00 PM</td>
                            <td>Celebrity Night</td>
                            <td>Night Event</td>
                            <td>Grand Stage</td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

                <!-- ================= DAY 7 ================= -->

        <div class="glass-panel mb-5">

            <h2 class="text-warning mb-4">
                Day 7 Schedule
            </h2>

            <div class="table-responsive">

                <table class="table table-dark table-hover align-middle">

                    <thead>

                        <tr>

                            <th width="18%">Time</th>
                            <th width="32%">Event</th>
                            <th width="18%">Category</th>
                            <th>Venue</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>09:00 AM - 11:00 AM</td>
                            <td>Valedictory Session</td>
                            <td>Official</td>
                            <td>Main Auditorium</td>

                        </tr>

                        <tr>

                            <td>11:00 AM - 01:00 PM</td>
                            <td>Prize Distribution Ceremony</td>
                            <td>Official</td>
                            <td>Main Stage</td>

                        </tr>

                        <tr>

                            <td>02:00 PM - 03:30 PM</td>
                            <td>Vote of Thanks</td>
                            <td>Official</td>
                            <td>Main Stage</td>

                        </tr>

                        <tr>

                            <td>03:30 PM - 05:00 PM</td>
                            <td>Closing Ceremony</td>
                            <td>Official</td>
                            <td>Main Stage</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

        <!-- Buttons -->

        <div class="text-center mb-5">

            <button onclick="window.print()"
                    class="btn btn-gradient btn-lg me-3">

                <i class="bi bi-printer-fill"></i>
                Print Schedule

            </button>

            <a href="dashboard.php"
               class="btn btn-outline-light btn-lg">

                <i class="bi bi-house-door-fill"></i>
                Back to Dashboard

            </a>

        </div>

    </div>

</section>

<?php include "footer.php"; ?>

<script>

    document.addEventListener("DOMContentLoaded", function () {

        const rows = document.querySelectorAll("tbody tr");

        rows.forEach(function (row) {

            row.addEventListener("mouseenter", function () {

                row.style.transition = "0.3s";

            });

        });

    });

</script>

</body>
</html>