<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>About us</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .main {
            align-items: center;
        }
        .left *{
            padding: 0px;
            margin: 8px;
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
                <li class="active"><a href="about.php">About us</a></li>
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
            <p class="title">About The Website</p>
            <p class="msg">Ask Bin is a website created by Ahmed Saber in 2021.<br>Ask Bin is just AB so it is so easy to use.<br>Here you can create a form , test , exam or even a quiz , share it with people and wait for their answers.</p>
        </section>
        <section class="left picCon">
            <img src="qm.svg" class="pic">
        </section>
    </section>
    <hr>
    <section class="main">
        <section class="left">
            <p class="title">About The Developer</p>
            <p class="msg">Ahmed Saber is an egyptian full stack web developer who was born in 2001.<br>For more information about me , click on the below button.</p>
            
        </section>
        <section class="left picCon">
            <img src="https://drive.google.com/uc?id=1LerskcCbdpHcbnCKzKUoW0AcqtuRJoj5&export=download" class="pic mypic">
        </section>
    </section>
    <div class="btnContainer">
        <a href="https://ahmed0saber.github.io/portfolio/portfolio.html" target="_blank"><button class="cta">More info</button></a>
    </div>

    <script src="app.js"></script>
</body>
</html>