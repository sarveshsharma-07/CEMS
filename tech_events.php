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

        <!-- ================= HERO ================= -->

        <div class="hero-card text-center mb-5">

            <span class="hero-badge">
                TECHNICAL EVENTS
            </span>

            <h1 class="display-4 fw-bold mt-4">
                PRAVAH 2027 Technical Events
            </h1>

            <p class="lead text-light mt-4">
                Explore innovation, coding, robotics, electronics,
                management and engineering challenges designed to
                showcase your technical excellence at PRAVAH 2027.
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

        <!-- ================= SEARCH ================= -->

        <div class="glass-panel p-4 mb-5">

            <div class="row g-3">

                <div class="col-md-8">

                    <input
                        type="text"
                        id="eventSearch"
                        class="form-control"
                        placeholder="Search Technical Events..."
                        onkeyup="searchEvents()">

                </div>

                <div class="col-md-4">

                    <select
                        class="form-select"
                        id="dayFilter"
                        onchange="searchEvents()">

                        <option value="">All Days</option>
                        <option value="Day 1">Day 1</option>
                        <option value="Day 2">Day 2</option>
                        <option value="Day 3">Day 3</option>
                        <option value="Day 4">Day 4</option>
                        <option value="Day 5">Day 5</option>
                        <option value="Day 6">Day 6</option>

                    </select>

                </div>

            </div>

        </div>

        <!-- ================= EVENT CARDS ================= -->

        <div class="row g-4" id="events">

                <!-- ================= BYTE CHASE ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 1">

            <div class="glass-panel h-100">

                <img src="images/te1.png"
                     class="img-fluid rounded-top event-image"
                     alt="Byte Chase">

                <div class="event-content">

                    <h4>Byte Chase</h4>

                    <p class="event-desc">
                        Solve coding puzzles, debug programs and race
                        against time to become the ultimate coding champion.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 1
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 09:00 AM - 11:00 AM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> CSE Lab
                        </p>

                    </div>

                    <a href="yregitor.php?id=1"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= IEEE-E SUMMIT ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 1">

            <div class="glass-panel h-100">

                <img src="images/te2.png"
                     class="img-fluid rounded-top event-image"
                     alt="IEEE-E Summit">

                <div class="event-content">

                    <h4>IEEE-E Summit</h4>

                    <p class="event-desc">
                        Present innovative engineering ideas and interact
                        with experts in technology and research.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 1
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 11:00 AM - 01:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Seminar Hall
                        </p>

                    </div>

                    <a href="yregitor.php?id=2"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= V STOCK MARKET ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 1">

            <div class="glass-panel h-100">

                <img src="images/te3.png"
                     class="img-fluid rounded-top event-image"
                     alt="V Stock Market">

                <div class="event-content">

                    <h4>V Stock Market</h4>

                    <p class="event-desc">
                        Experience virtual trading and make smart
                        investment decisions to maximize profits.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 1
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 02:00 PM - 04:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> MBA Block
                        </p>

                    </div>

                    <a href="yregitor.php?id=3"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= TYPING TITANS ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 2">

            <div class="glass-panel h-100">

                <img src="images/te4.png"
                     class="img-fluid rounded-top event-image"
                     alt="Typing Titans">

                <div class="event-content">

                    <h4>Typing Titans</h4>

                    <p class="event-desc">
                        Test your typing speed, accuracy and consistency
                        to become the fastest keyboard warrior.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 2
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 09:00 AM - 10:30 AM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Computer Lab
                        </p>

                    </div>

                    <a href="yregitor.php?id=4"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= CODING LEAGUE ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 2">

            <div class="glass-panel h-100">

                <img src="images/te5.png"
                     class="img-fluid rounded-top event-image"
                     alt="Coding League">

                <div class="event-content">

                    <h4>Coding League</h4>

                    <p class="event-desc">
                        Compete in challenging programming rounds and
                        solve real-world algorithmic problems.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 2
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 11:00 AM - 01:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Programming Lab
                        </p>

                    </div>

                    <a href="yregitor.php?id=5"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= JOIST KWIK ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 2">

            <div class="glass-panel h-100">

                <img src="images/te6.png"
                     class="img-fluid rounded-top event-image"
                     alt="Joist Kwik">

                <div class="event-content">

                    <h4>Joist Kwik</h4>

                    <p class="event-desc">
                        Display engineering skills by designing and
                        building efficient structures under pressure.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 2
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 02:00 PM - 04:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Civil Workshop
                        </p>

                    </div>

                    <a href="yregitor.php?id=6"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= BELL THE CAT ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 3">

            <div class="glass-panel h-100">

                <img src="images/te7.png"
                     class="img-fluid rounded-top event-image"
                     alt="Bell The Cat">

                <div class="event-content">

                    <h4>Bell The Cat</h4>

                    <p class="event-desc">
                        Think strategically, solve logical challenges
                        and outsmart your competitors in this brain teaser.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 3
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 09:00 AM - 11:00 AM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Innovation Lab
                        </p>

                    </div>

                    <a href="yregitor.php?id=7"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

                <!-- ================= ASTROHUNT ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 3">

            <div class="glass-panel h-100">

                <img src="images/te8.png"
                     class="img-fluid rounded-top event-image"
                     alt="Astrohunt">

                <div class="event-content">

                    <h4>Astrohunt</h4>

                    <p class="event-desc">
                        Embark on an exciting space-themed treasure hunt
                        by solving technical clues and hidden challenges.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 3
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 11:00 AM - 01:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Campus Arena
                        </p>

                    </div>

                    <a href="yregitor.php?id=8"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= EV BRAIN RUSH ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 3">

            <div class="glass-panel h-100">

                <img src="images/te9.png"
                     class="img-fluid rounded-top event-image"
                     alt="EV Brain Rush">

                <div class="event-content">

                    <h4>EV Brain Rush</h4>

                    <p class="event-desc">
                        Test your knowledge of electric vehicles,
                        batteries and sustainable transportation.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 3
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 02:00 PM - 04:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Electrical Lab
                        </p>

                    </div>

                    <a href="yregitor.php?id=9"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>
                </div>

            </div>

        </div>

        <!-- ================= KNOCK THE GATE ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 4">

            <div class="glass-panel h-100">

                <img src="images/te10.png"
                     class="img-fluid rounded-top event-image"
                     alt="Knock The Gate">

                <div class="event-content">

                    <h4>Knock The Gate</h4>

                    <p class="event-desc">
                        Crack multiple technical rounds and unlock
                        the final gate to become the champion.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 4
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 09:00 AM - 11:00 AM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Auditorium
                        </p>

                    </div>

                    <a href="yregitor.php?id=10"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= CRACK THE CIRCUIT ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 4">

            <div class="glass-panel h-100">

                <img src="images/te11.png"
                     class="img-fluid rounded-top event-image"
                     alt="Crack The Circuit">

                <div class="event-content">

                    <h4>Crack The Circuit</h4>

                    <p class="event-desc">
                        Analyze electronic circuits, identify faults
                        and solve practical hardware problems.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 4
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 11:00 AM - 01:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> ECE Lab
                        </p>

                    </div>

                    <a href="yregitor.php?id=11"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= WEBATHON ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 4">

            <div class="glass-panel h-100">

                <img src="images/te12.png"
                     class="img-fluid rounded-top event-image"
                     alt="Webathon">

                <div class="event-content">

                    <h4>Webathon</h4>

                    <p class="event-desc">
                        Design and develop creative websites within
                        a limited time using modern web technologies.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 4
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 02:00 PM - 05:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Web Development Lab
                        </p>

                    </div>

                    <a href="yregitor.php?id=12"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>
                </div>

            </div>

        </div>

        <!-- ================= SMART SHOPPING ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 5">

            <div class="glass-panel h-100">

                <img src="images/te13.png"
                     class="img-fluid rounded-top event-image"
                     alt="Smart Shopping">

                <div class="event-content">

                    <h4>Smart Shopping</h4>

                    <p class="event-desc">
                        Apply analytical thinking and budgeting skills
                        to make the smartest purchasing decisions.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 5
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 09:00 AM - 11:00 AM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> MBA Block
                        </p>

                    </div>

                    <a href="yregitor.php?id=13"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= TECH TALK ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 5">

            <div class="glass-panel h-100">

                <img src="images/te14.png"
                     class="img-fluid rounded-top event-image"
                     alt="Tech Talk">

                <div class="event-content">

                    <h4>Tech Talk</h4>

                    <p class="event-desc">
                        Share innovative ideas, emerging technologies
                        and inspiring technical solutions with experts.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 5
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 11:00 AM - 01:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Seminar Hall
                        </p>

                    </div>

                    <a href="yregitor.php?id=14"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

                <!-- ================= SYNTAX SCAVENGER ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 5">

            <div class="glass-panel h-100">

                <img src="images/te15.png"
                     class="img-fluid rounded-top event-image"
                     alt="Syntax Scavenger">

                <div class="event-content">

                    <h4>Syntax Scavenger</h4>

                    <p class="event-desc">
                        Hunt for syntax errors, debug code and solve
                        programming challenges with speed and accuracy.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 5
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 02:00 PM - 04:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Programming Lab
                        </p>

                    </div>

                    <a href="yregitor.php?id=15"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>
                </div>

            </div>

        </div>

        <!-- ================= ROBO RUSH ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 6">

            <div class="glass-panel h-100">

                <img src="images/te16.png"
                     class="img-fluid rounded-top event-image"
                     alt="Robo Rush">

                <div class="event-content">

                    <h4>Robo Rush</h4>

                    <p class="event-desc">
                        Compete with autonomous and manual robots in
                        exciting obstacle-based engineering challenges.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 6
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 09:00 AM - 11:00 AM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Robotics Arena
                        </p>

                    </div>

                    <a href="yregitor.php?id=16"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>
                </div>

            </div>

        </div>

        <!-- ================= DRONE RACE ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 6">

            <div class="glass-panel h-100">

                <img src="images/te17.png"
                     class="img-fluid rounded-top event-image"
                     alt="Drone Race">

                <div class="event-content">

                    <h4>Drone Race</h4>

                    <p class="event-desc">
                        Fly drones through challenging tracks and prove
                        your precision, control and navigation skills.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 6
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 11:00 AM - 01:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Sports Ground
                        </p>

                    </div>

                    <a href="yregitor.php?id=17"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= STARTUP EXPO ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 6">

            <div class="glass-panel h-100">

                <img src="images/te18.png"
                     class="img-fluid rounded-top event-image"
                     alt="Startup Expo">

                <div class="event-content">

                    <h4>Startup Expo</h4>

                    <p class="event-desc">
                        Pitch your startup ideas, present innovative
                        business models and impress industry experts.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 6
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 01:00 PM - 03:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Innovation Centre
                        </p>

                    </div>

                    <a href="yregitor.php?id=18"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

        <!-- ================= ROBO SOCCER ================= -->

        <div class="col-lg-4 col-md-6 event-card" data-day="Day 6">

            <div class="glass-panel h-100">

                <img src="images/te19.png"
                     class="img-fluid rounded-top event-image"
                     alt="Robo Soccer">

                <div class="event-content">

                    <h4>Robo Soccer</h4>

                    <p class="event-desc">
                        Watch your robots compete in an exciting football
                        arena using strategy, coding and teamwork.
                    </p>

                    <hr>

                    <div class="event-info">

                        <p><i class="bi bi-calendar3"></i>
                            <strong>Day :</strong> Day 6
                        </p>

                        <p><i class="bi bi-clock"></i>
                            <strong>Time :</strong> 03:00 PM - 05:00 PM
                        </p>

                        <p><i class="bi bi-geo-alt-fill"></i>
                            <strong>Venue :</strong> Robotics Arena
                        </p>

                    </div>

                    <a href="yregitor.php?id=19"
                       class="btn btn-gradient w-100">
                        Register Now
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

<?php include "footer.php"; ?>

<script>

function searchEvents(){

    let search =
        document.getElementById("eventSearch")
        .value
        .toLowerCase();

    let day =
        document.getElementById("dayFilter")
        .value;

    let cards =
        document.querySelectorAll(".event-card");

    cards.forEach(function(card){

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

        card.style.display =
            (matchesSearch && matchesDay)
            ? "block"
            : "none";

    });

}

document.addEventListener("DOMContentLoaded", function(){

    document
        .getElementById("eventSearch")
        .addEventListener("keyup", searchEvents);

    document
        .getElementById("dayFilter")
        .addEventListener("change", searchEvents);

});

</script>