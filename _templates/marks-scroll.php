

<!-- new mark scroll -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Carousels</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        :root {
    --primaryblue: #2b4b8a;
    --secondaryblue: #1a355d;
    --gold : #ffd700;
    --white : white;
    --black : black;
    --maroon : firebrick;
  }

        .marks-scroll{
            font-family: Arial, sans-serif;
           
            color: white;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            
        }
        .sec-marks-scroll
        {
            background: linear-gradient(rgba(43, 75, 138, 0.8), rgba(26, 53, 93, 0.8) ), url('photos/schname.jpg');
         background-size:cover;
            padding:25px
        }
        .sec-marks-scroll h2{
            font-family: "Fjalla One", sans-serif!important;
            color:#ffd700;
            text-align:center;
            font-size:40px;
            font-weight:700;
            padding:15px;
        }
        /* animation */
        .reveal-marks-scroll
            {
                transition: 1s;
                transform: translateY(50px);
                opacity: 0;
            }
            .reveal-marks-scroll.active {
                opacity: 1;
                transform: translateY(0px);
            } 
        .marks-container {
            display: flex;
            width: 100%;
            margin-bottom:30px;
            padding:25px;
            background-color: white;
            
        }

        .carousel-marks {
            width: 80%;
            height: 450px;
            overflow: hidden;
            position: relative;
            margin: 0 10px;
            
            float: left;
        }

        .carousel-marks h2 {
            font-family: "Fjalla One", sans-serif!important;
            color:white;
            position: absolute;
            top: 10px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 28px;
            margin: 0;
            z-index: 1;
        }

        .carousel-marks .marks-carousel-inner {
            display: flex;
            flex-direction: column;
            position: absolute;
            top: 50px;
            animation: scroll 20s linear infinite;
        }
       
        .carousel-marks .carousel-inner-container {
            position: absolute;
            top: 100px; /* Adjust the top to be below the heading */
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
        }

        .carousel-marks .marks-carousel-item {
            color:#ffd700;
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            padding: 10px;
            box-sizing: border-box;
        }
        .carousel-marks .marks-carousel-item span{
            color:#fff;
            font-size:20px;
            font-weight:bolder;
        }
        .carousel-left {
            background-image: linear-gradient(to left, #2b4b8a, #1a355d);
        }

        .carousel-right {
           
            background-image: linear-gradient(to left, #2b4b8a, #1a355d);
        }

        @keyframes scroll {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-100%);
            }
        }
        @media(max-width:768px)
        {
            .carousel-marks .marks-carousel-item {
           
            font-size: 13px;
            padding: 5px;
            text-align:center;
            
        }
        .carousel-marks .marks-carousel-item span{
            
            font-size:13px;
            
        }
    }
        @media(max-width:450px)
        {
            .carousel-marks h2{
                font-size:20px;
            }
            .carousel-marks .marks-carousel-item {
           
            font-size: 11px;
            padding: 0px;
            text-align:center;
            
        }
        .carousel-marks .marks-carousel-item span{
            
            font-size:11px;
           
            
        }
        }
    </style>
</head>
<body class="marks-scroll">
    <section class="sec-marks-scroll">
        <h2 class="reveal-marks-scroll">Watch Out</h2>
   
    <div class="container marks-container">
        <div class="carousel-marks carousel-left">
            <h2>Top Marks(2023)</h2>
            <div class="carousel-inner-container">
            <div class="carousel-inner marks-carousel-inner" id="carousel-inner-left">

                <div class="marks-carousel-item "><span>Toppers - 2023</span></div>
                <div class="marks-carousel-item "><span>12TH STD</span></div>
                <div class="marks-carousel-item  "> I :<span> NithyaJayam </span> - 595/600</div>
                <div class="marks-carousel-item  "> II :<span> Vaseema </span> - 592/600</div>
                <div class="marks-carousel-item  "> III :<span> Aswin </span> - 591/600</div>
                <div class="marks-carousel-item "><span>10TH STD</span></div>
                <div class="marks-carousel-item  "> I : <span> Rithish </span> - 486/500</div>
                <div class="marks-carousel-item  "> II : <span> Rovena Sheril </span> - 483/500</div>
                <div class="marks-carousel-item  ">III :<span> Sam Jackson </span> - 480/500</div>
                <div class="marks-carousel-item  ">III :<span> Jabez Bryze </span> - 480/500</div>
                <!-- Repeat items to create the infinite scroll effect -->
            </div>
            </div>
        </div>
        <div class="carousel-marks carousel-right">
            <h2>Top Marks(2024)</h2>
            <div class="carousel-inner-container">
            <div class="carousel-inner marks-carousel-inner " id="carousel-inner-right">
            <div class="marks-carousel-item "><span>Toppers - 2024</span></div>
             <div class="marks-carousel-item "><span>12TH STD</span></div>
                <div class="marks-carousel-item  ">I : <span> AbiyaSilvista </span> - 593/600</div>
                <div class="marks-carousel-item  ">II : <span> Danya </span> - 583/600</div>
                <div class="marks-carousel-item  ">III : <span> JacobJebaraj </span>- 580/600</div>
                <div class="marks-carousel-item "><span>10TH STD</span></div>
                <div class="marks-carousel-item  ">I : <span> Madhumitha </span> - 495/500</div>
                <div class="marks-carousel-item  ">II : <span> Dhanusha </span> - 493/500</div>
                <div class="marks-carousel-item  ">III :<span> PhilipGnanaraj</span> - 492/500</div>
                <div class="marks-carousel-item  ">III :<span> Harina</span> - 492/500</div>
                <!-- Repeat items to create the infinite scroll effect -->
            </div>
    </div>
        </div>
    </div>
    </section>
    <script>
        window.addEventListener('scroll', function() {
        var reveals = document.querySelectorAll('.reveal-marks-scroll');
        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var revealTop = reveals[i].getBoundingClientRect().top;
            var revealPoint = 150;

            if (revealTop < windowHeight - revealPoint) {
                reveals[i].classList.add('active');
            } else {
                reveals[i].classList.remove('active');
            }
        }
    });
    </script>
</body>
</html>


