<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['name'] ?? "Participant";

include "header.php";
?>

<!-- =====================================
            EVENTS HERO
===================================== -->

<section class="dashboard-hero">

<div class="container">

<div class="row align-items-center g-4">

<!-- LEFT -->

<div class="col-lg-8">

<div class="hero-card">

<span class="hero-badge">
PRAVAH 2027
</span>

<h1>
Explore
<span>PRAVAH Events</span>
</h1>

<p>

Discover six exciting categories filled with
competitions, innovation, creativity,
sports, entertainment and unforgettable experiences.

Whether you're a coder, artist,
athlete or performer,
there's an event waiting for you.

</p>

<div class="hero-buttons">

<a href="#eventCategories"
class="btn btn-danger btn-lg">

Browse Events

</a>

<a href="schedule.php"
class="btn btn-outline-light btn-lg">

Festival Schedule

</a>

</div>

<div class="welcome-user">

<i class="bi bi-person-circle"></i>

Welcome,

<strong>

<?php echo htmlspecialchars($name); ?>

</strong>

</div>

</div>

</div>

<!-- RIGHT -->

<div class="col-lg-4">

<div class="countdown-card">

<h5>Festival Overview</h5>

<div class="count-grid">

<div>

<h2>50+</h2>

<span>Events</span>

</div>

<div>

<h2>6</h2>

<span>Categories</span>

</div>

<div>

<h2>3000+</h2>

<span>Participants</span>

</div>

<div>

<h2>6</h2>

<span>Festival Days</span>

</div>

</div>

<hr>

<div class="festival-info">

<p>

📅 16 – 21 February 2027

</p>

<p>

📍 SKIT Jaipur Campus

</p>

<p>

🏆 Cash Prizes • Certificates • Trophies

</p>

</div>

</div>

</div>

</div>

</div>

</section>



<!-- =====================================
            EVENT CATEGORIES
===================================== -->

<section class="events-section" id="eventCategories">

<div class="container">

<div class="section-heading">

<h2>

Choose Your Category

</h2>

<p>

Explore every competition offered at PRAVAH 2027.

</p>

</div>

<div class="row g-4">

<!-- Technical -->

<div class="col-lg-4 col-md-6">

<div class="event-box">

<div class="event-image">

<img src="Images/event1.png">

</div>

<div class="event-body">

<span class="category">

Technology

</span>

<h3>

Technical Events

</h3>

<p>

Coding,
Hackathons,
Robotics,
AI,
Cyber Security,
Web Development.

</p>

<a href="tech_events.php">

Explore

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>



<!-- Non Technical -->

<div class="col-lg-4 col-md-6">

<div class="event-box">

<div class="event-image">

<img src="Images/event2.png">

</div>

<div class="event-body">

<span class="category">

Creative

</span>

<h3>

Non Technical

</h3>

<p>

Treasure Hunt,
Photography,
Business Games,
Quiz,
Fun Challenges.

</p>

<a href="nontech_events.php">

Explore

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>



<!-- Cultural -->

<div class="col-lg-4 col-md-6">

<div class="event-box">

<div class="event-image">

<img src="Images/event3.png">

</div>

<div class="event-body">

<span class="category">

Culture

</span>

<h3>

Cultural Events

</h3>

<p>

Dance,
Music,
Fashion Show,
Drama,
Band Performances.

</p>

<a href="cultural_events.php">

Explore

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>



<!-- Literary -->

<div class="col-lg-4 col-md-6">

<div class="event-box">

<div class="event-image">

<img src="Images/event4.png">

</div>

<div class="event-body">

<span class="category">

Literature

</span>

<h3>

Literary Events

</h3>

<p>

Debate,
Poetry,
Essay Writing,
Extempore,
Public Speaking.

</p>

<a href="literary_events.php">

Explore

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>



<!-- Sports -->

<div class="col-lg-4 col-md-6">

<div class="event-box">

<div class="event-image">

<img src="Images/event5.png">

</div>

<div class="event-body">

<span class="category">

Sports

</span>

<h3>

Sports Events

</h3>

<p>

Cricket,
Football,
Volleyball,
Badminton,
Chess,
Athletics and Indoor Games.

</p>

