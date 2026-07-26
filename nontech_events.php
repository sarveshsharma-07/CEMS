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
                NON-TECHNICAL EVENTS
            </span>

            <h1 class="display-4 fw-bold mt-4">
                PRAVAH 2027 Non-Technical Events
            </h1>

            <p class="lead text-light mt-4">
                Experience fun-filled competitions, entertainment,
                creativity, adventure and exciting campus activities
                throughout PRAVAH 2027.
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
                        placeholder="Search Non-Technical Events..."
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

            <!-- Murder Mystery -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 1">

                <div class="glass-panel h-100">

                    <img src="images/nte1.png"
                         class="img-fluid rounded-top event-image"
                         alt="Murder Mystery">

                    <div class="event-content">

                        <h4>Murder Mystery</h4>

                        <p class="event-desc">
                            Become the detective, investigate clues,
                            interrogate suspects and solve the mystery
                            before anyone else.
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
                                Seminar Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=20"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>


                    </div>

                </div>

            </div>

            <!-- Horcrux Hunt -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 1">

                <div class="glass-panel h-100">

                    <img src="images/nte2.png"
                         class="img-fluid rounded-top event-image"
                         alt="Horcrux Hunt">

                    <div class="event-content">

                        <h4>Horcrux Hunt</h4>

                        <p class="event-desc">
                            Search hidden Horcruxes across the campus
                            while solving magical puzzles and clues.
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
                                Central Lawn
                            </p>

                        </div>

                        <a href="yregitor.php?id=21"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Fusion Without Flames -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="images/nte3.png"
                         class="img-fluid rounded-top event-image"
                         alt="Fusion Without Flames">

                    <div class="event-content">

                        <h4>Fusion Without Flames</h4>

                        <p class="event-desc">
                            Showcase your culinary creativity by preparing
                            delicious dishes without using fire.
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
                                Food Court
                            </p>

                        </div>

                        <a href="yregitor.php?id=22"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

                        <!-- Quizathon -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="images/nte4.png"
                         class="img-fluid rounded-top event-image"
                         alt="Quizathon">

                    <div class="event-content">

                        <h4>Quizathon</h4>

                        <p class="event-desc">
                            Test your general knowledge, current affairs,
                            logic and quick thinking in an exciting quiz
                            competition.
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
                                Seminar Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=23"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Designfinity -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="images/nte5.png"
                         class="img-fluid rounded-top event-image"
                         alt="Designfinity">

                    <div class="event-content">

                        <h4>Designfinity</h4>

                        <p class="event-desc">
                            Bring your imagination to life by creating
                            unique graphic designs and artistic visuals.
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
                                Design Lab
                            </p>

                        </div>

                        <a href="yregitor.php?id=24"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Taare Zameen Par -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="images/nte6.png"
                         class="img-fluid rounded-top event-image"
                         alt="Taare Zameen Par">

                    <div class="event-content">

                        <h4>Taare Zameen Par</h4>

                        <p class="event-desc">
                            Express your creativity through painting,
                            sketching and colorful artistic ideas.
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
                                Art Studio
                            </p>

                        </div>

                        <a href="yregitor.php?id=25"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Squid Game -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 4">

                <div class="glass-panel h-100">

                    <img src="images/nte7.png"
                         class="img-fluid rounded-top event-image"
                         alt="Squid Game">

                    <div class="event-content">

                        <h4>Squid Game</h4>

                        <p class="event-desc">
                            Participate in thrilling survival-inspired
                            challenges filled with excitement and fun.
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
                                9:00 AM - 11:00 AM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Sports Arena
                            </p>

                        </div>

                        <a href="yregitor.php?id=26"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Scream & Win -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 4">

                <div class="glass-panel h-100">

                    <img src="images/nte8.png"
                         class="img-fluid rounded-top event-image"
                         alt="Scream & Win">

                    <div class="event-content">

                        <h4>Scream &amp; Win</h4>

                        <p class="event-desc">
                            Bring your energy, enthusiasm and confidence
                            to compete in one of the loudest events of
                            Pravah.
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
                                11:00 AM - 1:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Open Stage
                            </p>

                        </div>

                        <a href="yregitor.php?id=27"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

                        <!-- Escape Room -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 5">

                <div class="glass-panel h-100">

                    <img src="images/nte9.png"
                         class="img-fluid rounded-top event-image"
                         alt="Escape Room">

                    <div class="event-content">

                        <h4>Escape Room</h4>

                        <p class="event-desc">
                            Solve puzzles, unlock hidden clues and work
                            together to escape before the timer runs out.
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
                                9:00 AM - 11:00 AM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Activity Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=28"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- SKIT Roadies -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 5">

                <div class="glass-panel h-100">

                    <img src="images/nte10.png"
                         class="img-fluid rounded-top event-image"
                         alt="SKIT Roadies">

                    <div class="event-content">

                        <h4>SKIT Roadies</h4>

                        <p class="event-desc">
                            Complete entertaining tasks and challenging
                            rounds inspired by the famous Roadies format.
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
                                9:00 AM - 11:00 AM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Central Ground
                            </p>

                        </div>

                        <a href="yregitor.php?id=29"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- IPL Auction -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 5">

                <div class="glass-panel h-100">

                    <img src="images/nte11.png"
                         class="img-fluid rounded-top event-image"
                         alt="IPL Auction">

                    <div class="event-content">

                        <h4>IPL Auction</h4>

                        <p class="event-desc">
                            Build your dream cricket team using strategy,
                            bidding skills and smart budget management.
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
                                11:00 AM - 1:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                MBA Block
                            </p>

                        </div>

                        <a href="yregitor.php?id=30"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Real Life Among Us -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 5">

                <div class="glass-panel h-100">

                    <img src="images/nte12.png"
                         class="img-fluid rounded-top event-image"
                         alt="Real Life Among Us">

                    <div class="event-content">

                        <h4>Real Life Among Us</h4>

                        <p class="event-desc">
                            Find the impostor, complete missions and
                            survive this thrilling multiplayer experience.
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
                                11:00 AM - 1:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Campus Ground
                            </p>

                        </div>

                        <a href="yregitor.php?id=31"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- AD Flix -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 6">

                <div class="glass-panel h-100">

                    <img src="images/nte13.png"
                         class="img-fluid rounded-top event-image"
                         alt="AD Flix">

                    <div class="event-content">

                        <h4>AD Flix</h4>

                        <p class="event-desc">
                            Create engaging advertisements using creative
                            storytelling and impressive presentation skills.
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
                                1:00 PM - 3:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Seminar Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=32"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Hands On Art -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 6">

                <div class="glass-panel h-100">

                    <img src="images/nte14.png"
                         class="img-fluid rounded-top event-image"
                         alt="Hands On Art">

                    <div class="event-content">

                        <h4>Hands On Art</h4>

                        <p class="event-desc">
                            Show your artistic talent through live drawing,
                            painting and creative craft activities.
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
                                1:00 PM - 3:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Art Gallery
                            </p>

                        </div>

                        <a href="yregitor.php?id=33"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Silent DJ -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 6">

                <div class="glass-panel h-100">

                    <img src="images/nte15.png"
                         class="img-fluid rounded-top event-image"
                         alt="Silent DJ">

                    <div class="event-content">

                        <h4>Silent DJ Night</h4>

                        <p class="event-desc">
                            Dance with wireless headphones and enjoy
                            multiple music channels in a unique party
                            experience.
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
                                1:00 PM - 3:00 PM
                            </p>

                            <p>
                                <i class="bi bi-geo-alt-fill"></i>
                                <strong>Venue :</strong>
                                Open Air Theatre
                            </p>

                        </div>

                        <a href="yregitor.php?id=34"
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

        if(matchesSearch && matchesDay){

            card.style.display = "block";

        }else{

            card.style.display = "none";

        }

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