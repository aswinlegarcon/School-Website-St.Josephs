<?php include "_libs/load.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>St.Joseph's MHSS, Ondipudur</title>
    <link rel="icon" href="/photos/logo-main.png" type="image/x-icon">
    <link rel="stylesheet" href="/css/index.css?v=<?php echo time(); ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">


</head>

<body class="index">

<?php  get_templates('preloader');?>
<?php  get_templates('navbar');?>
<?php  get_templates('scroll-up');?>
<?php  get_templates('carousel');?>


<!-- about-strrt -->

<div class="home-text">
    <h2  >Welcome to <span>St.Joseph's</span> Matric Higher Secondary School</h2>
</div>
<div class="containers">

<div class="about-section">
            <div class="about-image">
                <img src="/photos/princ1.jpg" alt="Profile Image 2">
            </div>
            <div class="about-content">
                <h3>Principal</h3>
                <h2 class="ab-1">Rev.Fr.Kirubakaranathan</h2>
                <p>My dear Students, When a celebrated personality such as Nelson Mandela vouches for it, can anyone on the face of the earth disagree with it? As a matter of fact, education does play a vital role in every individual's life . Therefore your future life greatly depends on the kind of education you receive. You should be grateful to God and to your parents for entrusting you to this prestigious school . Now it is your turn to prove your worth.
                  At this juncture, it is appropriate to reflect on the type of education that your are pursuing. What is true education? Is it just about getting high marks , good grades and recognized degrees? Or is it more than these? Great educationists are of the opinion that true education is gaining of greater knowledge and seasoned wisdom . In simple words, Knowledge is piling up of facts and 
                  wisdom is simplifying it. Knowledge is information. It is potential power and wisdom is real power . So you should try to acquire this kind of knowledge and not just scoring high marks.</p>
                  <a class="btn btn-primary btn-lg" href="about.php" role="button">Read more</a>
                </div>
        </div>
</div>
<!-- about end -->
<?php  get_templates('card');?>


<div class="fun-facts overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="single-fact">
                <i class="fas fa-user"></i>
                <div class="number"><span class="counter" data-target="80">0</span>+</div>
                <p>Faculties</p>
            </div>
            <div class="single-fact">
                <i class="fas fa-graduation-cap"></i>
                <div class="number"><span class="counter" data-target="2200">0</span>+</div>
                <p>Our Students</p>
            </div>
            <div class="single-fact">
                <i class="fas fa-chart-line"></i>
                <div class="number"><span class="counter" data-target="100">0</span>%</div>
                <p>Board Results</p>
            </div>
            <div class="single-fact">
                <i class="fas fa-award"></i>
                <div class="number"><span class="counter" data-target="50">0</span>+</div>
                <p>Win Awards</p>
            </div>
        </div>
    </div>



<!-- new template -->
<section class="newtemp-body">
  <div class="new-temp-text">
    <h3>What's Unique?</h3>
  </div>
<div class="newtemp-about-container">
        <div class="newtemp-about-section">
            <img src="/photos/esc1.jpg" alt="Left Image" class="newtemp-about-image">
            <div class="newtemp-about-content">
                <h2 class="infrastructure-text-reveal">Extended School Concept(ESC)</h2>
                <p>Launched in the 2023-24 academic year, this program supports working parents by providing additional coaching and activities for their children. The schedule is as follows: <br></p>
                <p>- 3:30 PM - 5:15 PM: Extra-curricular activities <br>
                - 5:15 PM - 5:30 PM: Snack break <br>
                - 5:30 PM - 7:30 PM: Study hours <br></p>
                <p><span style="font-weight:bolder;">Objectives</span><br>
                - Improve independent study habits <br>
                - Enhance academic achievement and test scores <br></p>
                <p><span style="font-weight:bolder;"> Parental Involvement</span><br>
                - Daily Tutor Meetings: Parents receive daily feedback on their child's progress. <br>
                - Monthly Principal Meetings: Parents provide suggestions for program improvement. <br></p>
            </div>
        </div>
        <div class="newtemp-about-section">
            <div class="newtemp-about-content">
                <h2 class="infrastructure-text-reveal">The Language Academies</h2>
                <p>Focusing foreign language
     Understanding the Global needs of foreign languages, we inculcated foreign languages and transforming power to students.
     <span style="color:#000;font-weight:bolder;">French, Spanish and German languages</span> are Designed for 6,7,and 8th grades . 
     it is to thrive to enhances the cognitive developments. We aim to foster a 
     love for languages and Our Mentors employ innovative techniques to ensure 
     every students to gain proficiency and confidence in their chosen language.Thus 
     St Joseph's ward/Students are focused in holistic growth for their bright future.</p>
            </div>
            <img src="/photos/german.jpg" alt="Right Image" class="newtemp-about-image">
        </div>
      
</div>
</section>
    <!-- template end -->
    <?php  get_templates('update-scroll');?>
    <?php  get_templates('new-updates');?>
    <?php get_templates('marks-scroll');?>
    <?php  get_templates('testimonial');?>
    <?php  get_templates('contact');?>

    <?php  get_templates('footer');?>
<script>
    
window.addEventListener('scroll', function() {
            reveal();
            incrementCounters();
        });

        function reveal() {
            var reveals = document.querySelectorAll('.ab-1, .span-reveal, .infrastructure-text-reveal, .new-temp-text');
            var windowHeight = window.innerHeight;

            reveals.forEach(reveal => {
                var revealTop = reveal.getBoundingClientRect().top;
                var revealPoint = 100; // Adjust this value if needed

                if (revealTop < windowHeight - revealPoint) {
                    reveal.classList.add('active');
                } else {
                    reveal.classList.remove('active');
                }
            });
        }

        function incrementCounters() {
            const counters = document.querySelectorAll('.counter');
            const duration = 2000; // duration in milliseconds

            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const increment = target / (duration / 10); // Calculate increment based on duration and target

                let count = 0;
                const updateCount = () => {
                    count += increment;
                    if (count < target) {
                        counter.innerText = Math.ceil(count);
                        setTimeout(updateCount, 10); // Update every 10 milliseconds
                    } else {
                        counter.innerText = target; // Ensure the final value is the target
                    }
                };

                const startCounting = () => {
                    if (!counter.classList.contains('counted')) {
                        counter.classList.add('counted');
                        updateCount();
                    }
                };

                var counterTop = counter.getBoundingClientRect().top;
                var windowHeight = window.innerHeight;
                if (counterTop < windowHeight) {
                    startCounting();
                }

            });
        }

        // Initial checks to handle elements already in view on page load
        reveal();
        incrementCounters();
</script>


</body>
</html>