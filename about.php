<?php
include "header.php";
?>

<section class="about-page">

    <div class="about-overlay"></div>

    <div class="container-fluid px-lg-5 px-4">

        <div class="row justify-content-center align-items-center min-vh-100">

            <div class="col-xl-10 col-lg-11">

                <div class="about-content">

                    <span class="hero-badge">
                        PRAVAH 2027
                    </span>

                    <h1 class="about-title">
                        PRAVAH <span>2027</span>
                    </h1>

                    <p class="about-text">

                        <strong>PRAVAH 2027</strong> is the annual flagship cultural and
                        technical festival of
                        <strong>
                            Swami Keshvanand Institute of Technology,
                            Management & Gramothan (SKIT), Jaipur
                        </strong>.

                        Over an exciting
                        <strong>6-day celebration</strong>,
                        PRAVAH brings together students from colleges across
                        the country to showcase their talent in technology,
                        innovation, culture, sports, gaming, music,
                        entrepreneurship and leadership.

                        <br><br>

                        More than just a college festival, PRAVAH is where
                        creativity meets innovation and friendships become
                        lifelong memories. From thrilling competitions and
                        technical challenges to cultural performances and
                        entertainment, the festival offers an unforgettable
                        experience that inspires every participant to learn,
                        compete and celebrate together.

                    </p>

                    <div class="about-highlights">

                        <div class="highlight-box">

                            <i class="bi bi-building"></i>

                            <div>

                                <h6>Host Institute</h6>

                                <span>SKIT Jaipur</span>

                            </div>

                        </div>

                        <div class="highlight-box">

                            <i class="bi bi-calendar-event"></i>

                            <div>

                                <h6>Festival</h6>

                                <span>6 Days</span>

                            </div>

                        </div>

                        <div class="highlight-box">

                            <i class="bi bi-people-fill"></i>

                            <div>

                                <h6>Participants</h6>

                                <span>3000+</span>

                            </div>

                        </div>

                    </div>

                    <div class="about-buttons">

                        <a href="events.php" class="btn btn-danger">

                            Explore Events

                        </a>

                        <a href="schedule.php" class="btn btn-outline-light">

                            View Schedule

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

<style>

body{

    background:
    linear-gradient(rgba(8,8,10,.78),rgba(8,8,10,.78)),
    url("images/bgimg.png")
    center center/cover fixed no-repeat;

}

/*========================*/

.about-page{

    min-height:100vh;

    display:flex;

    align-items:center;

    position:relative;

    overflow:hidden;

}

.about-overlay{

    position:absolute;

    inset:0;

    background:

    radial-gradient(circle at top right,
    rgba(255,59,48,.18),
    transparent 35%),

    radial-gradient(circle at bottom left,
    rgba(255,80,60,.08),
    transparent 35%);

}

.about-page .container-fluid{

    position:relative;

    z-index:2;

}

/*========================*/

.about-content{

    width:100%;

    min-height:650px;

    padding:80px;

    background:rgba(15,15,20,.68);

    backdrop-filter:blur(20px);

    border:1px solid rgba(255,255,255,.08);

    border-radius:35px;

    box-shadow:0 25px 60px rgba(0,0,0,.45);

}

/*========================*/

.hero-badge{

    display:inline-flex;

    padding:10px 24px;

    border-radius:50px;

    background:rgba(255,59,48,.15);

    color:#ff8b83;

    font-size:13px;

    font-weight:600;

    letter-spacing:2px;

    text-transform:uppercase;

}

/*========================*/

.about-title{

    font-size:90px;

    font-weight:800;

    line-height:1;

    margin:30px 0;

    color:#fff;

}

.about-title span{

    color:#ff4b3c;

}

/*========================*/

.about-text{

    width:100%;

    max-width:none;

    color:#d7d7d7;

    font-size:22px;

    line-height:2;

    text-align:justify;

    margin:40px 0 55px;

}
/*========================*/

.about-highlights{

    display:grid;

    grid-template-columns:repeat(3,1fr);

    gap:22px;

    max-width:900px;

    margin-bottom:55px;

}

.highlight-box{

    display:flex;

    align-items:center;

    gap:18px;

    padding:22px;

    background:rgba(255,255,255,.05);

    border:1px solid rgba(255,255,255,.08);

    border-radius:18px;

    transition:.35s;

}

.highlight-box:hover{

    transform:translateY(-5px);

    border-color:#ff4b3c;

}

.highlight-box i{

    font-size:30px;

    color:#ff4b3c;

}

.highlight-box h6{

    margin:0;

    color:#fff;

    font-weight:600;

}

.highlight-box span{

    color:#bfbfbf;

    font-size:15px;

}

/*========================*/

.about-buttons{

    display:flex;

    gap:22px;

    flex-wrap:wrap;

}

.about-buttons .btn{

    min-width:220px;

    padding:18px 40px;

    border-radius:50px;

    font-size:18px;

    font-weight:600;

    transition:.35s;

}

.about-buttons .btn-danger{

    background:linear-gradient(135deg,#ff3b30,#ff6b40);

    border:none;

}

.about-buttons .btn-danger:hover{

    transform:translateY(-4px);

    box-shadow:0 15px 40px rgba(255,59,48,.35);

}

.about-buttons .btn-outline-light{

    border:2px solid rgba(255,255,255,.8);

}

.about-buttons .btn-outline-light:hover{

    background:#fff;

    color:#111;

    transform:translateY(-4px);

}

/*========================*/

.about-content{

    animation:fadeUp .8s ease;

}

@keyframes fadeUp{

    from{

        opacity:0;

        transform:translateY(40px);

    }

    to{

        opacity:1;

        transform:translateY(0);

    }

}

/*========================*/

.about-title::after{

    content:"";

    display:block;

    width:140px;

    height:4px;

    margin-top:20px;

    border-radius:20px;

    background:linear-gradient(to right,#ff4b3c,transparent);

}

/*========================*/

@media(max-width:991px){

    .about-content{

        padding:50px 40px;

        min-height:auto;

        text-align:center;

    }

    .about-title{

        font-size:58px;

    }

    .about-text{

        font-size:18px;

        max-width:100%;

    }

    .about-highlights{

        grid-template-columns:1fr;

        max-width:100%;

    }

    .about-buttons{

        justify-content:center;

    }

}

@media(max-width:768px){

    .about-content{

        padding:35px;

    }

    .about-title{

        font-size:46px;

    }

    .about-buttons .btn{

        width:100%;

    }

}

@media(max-width:576px){

    .about-title{

        font-size:38px;

    }

    .hero-badge{

        font-size:12px;

        padding:8px 18px;

    }

    .about-text{

        font-size:17px;

        line-height:1.9;

    }

    .highlight-box{

        padding:18px;

    }

}
</style>

<?php include "footer.php"; ?>