<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Scrolling Bar with New Updates</title>
    <style>
        /* Top bar */
.top-bar-update {
  background: linear-gradient(to right, #2b4b8a, #1a355d);
  overflow: hidden;
  white-space: nowrap;
  position: relative;
  padding: 5px 0;
  text-align: center;
}

.sliding-text-update {
  display: inline-block;
  white-space: nowrap;
  animation: slide 20s linear infinite;
}

.update-link {
  display: inline-block;
  margin-right: 30px; /* Space between updates */
  color: white;
  font-size: 16px;
}

.update-link a {
  color: white;
  text-decoration: none;
}

.update-link a:hover {
  color: #ffd700; /* Gold color on hover */
  transition: color 0.3s;
}

.new-update-blinker {
  color: #ffd700; /* Red color for the blinker */
  margin-right: 10px; /* Space between blinker and link */
  animation: blinker 1s linear infinite;
  font-size: 24px; /* Increase the size of the dot */
  line-height: 16px; /* Adjust to vertically center the dot */
}

@keyframes slide {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(100%);
  }
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}

.sliding-text-update:hover {
  animation-play-state: paused; /* Pause the animation on hover */
}

@media (max-width: 700px) {
  .sliding-text-update {
    animation: slide 15s linear infinite;
  }
  @keyframes slide {
    0% {
      transform: translateX(-50%);
    }
    100% {
      transform: translateX(50%);
    }
  }
}

    </style>
</head>
<body class="update-scroll">
    <div class="top-bar-update">
        <div class="sliding-text-update">
            <div class="update-link">
                <span class="new-update-blinker">•</span>
                <a href="https://www.youtube.com/live/ohCs3-Li6Xg?si=f4gybUy_de6_kerW" target="_blank">Mini Auditorium Inaguration is live..!!</a>
            </div>
            <div class="update-link">
                <span class="new-update-blinker">•</span>
                <a href="https://www.youtube.com/live/HWzLZbisbqo?si=91MYSwh82hXn5llW" target="_blank">Tamil Academy Video out now..!!</a>
            </div>
            <div class="update-link">
                <span class="new-update-blinker">•</span>
                <a href="https://www.youtube.com/live/dfNVVWw73NQ?si=9vu4X4N3QiJb1G4D" target="_blank">Maths Academy Video out now..!!</a>
            </div>
        </div>
    </div>
</body>
</html>
