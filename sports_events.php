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
                SPORTS EVENTS
            </span>

            <h1 class="display-4 fw-bold mt-4">
                PRAVAH 2027 Sports Events
            </h1>

            <p class="lead text-light mt-4">
                Experience the thrill of competition through exciting indoor
                and outdoor sports. Showcase your teamwork, fitness, strategy,
                and sportsmanship at PRAVAH 2027.
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
                        placeholder="Search Sports Events..."
                        onkeyup="searchEvents()">

                </div>

                <div class="col-md-4">

                    <select
                        id="dayFilter"
                        class="form-select"
                        onchange="searchEvents()">

                        <option value="">All Days</option>
                        <option value="Day 1">Day 1</option>
                        <option value="Day 2">Day 2</option>
                        <option value="Day 3">Day 3</option>

                    </select>

                </div>

            </div>

        </div>

        <!-- EVENTS -->

        <div class="row g-4" id="events">

            <!-- Lawn Tennis -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 1">

                <div class="glass-panel h-100">

                    <img src="Images/se1.png"
                         class="img-fluid rounded-top event-image"
                         alt="Lawn Tennis">

                    <div class="event-content">

                        <h4>Lawn Tennis</h4>

                        <p class="event-desc">
                            Compete in an exciting tennis tournament that
                            tests your speed, precision and endurance on
                            the court.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 1
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                9:00 AM - 11:00 AM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Tennis Court
                            </p>

                        </div>
                        <a href="yregitor.php?id=51"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>

                    </div>

                </div>

            </div>

            <!-- Volleyball -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 1">

                <div class="glass-panel h-100">

                    <img src="Images/se2.png"
                         class="img-fluid rounded-top event-image"
                         alt="Volleyball">

                    <div class="event-content">

                        <h4>Volleyball</h4>

                        <p class="event-desc">
                            Team up with your friends and battle for victory
                            in an energetic volleyball championship.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 1
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                11:00 AM - 1:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Volleyball Court
                            </p>

                        </div>

                        <a href="yregitor.php?id=52"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>
                    </div>

                </div>

            </div>

            <!-- Badminton -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 1">

                <div class="glass-panel h-100">

                    <img src="Images/se3.png"
                         class="img-fluid rounded-top event-image"
                         alt="Badminton">

                    <div class="event-content">

                        <h4>Badminton</h4>

                        <p class="event-desc">
                            Display your agility and reflexes in a thrilling
                            badminton competition against skilled opponents.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 1
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                2:00 PM - 4:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Indoor Sports Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=53"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>

                    </div>

                </div>

            </div>

                        <!-- Gully Cricket -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="Images/se4.png"
                         class="img-fluid rounded-top event-image"
                         alt="Gully Cricket">

                    <div class="event-content">

                        <h4>Gully Cricket</h4>

                        <p class="event-desc">
                            Relive childhood memories with an exciting
                            gully cricket tournament full of power hits,
                            teamwork and thrilling finishes.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 2
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                9:00 AM - 11:00 AM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                College Ground
                            </p>

                        </div>

                        <a href="yregitor.php?id=54"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>

                    </div>

                </div>

            </div>

            <!-- Football -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="Images/se5.png"
                         class="img-fluid rounded-top event-image"
                         alt="Football">

                    <div class="event-content">

                        <h4>Football</h4>

                        <p class="event-desc">
                            Compete with your team in an action-packed
                            football tournament that rewards strategy,
                            speed and teamwork.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 2
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                11:00 AM - 1:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Football Ground
                            </p>

                        </div>

                        <a href="yregitor.php?id=55"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>

                    </div>

                </div>

            </div>

            <!-- Satoliya -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="Images/se6.png"
                         class="img-fluid rounded-top event-image"
                         alt="Satoliya">

                    <div class="event-content">

                        <h4>Satoliya</h4>

                        <p class="event-desc">
                            Test your accuracy, teamwork and agility in
                            this classic Indian outdoor game filled with
                            fun and excitement.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 2
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                2:00 PM - 4:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Sports Arena
                            </p>

                        </div>

                        <a href="yregitor.php?id=56"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>

                    </div>

                </div>

            </div>

                        <!-- Esports -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/se7.png"
                         class="img-fluid rounded-top event-image"
                         alt="Esports">

                    <div class="event-content">

                        <h4>Esports</h4>

                        <p class="event-desc">
                            Battle against the best gamers in intense
                            multiplayer competitions that demand skill,
                            strategy, teamwork and quick reflexes.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 3
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                9:00 AM - 11:00 AM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Gaming Arena
                            </p>

                        </div>

                        <a href="yregitor.php?id=57"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>

                    </div>

                </div>

            </div>

            <!-- Chess -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/se8.png"
                         class="img-fluid rounded-top event-image"
                         alt="Chess">

                    <div class="event-content">

                        <h4>Chess</h4>

                        <p class="event-desc">
                            Challenge your opponents in the ultimate game
                            of strategy where every move matters and every
                            decision can lead to victory.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 3
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                11:00 AM - 1:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Indoor Games Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=58"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>

                    </div>

                </div>

            </div>

            <!-- Basketball -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/se9.png"
                         class="img-fluid rounded-top event-image"
                         alt="Basketball">

                    <div class="event-content">

                        <h4>Basketball</h4>

                        <p class="event-desc">
                            Showcase your dribbling, shooting and teamwork
                            in a fast-paced basketball tournament filled
                            with energy and excitement.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 3
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                2:00 PM - 4:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Basketball Court
                            </p>

                        </div>

                        <a href="yregitor.php?id=59"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>
                    </div>

                </div>

            </div>

                        <!-- Tug of War -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/se10.png"
                         class="img-fluid rounded-top event-image"
                         alt="Tug of War">

                    <div class="event-content">

                        <h4>Tug of War</h4>

                        <p class="event-desc">
                            Test your team's strength, coordination and
                            determination in the ultimate battle of power
                            and teamwork.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 3
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                9:00 AM - 11:00 AM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                College Ground
                            </p>

                        </div>

                        <a href="yregitor.php?id=60"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>

                    </div>

                </div>

            </div>

            <!-- Carrom -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/se11.png"
                         class="img-fluid rounded-top event-image"
                         alt="Carrom">

                    <div class="event-content">

                        <h4>Carrom</h4>

                        <p class="event-desc">
                            Showcase your precision and strategy in an
                            exciting indoor carrom championship against
                            skilled competitors.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 3
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                11:00 AM - 1:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Indoor Games Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=61"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>
                    </div>

                </div>

            </div>

            <!-- Kabbadi -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/se12.png"
                         class="img-fluid rounded-top event-image"
                         alt="Kabbadi">

                    <div class="event-content">

                        <h4>Kabbadi</h4>

                        <p class="event-desc">
                            Display strength, agility and teamwork in this
                            traditional sport packed with action and
                            excitement.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 3
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                2:00 PM - 4:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Sports Ground
                            </p>

                        </div>

                        <a href="yregitor.php?id=62"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>

                    </div>

                </div>

            </div>

            <!-- Table Tennis -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/se13.png"
                         class="img-fluid rounded-top event-image"
                         alt="Table Tennis">

                    <div class="event-content">

                        <h4>Table Tennis</h4>

                        <p class="event-desc">
                            Test your speed, reflexes and accuracy in an
                            intense table tennis competition against the
                            best players.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 3
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                2:00 PM - 4:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Indoor Sports Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=63"
                            class="btn btn-gradient w-100">
                                Join the Game
                        </a>

                    </div>

                </div>

            </div>

            <!-- Dodgeball -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/se14.png"
                         class="img-fluid rounded-top event-image"
                         alt="Dodgeball">

                    <div class="event-content">

                        <h4>Dodgeball</h4>

                        <p class="event-desc">
                            Dodge, throw and eliminate your opponents in
                            this high-energy game that combines speed,
                            teamwork and strategy.
                        </p>

                        <hr>

                        <div class="event-info">

                            <p>
                                <i class="bi bi-calendar3"></i>
                                <strong>Day :</strong> Day 3
                            </p>

                            <p>
                                <i class="bi bi-clock"></i>
                                <strong>Time :</strong>
                                4:00 PM - 6:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Multipurpose Court
                            </p>

                        </div>

                        <a href="yregitor.php?id=64"
                            class="btn btn-gradient w-100">
                                Join the Game
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

    let search =
        document.getElementById("eventSearch")
        .value
        .toLowerCase();

    let day =
        document.getElementById("dayFilter")
        .value;

    let cards =
        document.querySelectorAll(".event-card");

    cards.forEach(function(card) {

        let title =
            card.querySelector("h4")
            .innerText
            .toLowerCase();

        let desc =
            card.querySelector(".event-desc")
            .innerText
            .toLowerCase();

        let eventDay =
            card.getAttribute("data-day");

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