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
                LITERARY EVENTS
            </span>

            <h1 class="display-4 fw-bold mt-4">
                PRAVAH 2027 Literary Events
            </h1>

            <p class="lead text-light mt-4">
                Explore the world of words through debates, poetry,
                public speaking, creative writing and intellectual
                competitions at PRAVAH 2027.
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
                        placeholder="Search Literary Events..."
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

            <!-- Debate -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 1">

                <div class="glass-panel h-100">

                    <img src="Images/le1.png"
                         class="img-fluid rounded-top event-image"
                         alt="Debate">

                    <div class="event-content">

                        <h4>Debate</h4>

                        <p class="event-desc">
                            Present powerful arguments, challenge ideas,
                            and showcase your critical thinking and public
                            speaking abilities.
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

                        <a href="yregitor.php?id=44"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Toggle -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 1">

                <div class="glass-panel h-100">

                    <img src="Images/le2.png"
                         class="img-fluid rounded-top event-image"
                         alt="Toggle">

                    <div class="event-content">

                        <h4>Toggle</h4>

                        <p class="event-desc">
                            Think quickly and switch perspectives while
                            defending multiple viewpoints in this unique
                            speaking competition.
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
                                Conference Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=45"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

                        <!-- Spelling Bee -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="Images/le3.png"
                         class="img-fluid rounded-top event-image"
                         alt="Spelling Bee">

                    <div class="event-content">

                        <h4>Spelling Bee</h4>

                        <p class="event-desc">
                            Test your vocabulary, pronunciation and spelling
                            skills in this exciting competition where every
                            letter counts.
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
                                Language Lab
                            </p>

                        </div>

                        <a href="yregitor.php?id=46"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- MUN -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="Images/le4.png"
                         class="img-fluid rounded-top event-image"
                         alt="Model United Nations">

                    <div class="event-content">

                        <h4>Model United Nations (MUN)</h4>

                        <p class="event-desc">
                            Represent nations, debate global issues and
                            develop diplomacy, negotiation and leadership
                            skills in a simulated UN conference.
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
                                Conference Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=47"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Kavyanjali -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 2">

                <div class="glass-panel h-100">

                    <img src="Images/le5.png"
                         class="img-fluid rounded-top event-image"
                         alt="Kavyanjali">

                    <div class="event-content">

                        <h4>Kavyanjali</h4>

                        <p class="event-desc">
                            Express emotions through poetry and beautiful
                            verses while captivating the audience with your
                            voice and creativity.
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
                                Literary Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=48"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

                        <!-- Open Mic -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/le6.png"
                         class="img-fluid rounded-top event-image"
                         alt="Open Mic">

                    <div class="event-content">

                        <h4>Open Mic</h4>

                        <p class="event-desc">
                            Take the stage and showcase your talent through
                            poetry, storytelling, stand-up comedy, music,
                            or inspirational speaking in front of a live audience.
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
                                Open Stage
                            </p>

                        </div>

                        <a href="yregitor.php?id=49"
                            class="btn btn-gradient w-100">
                                Register Now
                        </a>

                    </div>

                </div>

            </div>

            <!-- Ad-Mania -->

            <div class="col-lg-4 col-md-6 event-card"
                 data-day="Day 3">

                <div class="glass-panel h-100">

                    <img src="Images/le7.png"
                         class="img-fluid rounded-top event-image"
                         alt="Ad-Mania">

                    <div class="event-content">

                        <h4>Ad-Mania</h4>

                        <p class="event-desc">
                            Create innovative advertising campaigns and
                            present creative marketing ideas that impress
                            the judges with originality and presentation.
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
                                Seminar Hall
                            </p>

                        </div>

                        <a href="yregitor.php?id=50"
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