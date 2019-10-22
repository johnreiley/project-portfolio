<?php
$thisPage = "Home";
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>John - <?php echo $thisPage ?></title>
</head>

<body>
    <?php include("navigation.php"); ?>
    <div class="img-header">
        <img src="resources/river.jpg" alt="">
        <div class="img-text">
            Hi, I'm <br> John Reiley
        </div>
    </div>
    <div class="content-container">
        <div class="intro-container">
            <img class="intro-img" src="https://scontent-sea1-1.xx.fbcdn.net/v/t1.0-9/60217347_2744954375578398_1134348910672740352_n.jpg?_nc_cat=100&_nc_oc=AQleJp3R0l7i1H0Re7WOmkbIBd4GyUjUThf6cQO8zgGdSpfAvyE7bm8EtpPenYgPEi0&_nc_ht=scontent-sea1-1.xx&oh=8d6f097e419b9f221c589e937fa87fc2&oe=5DF2A218" alt="My wife and I">
            <div class="intro-txt">
                Welcome to my homepage! This photo the left is me and my wife after we climbed "R" Mountain for the first time together. I enjoy
                photography and building with Legos during my spare time. Below are a few photos that I've taken over the years. If you want to see more, you can check out my Flickr page <a href="https://www.flickr.com/photos/106076493@N07/" target="_blank">here</a>. Enjoy!
            </div>
        </div>
        <hr>
        <div class="card-show">
            <div class="card">
                <img class="card-img" src="resources/Mt Cannon.jpg" alt="">
                <div class="card-txt">
                    This is Mt. Cannon in Glacier National Park
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="resources/piano.jpg" alt="">
                <div class="card-txt">
                    I modeled this white piano after a black Kawai piano my family used to own
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="resources/pulpit.jpg" alt="">
                <div class="card-txt">
                    A re-creation of a chapel pulpit in Lego!
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="resources/stars.jpg" alt="">
                <div class="card-txt">
                    Night-time long exposure at the east side of the sand dunes
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="resources/watertower.jpg" alt="">
                <div class="card-txt">
                    The Rexburg water tower in all its glory
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="resources/tomb.jpg" alt="">
                <div class="card-txt">
                    A lego model Christ's tomb the morning of his resurrection
                </div>
            </div>
        </div>
        <hr>
    </div>


</body>
<script src="index.js"></script>

</html>