<a href="sports_events.php">

Explore

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>



<!-- Night -->

<div class="col-lg-4 col-md-6">

<div class="event-box">

<div class="event-image">

<img src="Images/event6.png">

</div>

<div class="event-body">

<span class="category">

Entertainment

</span>

<h3>

Night Events

</h3>

<p>

Celebrity Night,
DJ Night,
Live Concert,
EDM Show,
Closing Ceremony.

</p>

<a href="night_events.php">

Explore

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>

</div>

</div>

</section>



<!-- =====================================
        QUICK CATEGORY STATS
===================================== -->

<section class="quick-stats">

<div class="container">

<div class="row g-4">

<div class="col-lg-2 col-md-4 col-6">

<div class="stat-box">

<div class="icon">
<i class="bi bi-cpu"></i>
</div>

<h2>19</h2>

<p>Technical</p>

</div>

</div>

<div class="col-lg-2 col-md-4 col-6">

<div class="stat-box">

<div class="icon">
<i class="bi bi-lightbulb"></i>
</div>

<h2>15</h2>

<p>Non-Tech</p>

</div>

</div>

<div class="col-lg-2 col-md-4 col-6">

<div class="stat-box">

<div class="icon">
<i class="bi bi-music-note-beamed"></i>
</div>

<h2>9</h2>

<p>Cultural</p>

</div>

</div>

<div class="col-lg-2 col-md-4 col-6">

<div class="stat-box">

<div class="icon">
<i class="bi bi-book-half"></i>
</div>

<h2>7</h2>

<p>Literary</p>

</div>

</div>

<div class="col-lg-2 col-md-4 col-6">

<div class="stat-box">

<div class="icon">
<i class="bi bi-trophy-fill"></i>
</div>

<h2>14</h2>

<p>Sports</p>

</div>

</div>

<div class="col-lg-2 col-md-4 col-6">

<div class="stat-box">

<div class="icon">
<i class="bi bi-stars"></i>
</div>

<h2>3</h2>

<p>Night</p>

</div>

</div>

</div>

</div>

</section>

<!-- =====================================
        EVENT TIMELINE
===================================== -->

<section class="dashboard-grid">

<div class="container">

<div class="glass-panel">

<div class="panel-header">

<h3>

<i class="bi bi-calendar-week-fill"></i>

Festival Timeline

</h3>

</div>

<div class="timeline">

<div class="timeline-item">

<div class="time">

Day 1

</div>

<div class="timeline-content">

<h5>Opening Ceremony & Technical Events</h5>

<p>Hackathons, Coding Contest, Robotics.</p>

</div>

</div>

<div class="timeline-item">

<div class="time">

Day 2

</div>

<div class="timeline-content">

<h5>Sports Tournament</h5>

<p>Football, Volleyball, Cricket, Chess.</p>

</div>

</div>

<div class="timeline-item">

<div class="time">

Day 3

</div>

<div class="timeline-content">

<h5>Cultural Performances</h5>

<p>Dance, Singing, Drama, Fashion Show.</p>

</div>

</div>

<div class="timeline-item">

<div class="time">

Day 4

</div>

<div class="timeline-content">

<h5>Literary & Fun Events</h5>

<p>Debate, Poetry, Treasure Hunt and Quiz.</p>

</div>

</div>

<div class="timeline-item">

<div class="time">

Day 5-6

</div>

<div class="timeline-content">

<h5>Celebrity Night & Closing Ceremony</h5>

<p>Live Concert, DJ Night and Prize Distribution.</p>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- =====================================
            FAQ SECTION
===================================== -->

<section class="section-space">

<div class="container">

<div class="section-heading">

<h2>

Frequently Asked Questions

</h2>

<p>

Everything you need to know before participating in PRAVAH 2027.

</p>

</div>

<div class="row g-4">

<div class="col-lg-6">

<div class="glass-panel">

<h4>
<i class="bi bi-question-circle-fill text-danger me-2"></i>
Who can participate?
</h4>

<p>

Students from recognized colleges and universities
are welcome to participate in PRAVAH 2027.

</p>

</div>

</div>

<div class="col-lg-6">

<div class="glass-panel">

