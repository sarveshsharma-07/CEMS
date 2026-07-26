<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['name'] ?? "Participant";
?>

<?php include "header.php"; ?>

<!-- ==========================
        HERO AREA
=========================== -->
<link rel="stylesheet" href="css/dashboard.css">

<section class="dashboard-hero">

<div class="container">

<div class="row g-4 align-items-stretch">

<!-- LEFT SIDE -->

<div class="col-lg-8">

<div class="hero-card">

<span class="hero-badge">

PRAVAH 2027

</span>

<h1>

Celebrating
<span>Navras</span>

</h1>

<p>

Experience six unforgettable days of
technology, culture, sports and creativity.

</p>

<div class="hero-buttons">

<a href="events.php" class="btn btn-danger btn-lg">

Register Now

</a>

<a href="schedule.php" class="btn btn-outline-light btn-lg">

View Schedule

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



<!-- RIGHT SIDE -->

<div class="col-lg-4">

<div class="countdown-card">

<h5>

Event Countdown

</h5>

<div class="count-grid">

<div>

<h2 id="days">000</h2>

<span>Days</span>

</div>

<div>

<h2 id="hours">00</h2>

<span>Hours</span>

</div>

<div>

<h2 id="minutes">00</h2>

<span>Minutes</span>

</div>

<div>

<h2 id="seconds">00</h2>

<span>Seconds</span>

</div>

</div>

<hr>

<div class="festival-info">

<h5>

📅 16 Ferbrary 2027

</h5>

<h5>

📍 PRAVAH Campus Arena

</h5>

</div>

</div>

</div>

</div>

</div>

</section>



<!-- ==========================
        QUICK STATS
=========================== -->

<section class="quick-stats">

<div class="container">

<div class="row g-4">

<div class="col-lg-3 col-md-6">

<div class="stat-box">

<div class="icon">

<i class="bi bi-calendar-event"></i>

</div>

<h2>42+</h2>

<p>Events</p>

</div>

</div>



<div class="col-lg-3 col-md-6">

<div class="stat-box">

<div class="icon">

<i class="bi bi-people-fill"></i>

</div>

<h2>3000+</h2>

<p>Participants</p>

</div>

</div>



<div class="col-lg-3 col-md-6">

<div class="stat-box">

<div class="icon">

<i class="bi bi-trophy-fill"></i>

</div>

<h2>25+</h2>

<p>Competitions</p>

</div>

</div>



<div class="col-lg-3 col-md-6">

<div class="stat-box">

<div class="icon">

<i class="bi bi-star-fill"></i>

</div>

<h2>6</h2>

<p>Festival Days</p>

</div>

</div>

</div>

</div>

</section>



<!-- ==========================
      FEATURED SECTION
=========================== -->

<section class="featured-area">

<div class="container">

<div class="row g-4">

<!-- LARGE CARD -->

<div class="col-lg-8">

<div class="feature-large">

<div class="feature-text">

<h2>

Festival Overview

</h2>

<p>

PRAVAH 2027 brings together innovation,
culture, entertainment and sports under
one grand celebration.

Enjoy coding contests,
music nights,
fashion shows,
robotics,
gaming tournaments,
and much more.

</p>

<a href="about.php" class="read-btn">

About Us

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>



<!-- SIDE CARDS -->

<div class="col-lg-4">

<div class="mini-card">

<h4>

Today's Highlight

</h4>

<h2>

Hackathon

</h2>

<p>

9:00 AM

Innovation Lab

</p>

</div>

<div class="mini-card mt-4">

<h4>

Live Registration

</h4>

<h2>

Open

</h2>

<p>

Register before seats fill.

</p>

</div>

</div>

</div>

</div>

</section>

<!-- PART 2 CONTINUES BELOW -->
 <!-- ==========================
        SCHEDULE + ANNOUNCEMENTS
========================== -->

<section class="dashboard-grid py-5">

<div class="container">

<div class="row g-4">

<!-- SCHEDULE -->

<div class="col-lg-8">

<div class="glass-panel">

<div class="panel-header">

<h3>
<i class="bi bi-calendar3"></i>
1st Day Schedule
</h3>

</div>

<div class="timeline">

<div class="timeline-item">

<div class="time">08:00</div>

<div class="timeline-content">

<h5>Opening Ceremony</h5>

<p>Main Stage</p>

</div>

</div>

<div class="timeline-item">

<div class="time">11:00</div>

<div class="timeline-content">

<h5>Hackathon Begins</h5>

<p>Innovation Lab</p>

</div>

</div>

<div class="timeline-item">

<div class="time">02:00</div>

<div class="timeline-content">

<h5>Dance Competition</h5>

<p>Central Auditorium</p>

</div>

</div>

<div class="timeline-item">

<div class="time">05:30</div>

<div class="timeline-content">

<h5>Gaming Finals</h5>

<p>E-Sports Arena</p>

</div>

</div>

<div class="timeline-item">

