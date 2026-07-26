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

        <!-- HERO SECTION -->

        <div class="hero-card text-center mb-5">

            <span class="hero-badge">
                CULTURAL EVENTS
            </span>

            <h1 class="display-4 fw-bold mt-4">
                PRAVAH 2027 Cultural Events
            </h1>

            <p class="lead text-light mt-4">
                Celebrate music, dance, drama, art and creativity through
                spectacular cultural performances and competitions during
                PRAVAH 2027.
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
                        placeholder="Search Cultural Events..."
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

            <!-- Rasaverse -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 1">

                <div class="glass-panel h-100">

                    <img src="Images/ce1.png"
                         class="img-fluid rounded-top event-image"
                         alt="Rasaverse">

                    <div class="event-content">

                        <h4>Rasaverse</h4>

                        <p class="event-desc">
                            Showcase your acting talent through expressive
                            performances, storytelling and dramatic
                            presentations.
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
                                Main Auditorium
                            </p>

                        </div>

                        <a href="yregitor.php?id=35"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Rap'arazzi -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 1">

                <div class="glass-panel h-100">

                    <img src="Images/ce2.png"
                         class="img-fluid rounded-top event-image"
                         alt="Rap'arazzi">

                    <div class="event-content">

                        <h4>Rap'arazzi</h4>

                        <p class="event-desc">
                            Bring your rhythm, lyrical creativity and stage
                            presence to battle the best rappers at PRAVAH.
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
                                Open Stage
                            </p>

                        </div>

                        <a href="yregitor.php?id=36"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Sur -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 1">

                <div class="glass-panel h-100">

                    <img src="Images/ce3.png"
                         class="img-fluid rounded-top event-image"
                         alt="Sur">

                    <div class="event-content">

                        <h4>Sur</h4>

                        <p class="event-desc">
                            Mesmerize the audience with your soulful voice
                            and compete in the ultimate singing competition.
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
                                Music Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=37"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

                        <!-- Rawaz -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="Images/ce4.png"
                         class="img-fluid rounded-top event-image"
                         alt="Rawaz">

                    <div class="event-content">

                        <h4>Rawaz</h4>

                        <p class="event-desc">
                            Present powerful stage performances through
                            theatre, expression, dialogue and storytelling
                            before a live audience.
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
                                Main Auditorium
                            </p>

                        </div>

                        <a href="yregitor.php?id=38"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Street Warz -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="Images/ce5.png"
                         class="img-fluid rounded-top event-image"
                         alt="Street Warz">

                    <div class="event-content">

                        <h4>Street Warz</h4>

                        <p class="event-desc">
                            Battle it out on the dance floor with energetic
                            street dance performances, freestyle moves and
                            unbeatable stage presence.
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
                                Open Stage
                            </p>

                        </div>

                        <a href="yregitor.php?id=39"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Abhivyakti -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="Images/ce6.png"
                         class="img-fluid rounded-top event-image"
                         alt="Abhivyakti">

                    <div class="event-content">

                        <h4>Abhivyakti</h4>

                        <p class="event-desc">
                            Express your emotions through classical dance,
                            expressive performances and captivating stage
                            artistry.
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
                                Cultural Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=40"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Rang -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/ce7.png"
                         class="img-fluid rounded-top event-image"
                         alt="Rang">

                    <div class="event-content">

                        <h4>Rang</h4>

                        <p class="event-desc">
                            Showcase your creativity through live painting,
                            sketching and artistic imagination using colors
                            and innovative ideas.
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
                                Fine Arts Studio
                            </p>

                        </div>

                        <a href="yregitor.php?id=41"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>
                    </div>

                </div>

            </div>

                        <!-- Thirak -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/ce8.png"
                         class="img-fluid rounded-top event-image"
                         alt="Thirak">

                    <div class="event-content">

                        <h4>Thirak</h4>

                        <p class="event-desc">
                            Set the stage on fire with energetic solo and
                            group dance performances showcasing talent,
                            rhythm and creativity.
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
                                Main Stage
                            </p>

                        </div>

                        <a href="yregitor.php?id=42"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- The Persona Show by Toastmasters Club -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/ce9.png"
                         class="img-fluid rounded-top event-image"
                         alt="The Persona Show">

                    <div class="event-content">

                        <h4>The Persona Show</h4>

                        <p class="event-desc">
                            Impress the audience with confidence,
                            public speaking, personality and stage
                            communication in this Toastmasters showcase.
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
                                Seminar Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=43"
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