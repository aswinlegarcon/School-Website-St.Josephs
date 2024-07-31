<?php  include "_libs/load.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St.Joseph's MHSS, Ondipudur</title>
    <link rel="icon" href="/photos/logo-main.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/academics.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic" rel='stylesheet' type='text/css'>
  

    <style>
        .back-bar
        {
            width: 100%;
            background: linear-gradient(to left, #2b4b8a, #1a355d);
            padding-top: 80px;
            padding-bottom: 80px;
        }
        .back-bar .back-text h4
        {
            font-family: "Fjalla One", sans-serif!important;
        text-align: center;
        padding-left: 20px;
        font-size: 55px;
        font-weight: 600;
        color: white;
            
        }
        .back-bar .back-text p
        {
            font-family: "LeagueSpartan", sans-serif!important;
        text-align: center;
        padding-left: 20px;
        font-size: 25px;
        color: white;
        font-style: italic;
            
        }
        .back-bar-reveal
        {
            transition: 2s;
            transform: translateY(80px);
            opacity: 0;
        }
        .back-bar-reveal.active
        {
            transition: 2s;
            transform: translateY(0);
            opacity: 1;
        }
        @media(max-width:600px)
        {
            .back-bar .back-text h4
            {
                font-size: 40px;
            }
            .back-bar .back-text p
            {
                font-size: 15px;
            }
        }
/* backbar end */

/* content strt */
        .bg-1{
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),url('../photos/insaca2.jpg') no-repeat;;
            background-size: cover;
        }
            .infra-new {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                align-items: flex-start;
            border: 2px solid #fff;
                padding: 40px;
                transition: 1.5s;
            }
            .infra-new-carousel {
                order: 2; /* Initial order */
                flex: 1 1 600px;
                width: 100%;
            }

            .infra-new-carousel .carousel-inner {
                width: 100%;
                height: auto;
                border-radius: 35px;
                box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7);
            }


            .infra-new-carousel .carousel-image {
                object-fit: contain!important;
                width: 100%;
                height: 500px; /* Adjust this value as needed */
            }

            .infra-new-text {
                order: 1; /* Initial order */
                flex: 1 1 50%;
                margin-left: 20px;
                margin-right: 20px;
                text-align: left;

            }

            .infra-new-text h4 {
                font-family: "Fjalla One", sans-serif!important;
                color: #fff;
                font-size: 50px;
                font-weight: 600;
            }
            .infra-new-text p{
                font-family: "LeagueSpartan", sans-serif!important;
                color: antiquewhite;
                font-size:22px;
            }

            /* animation */
            .infra-new-reveal {
                transition: 1.5s;
                transform: translateX(-50px);
                opacity: 0;
            }

            .infra-new-reveal.active {
                opacity: 1;
                transform: translateX(0);
            }

            @media (max-width: 1320px) {
                .infra-new {
                    flex-direction: column;
                    align-items: center;
                }
                .infra-new-carousel {
                    order: 2; /* Change order on small screens */
                    flex: 1 1 100%;
                    margin: 0;
                }

                .infra-new-text {
                    order: 1; /* Change order on small screens */
                    flex: 1 1 100%;
                    margin: 0;
                    text-align: left;
                    margin-top: 20px;
                }

                .infra-new-carousel .carousel-inner {
                    height: auto;
                }
            }

            @media (max-width: 768px) {
                .infra-new {
                    flex-direction: column;
                    align-items: center;
                }
                .infra-new:hover{
                    transform: none;
                }
                .infra-new-carousel {
                    order: 2; /* Change order on small screens */
                    flex: 1 1 100%;
                    margin: 0;
                }

                .infra-new-text {
                    order: 1; /* Change order on small screens */
                    flex: 1 1 100%;
                    margin: 0;
                    text-align: left;
                    margin-top: 20px;
                }

                .infra-new-carousel .carousel-inner {
                    height: auto;
                }
            }
        /* Customize carousel controls */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000 !important;
            border-radius: 50% !important;
            padding: 15px;
        }

    </style>
</head>

<body class="academics">
    
<?php  get_templates('preloader');?>
<?php  get_templates('navbar');?>
<?php  get_templates('scroll-up');?>

<section class="back-bar">

<div class="back-text back-bar-reveal">
<h4>Instrumental Academy</h4>
<p>Musical Instruments</p>
</div>
</section>
<!-- content -->

<section class="infra-new bg-1">
  <section class="infra-new-carousel">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="/photos/insaca1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/photos/insaca3.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="/photos/insaca2.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!-- carousel end -->

  <div class="infra-new-text">
    <h4 class="infra-new-reveal">Instrumental Academy</h4>
    <p> A musical instrument academy is an educational club dedicated to teaching students how to play various <span style="color:#ffd700;font-size:25px;font-weight:bolder;">Musical Instruments</span>. 
        These academies cater to a wide range of skill levels, from beginners to intermediate musicians, and offer instruction in an electronic instruments like keyboard and more. A key feature of a musical instrument academy is its staff of qualified instructors. These instructors often have extensive backgrounds 
        in music education, performance, and pedagogy, ensuring that students receive high-quality instruction. Academies typically offer a diverse curriculum that includes individual lessons, group classes, music theory, ear training, and performance opportunities. Many academies emphasize the importance of performance 
        by organizing recitals, concerts, and other events where students can showcase their talents. Attending an academy provides a structured learning environment, which can be more effective than self-study or informal lessons. With professional instructors, a diverse curriculum, and ample performance opportunities, 
        these academies play a crucial role in nurturing the next generation of musicians. 
    </p>
    
   
  </div>
</section>
    <script>
    

    window.addEventListener('DOMContentLoaded', reveal);
    window.addEventListener('scroll', reveal);
    function reveal() {
      var reveals = document.querySelectorAll('.back-bar-reveal,.infra-new-reveal');
      var windowHeight = window.innerHeight;
      var revealPoint = 150;
    
      reveals.forEach(function(revealElement) {
        var revealTop = revealElement.getBoundingClientRect().top;
    
        if (revealTop < windowHeight - revealPoint) {
          revealElement.classList.add('active');
        } else {
          revealElement.classList.remove('active');
        }
      });
    }
      </script>
<?php  get_templates('footer');?>
</body>
</html>