<div class="time">07:00</div>

<div class="timeline-content">

<h5>DJ Night</h5>

<p>Open Ground</p>

</div>

</div>

</div>

</div>

</div>

<!-- ANNOUNCEMENTS -->

<div class="col-lg-4">

<div class="glass-panel h-100">

<div class="panel-header">

<h3>

<i class="bi bi-megaphone-fill"></i>

Announcements

</h3>

<br>

<div class="announcement-item">
    <span class="dot"></span>
    Bring College ID Card &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Mandatory </strong>
</div>

<div class="announcement-item">
    <span class="dot"></span>
    Registration closes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <strong>15 Feb</strong>
</div>

<div class="announcement-item">
    <span class="dot"></span>
    Volunteer briefing &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <strong>12 Feb • 4:00 PM</strong>
</div>

<div class="announcement-item">
    <span class="dot"></span>
    Collect your Event Pass &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Help Desk</strong>
</div>

<div class="announcement-item">
    <span class="dot"></span>
    Keep the Campus Clean &nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Do Not Litter</strong>
</div>

<div class="announcement-item">
    <span class="dot"></span>
        Dress Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <strong>As per Event Rules</strong>
</div>

<div class="announcement-item">
    <span class="dot"></span>
    Food Court &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <strong>9:00 AM – 9:00 PM</strong>
</div>

<div class="announcement-item">
    <span class="dot"></span>
    Enjoy the Festival &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <strong>Make Memories!</strong>
</div>

</section>



<!-- ==========================
        FEATURED EVENTS
========================== -->

<section class="events-section py-5">

<div class="container">

<div class="section-heading">

<h2>

Featured Event Categories 

</h2>

<p>

Explore the biggest attractions of PRAVAH 2027

</p>

</div>

<div class="row g-4">

<div class="col-lg-4">

<div class="event-box">

<div class="event-image">

<img src="Images/SFE1.png" class="img-fluid">

</div>

<div class="event-body">

<span class="category">

Technology

</span>

<h3>

Technical Events

</h3>

<p>

Innovative coding challenges, AI battles,
robotics, and problem-solving competitions.

</p>

<a href="tech_events.php">

Explore

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>



<div class="col-lg-4">

<div class="event-box">

<div class="event-image">

<img src="Images/aboutimg.png" class="img-fluid">

</div>

<div class="event-body">

<span class="category">

Culture

</span>

<h3>

Night Events
</h3>

<p>

Enjoy electrifying DJ nights, live music,
dance performances, and celebrity shows.

</p>

<a href="night_events.php">

Explore

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>



<div class="col-lg-4">

<div class="event-box">

<div class="event-image">

<img src="Images/SFE3.png" class="img-fluid">

</div>

<div class="event-body">

<span class="category">

Sports

</span>

<h3>

Sports Arena

</h3>

<p>
Compete in football, cricket, basketball,
volleyball, athletics, and indoor games.

</p>

<a href="sports_events.php">

Explore

<i class="bi bi-arrow-right"></i>

</a>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- PART 3 CONTINUES FROM HERE -->
 <!-- ==========================
        FESTIVAL GALLERY
========================== -->

<section class="gallery-section py-5">

<div class="container">

<div class="section-heading mb-5">

<h2>Festival Gallery</h2>

<p>Moments that define PRAVAH</p>

</div>

<div class="gallery-grid">

<div class="gallery-item large">
<img src="Images/FE1.png" alt="">
<div class="overlay">
<h3>Opening Ceremony</h3>
</div>
</div>

<div class="gallery-item">
<img src="Images/FE2.png" alt="">
<div class="overlay">
<h3>DJ Night</h3>
</div>
</div>

<div class="gallery-item">
<img src="Images/FE3.png" alt="">
<div class="overlay">
<h3>Robotics</h3>
</div>
</div>

<div class="gallery-item">
<img src="Images/FE4.png" alt="">
<div class="overlay">
<h3>Gaming Arena</h3>
</div>
</div>

<div class="gallery-item large">
<img src="Images/FE5.png" alt="">
<div class="overlay">
<h3>Annual Day</h3>
</div>
</div>


<div class="gallery-item wide">
<img src="Images/FE6.png" alt="">
<div class="overlay">
<h3>Celebrity Night</h3>
</div>
</div>


</div>

</div>

</section>



<!-- ==========================
          TEAM PRAVAH
========================== -->

<section class="team-section py-5">

<div class="container">

<div class="section-heading mb-5">

<h2>Meet Team Pravah</h2>

<p>The people behind the festival</p>

</div>

<div class="row g-4">

<div class="col-lg-3 col-md-6">

<div class="team-box">

<img src="Images/t1.png">

<h4>Piya Choudhary</h4>

<span>Event Head</span>

<div class="social">

        <i class="bi bi-instagram"></i>

        <i class="bi bi-linkedin"></i>

</div>

</div>

</div>



<div class="col-lg-3 col-md-6">

