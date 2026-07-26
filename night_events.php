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

        <!-- HERO -->

        <div class="hero-card text-center mb-5">

            <span class="hero-badge">
                NIGHT EVENTS
            </span>

            <h1 class="display-4 fw-bold mt-4">
                PRAVAH 2027 Night Events
            </h1>

            <p class="lead text-light mt-4">
                As the sun sets, PRAVAH comes alive with spectacular evenings
                filled with music, entertainment, celebrations and unforgettable
                performances. Join us every night from 7:00 PM onwards.
            </p>

            <div class="hero-buttons mt-4">

                <a href="#events" class="btn btn-gradient me-3">
                    Explore Events
                </a>

                <a href="dashboard.php"
                   class="btn btn-outline-light">
                    Back to Dashboard
                </a>

            </div>

        </div>

        <!-- SEARCH -->

        <div class="glass-panel p-4 mb-5">

            <div class="row g-3">

                <div class="col-md-8">

                    <input
                        type="text"
                        id="eventSearch"
                        class="form-control"
                        placeholder="Search Night Events..."
                        onkeyup="searchEvents()">

                </div>

                <div class="col-md-4">

                    <select
                        id="dayFilter"
                        class="form-select"
                        onchange="searchEvents()">

                        <option value="">All Days</option>
                        <option value="Day 4">Day 4</option>
                        <option value="Day 5">Day 5</option>
                        <option value="Day 6">Day 6</option>

                    </select>

                </div>

            </div>

        </div>

        <div class="row g-4" id="events">

            <!-- Annual Day -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 4">

                <div class="glass-panel h-100">

                    <img src="Images/ne1.png"
                         class="img-fluid rounded-top event-image"
                         alt="Annual Day">

                    <div class="event-content">

                        <h4>Annual Day Celebration</h4>

                        <p class="event-desc">
                            Celebrate the spirit of PRAVAH with inspiring
                            speeches, awards, cultural performances and memorable
                            moments that mark another successful year.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 4
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                7:00 PM - 9:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Main Stage
                            </p>

                        </div>

                        <a href="yregitor.php?id=65"
                            class="btn btn-gradient w-100">

                            Reserve Your Seat

                        </a>

                    </div>

                </div>

            </div>

            <!-- DJ Night -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 5">

                <div class="glass-panel h-100">

                    <img src="images/ne2.png"
                         class="img-fluid rounded-top event-image"
                         alt="DJ Night">

                    <div class="event-content">

                        <h4>DJ Night</h4>

                        <p class="event-desc">
                            Dance the night away with electrifying beats,
                            spectacular lights and an unforgettable atmosphere
                            created by professional DJs.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 5
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                7:00 PM - 9:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Open Air Arena
                            </p>

                        </div>

                        <a href="yregitor.php?id=66"
                            class="btn btn-gradient w-100">
                            Reserve Your Seat
                        </a>

                    </div>

                </div>

            </div>

            <!-- Celebrity Night -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 6">

                <div class="glass-panel h-100">

                    <img src="images/ne3.png"
                         class="img-fluid rounded-top event-image"
                         alt="Celebrity Night">

                    <div class="event-content">

                        <h4>Celebrity Night</h4>

                        <p class="event-desc">
                            Witness a spectacular live performance by renowned
                            artists and celebrities in the grand finale evening
                            of PRAVAH 2027.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 6
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                7:00 PM - 9:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Grand Stage
                            </p>

                        </div>

                        <a href="yregitor.php?id=67"
                            class="btn btn-gradient w-100">

                            Reserve Your Seat

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include "footer.php"; ?>

<script>

function searchEvents() {

    let search = document
        .getElementById("eventSearch")
        .value
        .toLowerCase();

    let day = document
        .getElementById("dayFilter")
        .value;

    let cards = document.querySelectorAll(".event-card");

    cards.forEach(function(card) {

        let title = card
            .querySelector("h4")
            .innerText
            .toLowerCase();

        let desc = card
            .querySelector(".event-desc")
            .innerText
            .toLowerCase();

        let eventDay = card.getAttribute("data-day");

        let matchesSearch =
            title.includes(search) ||
            desc.includes(search);

        let matchesDay =
            day === "" ||
            eventDay === day;

        if (matchesSearch && matchesDay) {

            card.style.display = "block";

        } else {

            card.style.display = "none";

        }

    });

}

document.addEventListener("DOMContentLoaded", function () {

    document
        .getElementById("eventSearch")
        .addEventListener("keyup", searchEvents);

    document
        .getElementById("dayFilter")
        .addEventListener("change", searchEvents);

});

</script>