<h4>
<i class="bi bi-question-circle-fill text-danger me-2"></i>
Can I participate in multiple events?
</h4>

<p>

Yes. You can register for multiple events,
provided their timings do not clash.

</p>

</div>

</div>

<div class="col-lg-6">

<div class="glass-panel">

<h4>
<i class="bi bi-question-circle-fill text-danger me-2"></i>
Will certificates be provided?
</h4>

<p>

Participation certificates will be provided to all
registered participants.
Winners will receive trophies and certificates.

</p>

</div>

</div>

<div class="col-lg-6">

<div class="glass-panel">

<h4>
<i class="bi bi-question-circle-fill text-danger me-2"></i>
How do I register?
</h4>

<p>

Visit the Registration page,
select your preferred event
and complete the registration form.

</p>

</div>

</div>

</div>

</div>

</section>


<!--  =====================================
            FEATURED EVENTS
===================================== 

<section class="featured-area">

<div class="container">

<div class="section-heading">

<h2>

Featured Events

</h2>

<p>

The biggest attractions of PRAVAH 2027

</p>

</div>

<div class="row g-4">


<div class="col-lg-4">

<div class="event-box">

<div class="event-image">

<img src="Images/hackathon.jpg" alt="Hackathon">

</div>

<div class="event-body">

<span class="category">

Technical

</span>

<h3>

24-Hour Hackathon

</h3>

<p>

Compete with the best developers,
solve real-world challenges,
and win exciting prizes.

</p>

<ul class="list-unstyled text-light">

<li>📅 16 Feb 2027</li>

<li>🕘 9:00 AM</li>

<li>📍 Innovation Lab</li>

</ul>

<a href="tech_events.php">

View Event

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>


<div class="col-lg-4">

<div class="event-box">

<div class="event-image">

<img src="Images/treasure.jpg" alt="Treasure Hunt">

</div>

<div class="event-body">

<span class="category">

Non Technical

</span>

<h3>

Treasure Hunt

</h3>

<p>

Decode clues,
complete challenges,
and race against other teams.

</p>

<ul class="list-unstyled text-light">

<li>📅 17 Feb</li>

<li>🕙 10:00 AM</li>

<li>📍 Entire Campus</li>

</ul>

<a href="nontech_events.php">

View Event

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>


<div class="col-lg-4">

<div class="event-box">

<div class="event-image">

<img src="Images/dance.jpg" alt="Dance">

</div>

<div class="event-body">

<span class="category">

Cultural

</span>

<h3>

Dance Championship

</h3>

<p>

Solo,
Duet,
Group Dance and
Street Dance Competition.

</p>

<ul class="list-unstyled text-light">

<li>📅 18 Feb</li>

<li>🕑 2 PM</li>

<li>📍 Auditorium</li>

</ul>

<a href="cultural_events.php">

View Event

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>


<div class="col-lg-4">

<div class="event-box">

<div class="event-image">

<img src="Images/debate.jpg">

</div>

<div class="event-body">

<span class="category">

Literary

</span>

<h3>

National Debate

</h3>

<p>

Present your ideas,
challenge opinions,
and showcase your public speaking skills.

</p>

<ul class="list-unstyled text-light">

<li>📅 19 Feb</li>

<li>🕚 11 AM</li>

<li>📍 Seminar Hall</li>

</ul>

<a href="literary_events.php">

View Event

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>


<div class="col-lg-4">

<div class="event-box">

<div class="event-image">

<img src="Images/football.jpg">

</div>

<div class="event-body">

<span class="category">

Sports

</span>

<h3>

Football Championship

</h3>

<p>

Inter-college football tournament
with knockout rounds
and exciting finals.

</p>

<ul class="list-unstyled text-light">

<li>📅 18 Feb</li>

<li>🕘 9 AM</li>

<li>📍 Sports Ground</li>

</ul>

<a href="sports_events.php">

View Event

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>


<div class="col-lg-4">

<div class="event-box">

<div class="event-image">

<img src="Images/djnight.jpg">

</div>

<div class="event-body">

<span class="category">

Night Event

</span>

<h3>

Celebrity DJ Night

</h3>

<p>

A spectacular evening
featuring DJs,
laser shows,
live performances
and entertainment.

</p>

