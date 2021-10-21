<?php
include 'config.php';
error_reporting(0);
session_start();

if (isset($_POST['submit'])) {
	$qName = $_POST['quizName'];
	$qQues = $_POST['questions'];
	$qNum = $_POST['number'];
    $owner = $_SESSION['username'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
        $sql = "INSERT INTO forms (owner, formname, numberofquestions, questions)
                VALUES ('$owner', '$qName', '$qNum', '$qQues')"; //add a row to the table
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Wow! Form Registration Completed.')</script>";
            $_SESSION['formname'] = $qName;
            header("Location: myQuizzes.php");
            $qName = '';
            $qQues = '';
            $qNum = '';
            
        } else {
            echo "<script>alert('Woops! Something Wrong Went.')</script>";
        }
    }
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Create Quiz</title>
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
    </header><br>
    <section class="formCon">
        <section class="form">
            <form action="" method="POST">
                <div id="questionsContainer">
                    <p class="questioned">Enter the form name</p>
                    <input type="text" name="quizName" placeholder="Form Name" class="txt" required>
                    <input type="hidden" name="questions" id="qstxt">
                    <input type="hidden" name="number" id="qsnum">
                    <p class="questioned">Enter question number 1</p>
                    <input type="text" name="q1" placeholder="Question 1" class="txt" required>
                </div>
                <button type="button" class="btn" onclick="addQuestion()">Add Question</button>
                <button type="button" class="btn" onclick="sbmt()">Submit</button>
                <button name="submit" id="sbmtbtn" hidden>Submit</button>
            </form>
        </section>
    </section>

    <script src="app.js"></script>
</body>
</html>