<div class="team-box">

<img src="Images/t2.png">

<h4>Ankit Verma</h4>

<span>Technical Lead</span>

<div class="social">


        <i class="bi bi-instagram"></i>


        <i class="bi bi-linkedin"></i>
  

</div>

</div>

</div>



<div class="col-lg-3 col-md-6">

<div class="team-box">

<img src="Images/t3.png">

<h4>Neel Jarwal</h4>

<span>Creative Head</span>

<div class="social">


        <i class="bi bi-instagram"></i>

        <i class="bi bi-linkedin"></i>


</div>

</div>

</div>



<div class="col-lg-3 col-md-6">

<div class="team-box">

<img src="Images/t4.png">

<h4>Anjali Sharma</h4>

<span>Volunteer Head</span>

<div class="social">


        <i class="bi bi-instagram"></i>

        <i class="bi bi-linkedin"></i>


</div>

</div>

</div>

</div>

</div>

</section>



<!-- ==========================
          SPONSORS
========================== -->

<section class="sponsor-section py-5">

<div class="container">

<div class="section-heading mb-5">

<h2>Our Sponsors</h2>

<p>Supporting innovation and creativity</p>

</div>

<div class="sponsor-wrapper">

<div class="sponsor-card">
<img src="images/CL1.png">
</div>

<div class="sponsor-card">
<img src="images/CL2.png">
</div>

<div class="sponsor-card">
<img src="images/CL3.png">
</div>

<div class="sponsor-card">
<img src="images/CL4.png">
</div>

<div class="sponsor-card">
<img src="images/CL5.png">
</div>

</div>

</div>

</section>



<!-- ==========================
          CONTACT CTA
========================== -->

<section class="contact-cta py-5">

<div class="container">

<div class="contact-card">

<div class="row align-items-center">

<div class="col-lg-8">

<h2>Ready to experience PRAVAH 2027?</h2>

<p>

Register today and become a part of the biggest celebration
of technology, culture and sports.

</p>

</div>

<div class="col-lg-4 text-lg-end">

<a href="events.php" class="btn btn-danger btn-lg">

Register Now

</a>

</div>

</div>

</div>

</div>

</section>



<?php include "footer.php"; ?>


<!-- PART 4 STARTS HERE -->
 <!-- ==========================
        JAVASCRIPT
========================== -->

<script>

// ==========================
// Countdown Timer
// ==========================

const targetDate = new Date("Febrary 16, 2027 09:00:00").getTime();

function updateCountdown(){

const now = new Date().getTime();

const distance = targetDate - now;

if(distance <= 0){

document.getElementById("days").innerHTML="00";
document.getElementById("hours").innerHTML="00";
document.getElementById("minutes").innerHTML="00";
document.getElementById("seconds").innerHTML="00";

return;

}

const days=Math.floor(distance/(1000*60*60*24));

const hours=Math.floor((distance%(1000*60*60*24))/(1000*60*60));

const minutes=Math.floor((distance%(1000*60*60))/(1000*60));

const seconds=Math.floor((distance%(1000*60))/1000);

document.getElementById("days").innerHTML=days;

document.getElementById("hours").innerHTML=hours;

document.getElementById("minutes").innerHTML=minutes;

document.getElementById("seconds").innerHTML=seconds;

}

updateCountdown();

setInterval(updateCountdown,1000);



// ==========================
// Reveal Animation
// ==========================

const revealItems=document.querySelectorAll(

".hero-card,.countdown-card,.stat-box,.feature-large,.mini-card,.glass-panel,.event-box,.gallery-item,.team-box,.sponsor-card,.contact-card"

);

const observer=new IntersectionObserver(

(entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add("show");

}

});

},

{

threshold:.15

}

);

revealItems.forEach(item=>{

item.classList.add("hidden");

observer.observe(item);

});



// ==========================
// Navbar Blur on Scroll
// ==========================

window.addEventListener("scroll",()=>{

const nav=document.querySelector(".navbar");

if(nav){

if(window.scrollY>40){

nav.classList.add("navbar-scrolled");

}else{

nav.classList.remove("navbar-scrolled");

}

}

});

// ==========================
// Card Hover Glow
// ==========================

document.querySelectorAll(

".event-box,.team-box,.gallery-item,.mini-card,.stat-box"

).forEach(card=>{

card.addEventListener("mousemove",(e)=>{

const rect=card.getBoundingClientRect();

const x=e.clientX-rect.left;

const y=e.clientY-rect.top;

card.style.setProperty("--x",x+"px");

card.style.setProperty("--y",y+"px");

});

});



// ==========================
// Smooth Scroll
// ==========================

document.querySelectorAll('a[href^="#"]').forEach(anchor=>{

anchor.addEventListener("click",function(e){

e.preventDefault();

const target=document.querySelector(this.getAttribute("href"));

if(target){

target.scrollIntoView({

behavior:"smooth"

});

}

});

});

</script>

