<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit();
}

$message="";

if(isset($_POST['join'])){

$host="localhost";
$user="root";
$password="";
$database="itp";

$conn=new mysqli($host,$user,$password,$database);

if($conn->connect_error){
die("Connection Failed");
}

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$roll=$_POST['roll_no'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$department=$_POST['department'];
$experience=$_POST['experience'];
$why=$_POST['why_join'];

$stmt=$conn->prepare("INSERT INTO con_volanteer(name,email,phone,roll_no,branch,year,department,experience,why_join)
VALUES(?,?,?,?,?,?,?,?,?)");

$stmt->bind_param(
"sssssssss",
$name,
$email,
$phone,
$roll,
$branch,
$year,
$department,
$experience,
$why
);

if($stmt->execute()){
$message="<div class='alert alert-success'>Application Submitted Successfully.</div>";
}else{
$message="<div class='alert alert-danger'>Something went wrong.</div>";
}

$stmt->close();
$conn->close();

}

include("header.php");
?>

<section class="team-join-section">

<div class="container">

<div class="row mb-5">

<div class="col-lg-8">

<div class="hero-card">

<div class="hero-badge">
TEAM PRAVAH
</div>

<h1>
Become a <span>Volunteer</span>
</h1>

<p>

Join the organizing committee of PRAVAH 2027 and become the face behind one of the biggest college festivals. Gain leadership experience, improve communication skills, network with professionals and receive an official organizing certificate.

</p>

<div class="hero-buttons">

<a href="#joinForm" class="btn btn-danger">
Apply Now
</a>

<a href="#benefits" class="btn btn-outline-light">
Learn More
</a>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="countdown-card">

<h5>Why Join?</h5>

<div class="timeline">

<div class="announcement-item">

<div class="dot"></div>

<div>

<strong>Leadership</strong>

<p>Lead event operations.</p>

</div>

</div>

<div class="announcement-item">

<div class="dot"></div>

<div>

<strong>Certificate</strong>

<p>Official Volunteer Certificate.</p>

</div>

</div>

<div class="announcement-item">

<div class="dot"></div>

<div>

<strong>Networking</strong>

<p>Meet students from different colleges.</p>

</div>

</div>

<div class="announcement-item">

<div class="dot"></div>

<div>

<strong>Team Work</strong>

<p>Improve communication & management skills.</p>

</div>

</div>

</div>

</div>

</div>

</div>

<div class="row mb-5" id="benefits">

<div class="col-md-3">

<div class="stat-box">

<div class="icon">
<i class="bi bi-award-fill"></i>
</div>

<h2>100%</h2>

<p>Certificate</p>

</div>

</div>

<div class="col-md-3">

<div class="stat-box">

<div class="icon">
<i class="bi bi-people-fill"></i>
</div>

<h2>500+</h2>

<p>Team Members</p>

</div>

</div>

<div class="col-md-3">

<div class="stat-box">

<div class="icon">
<i class="bi bi-lightning-fill"></i>
</div>

<h2>25+</h2>

<p>Departments</p>

</div>

</div>

<div class="col-md-3">

<div class="stat-box">

<div class="icon">
<i class="bi bi-stars"></i>
</div>

<h2>6</h2>

<p>Festival Days</p>

</div>

</div>

</div>

<div class="row" id="joinForm">

<div class="col-lg-8">

<div class="glass-panel">

<div class="panel-header">

<h3>
<i class="bi bi-person-plus-fill"></i>
Volunteer Registration
</h3>

</div>

<?php echo $message; ?>

<form method="POST">

<div class="row">

<div class="col-md-6 mb-3">
<input class="form-control custom-input" name="name" placeholder="Full Name" required>
</div>

<div class="col-md-6 mb-3">
<input class="form-control custom-input" name="email" type="email" placeholder="Email">
</div>

<div class="col-md-6 mb-3">
<input class="form-control custom-input" name="phone" placeholder="Phone Number">
</div>

<div class="col-md-6 mb-3">
<input class="form-control custom-input" name="roll_no" placeholder="Roll Number">
</div>

<div class="col-md-6 mb-3">
<input class="form-control custom-input" name="branch" placeholder="Branch">
</div>

<div class="col-md-6 mb-3">

<select class="form-control custom-input" name="year">

<option>1st Year</option>
<option>2nd Year</option>
<option>3rd Year</option>
<option>4th Year</option>

</select>

</div>

<div class="col-12 mb-3">

<input class="form-control custom-input" name="department" placeholder="Preferred Department (Technical, Hospitality, Media...)">

</div>

<div class="col-12 mb-3">

<textarea class="form-control custom-input" rows="3" name="experience" placeholder="Previous Experience"></textarea>

</div>

<div class="col-12 mb-4">

<textarea class="form-control custom-input" rows="4" name="why_join" placeholder="Why do you want to join Team Pravah?"></textarea>

</div>

<div class="col-12">

<button class="btn-gradient" name="join">

<i class="bi bi-send-fill"></i>

Submit Application

</button>

</div>

</div>

</form>

</div>

</div>

<div class="col-lg-4">

<div class="glass-panel">

<div class="panel-header">

<h3>

<i class="bi bi-info-circle-fill"></i>

Requirements

</h3>

</div>

<div class="timeline">

<div class="timeline-item">

<div class="time">
1
</div>

<div class="timeline-content">

<h5>Team Player</h5>

<p>Must be able to work with others.</p>

</div>

</div>

<div class="timeline-item">

<div class="time">
2
</div>

<div class="timeline-content">

<h5>Responsible</h5>

<p>Complete assigned tasks on time.</p>

</div>

</div>

<div class="timeline-item">

<div class="time">
3
</div>

<div class="timeline-content">

<h5>Available</h5>

<p>Available during the festival week.</p>

</div>

</div>

</div>

</div>

</div>

</div>

</div>

</section>

<?php include("footer.php"); ?>