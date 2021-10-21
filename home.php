<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Ask Bin</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .main {
            align-items: center;
        }
        .left{
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Ask Bin</h1>

        <section class="menu">
            <ul class="menu-list">
                <li class="active"><a href="home.php">Home</a></li>
                <li onclick="theme()">Change theme</li>
                <li><a href="about.php">About us</a></li>
                <li><a href="login.php">My quizzes</a></li>
            </ul>

            <button>
                <i class="fas fa-times"></i>
                <i class="fas fa-bars"></i>
            </button>
        </section>
    </header>
    <section class="main">

        <section class="left">
            <p class="title">Forms , Quizzes , Tests and much more...</p>
            <p class="msg">Need a course registration form <i class="fas fa-question"></i> Want to make a friendship test to your friends <i class="fas fa-question"></i> Need to create an online quiz <i class="fas fa-question"></i> Want to get answers to your questions <i class="fas fa-question"></i><br><i class="fas fa-arrow-right"></i> then you are on the correct place.</p>
            <a href="login.php"><button class="cta">Get Started <i class="far fa-play-circle"></i></button></a>
        </section>

    </section>

    <script src="app.js"></script>
</body>
</html>