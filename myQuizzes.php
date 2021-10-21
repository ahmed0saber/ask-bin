<?php 
session_start();
if (!isset($_SESSION['username'])) { //if user went here without login
    header("Location: login.php");
}
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
        header {
            z-index: 2;
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

    <?php echo "<p class='myH'>Hello " . $_SESSION['username'] . " , Here you can create a new quiz or view an existing one. <span><a href='logout.php'>Logout</a></span></p>"; ?>
    
    <section class="quizCon">

        <section class="quiz" onclick="window.open('createQuiz.php','_self')">
            <p class="quizL">New</p>
            <p class="quizR">max 10 questions</p>
            <a href="createQuiz.php" class="link">Create</a>
        </section>

        <section class="quiz" onclick="window.open('viewQuiz.php','_self')">
            <p class="quizL">Quiz 5</p>
            <p class="quizR">5 questions</p>
            <a href="viewQuiz.php" class="link">View</a>
        </section>

        <section class="quiz" onclick="window.open('viewQuiz.php','_self')">
            <p class="quizL">Quiz 4</p>
            <p class="quizR">7 questions</p>
            <a href="viewQuiz.php" class="link">View</a>
        </section>

        <section class="quiz" onclick="window.open('viewQuiz.php','_self')">
            <p class="quizL">Quiz 3</p>
            <p class="quizR">3 questions</p>
            <a href="viewQuiz.php" class="link">View</a>
        </section>

        <section class="quiz" onclick="window.open('viewQuiz.php','_self')">
            <p class="quizL">Quiz 2</p>
            <p class="quizR">10 questions</p>
            <a href="viewQuiz.php" class="link">View</a>
        </section>

        <section class="quiz" onclick="window.open('viewQuiz.php','_self')">
            <p class="quizL">Quiz 1</p>
            <p class="quizR">4 questions</p>
            <a href="viewQuiz.php" class="link">View</a>
        </section>

    </section>
    <br>

    <script src="app.js"></script>
</body>
</html>