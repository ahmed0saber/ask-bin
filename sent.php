<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>My quizzes</title>
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
                <li><a href="home.php">Home</a></li>
                <li onclick="theme()">Change theme</li>
                <li><a href="about.php">About us</a></li>
                <li class="active"><a href="login.php">My quizzes</a></li>
            </ul>
            <button>
                <i class="fas fa-times"></i>
                <i class="fas fa-bars"></i>
            </button>
        </section>
    </header>
    <section class="main">
        <section class="left">
            <p class="title">Your answers have been sent successfully</p>
            <p class="msg">Thanks for using my website</p>
        </section>
    </section>
    <script src="app.js"></script>
</body>
</html>