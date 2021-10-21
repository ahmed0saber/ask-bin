<?php
include 'config.php';
error_reporting(0);
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
    <title>View Quiz</title>
    <link rel="stylesheet" href="style.css">
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

    <?php
        if (isset($_GET['name'])) {
            $formname = $_GET['name'];

            $servername = "mysql:host=localhost;dbname=ask-bin";
            $username = "root";
            $password = "";
            $conn = new PDO($servername,$username,$password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $owner = $_SESSION['username'];
            $sql = "SELECT * FROM forms WHERE owner='$owner' AND formname='$formname'";  
            $result = $conn->query($sql);
            if($result->rowCount() > 0){
                while($row = $result->fetch()){
                    echo '<p class="quizName">'.$row['formname'].'</p>';
                    echo '<section class="questions">
                    <p class="qa">Questions</p>';
                    echo '<pre class="question">'.$row['questions'].'</pre>';
                    echo '</section><hr>';
                }
                // Free result set
                unset($result);
            }

        } else {
            header("Location: myQuizzes.php");
        }
    ?>

    <p class="qa qa2">Answers</p>
    <section class="answers">
        <div class="answer">
            <p class="answered">(1) Ahmed</p>
            <p class="answered">(2) 20</p>
            <p class="answered">(3) Blue</p>
        </div>
        <div class="answer">
            <p class="answered">(1) Ali</p>
            <p class="answered">(2) 19</p>
            <p class="answered">(3) Purple</p>
        </div>
        <div class="answer">
            <p class="answered">(1) Ashraf</p>
            <p class="answered">(2) 20</p>
            <p class="answered">(3) Red</p>
        </div>
        <div class="answer">
            <p class="answered">(1) Mohammed</p>
            <p class="answered">(2) 21</p>
            <p class="answered">(3) Green</p>
        </div>
        <div class="answer">
            <p class="answered">(1) Ebrahim</p>
            <p class="answered">(2) 20</p>
            <p class="answered">(3) Yellow</p>
        </div>
    </section>

    <script src="app.js"></script>
</body>
</html>