<ul class="list-unstyled text-light">

<li>📅 20 Feb</li>

<li>🕖 7 PM</li>

<li>📍 Open Ground</li>

</ul>

<a href="night_events.php">

View Event

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>

</div>

</div>

</section> -->
<!-- =====================================
        WHY PARTICIPATE
===================================== -->

<section class="section-space">

<div class="container">

<div class="section-heading">

<h2>

Why Participate?

</h2>

<p>

PRAVAH is much more than a college fest.

</p>

</div>

<div class="row g-4">

<div class="col-lg-3">

<div class="stat-box">

<div class="icon">

<i class="bi bi-trophy-fill"></i>

</div>

<h2>Win</h2>

<p>

Cash Prizes & Trophies

</p>

</div>

</div>

<div class="col-lg-3">

<div class="stat-box">

<div class="icon">

<i class="bi bi-award-fill"></i>

</div>

<h2>Earn</h2>

<p>

Certificates

</p>

</div>

</div>

<div class="col-lg-3">

<div class="stat-box">

<div class="icon">

<i class="bi bi-people-fill"></i>

</div>

<h2>Meet</h2>

<p>

Students Across India

</p>

</div>

</div>

<div class="col-lg-3">

<div class="stat-box">

<div class="icon">

<i class="bi bi-stars"></i>

</div>

<h2>Enjoy</h2>

<p>

6 Days of Celebration

</p>

</div>

</div>

</div>

</div>

</section>


<!-- =====================================
            CALL TO ACTION
===================================== -->

<section class="contact-cta">

<div class="container">

<div class="contact-card">

<div>

<h2>

Ready to Make Your Mark?

</h2>

<p>

Compete with talented students,
showcase your skills,
win exciting prizes
and create unforgettable memories at
<strong>PRAVAH 2027.</strong>

</p>

</div>

<div>

<a href="yregitor.php" class="btn">

Register Now

</a>

</div>

</div>

</div>

</section>



<!-- =====================================
        EXPLORE ALL CATEGORIES
===================================== -->

<section class="section-space">

<div class="container">

<div class="hero-card text-center">

<span class="hero-badge">

EXPLORE • PARTICIPATE • WIN

</span>

<h2 class="display-5 fw-bold mb-4">

Choose Your Favourite Category

</h2>

<p class="mb-5">

Every student has a talent—
find the perfect event and begin your journey.

</p>

<div class="row g-3 justify-content-center">

<div class="col-lg-4 col-md-6">

<a href="tech_events.php" class="btn-gradient w-100">

<i class="bi bi-cpu-fill"></i>

Technical Events

</a>

</div>

<div class="col-lg-4 col-md-6">

<a href="nontech_events.php" class="btn-gradient w-100">

<i class="bi bi-lightbulb-fill"></i>

Non Technical

</a>

</div>

<div class="col-lg-4 col-md-6">

<a href="cultural_events.php" class="btn-gradient w-100">

<i class="bi bi-music-note-beamed"></i>

Cultural Events

</a>

</div>

<div class="col-lg-4 col-md-6">

<a href="literary_events.php" class="btn-gradient w-100">

<i class="bi bi-book-half"></i>

Literary Events

</a>

</div>

<div class="col-lg-4 col-md-6">

<a href="sports_events.php" class="btn-gradient w-100">

<i class="bi bi-trophy-fill"></i>

Sports Events

</a>

</div>

<div class="col-lg-4 col-md-6">

<a href="night_events.php" class="btn-gradient w-100">

<i class="bi bi-stars"></i>

Night Events

</a>

</div>

</div>

</div>

</div>

</section>



<!-- =====================================
            FINAL MESSAGE
===================================== -->

<section class="section-space pt-0">

<div class="container">

<div class="glass-panel text-center">

<h2 class="text-gradient mb-4">

See You at PRAVAH 2027!

</h2>

<p class="lead mb-4">

Innovation.
Creativity.
Competition.
Sports.
Entertainment.

Everything comes together for six unforgettable days.

</p>

<a href="dashboard.php" class="btn-gradient">

<i class="bi bi-house-fill"></i>

Back to Home

</a>

</div>

</div>

</section>



<?php include "footer.php"; ?>