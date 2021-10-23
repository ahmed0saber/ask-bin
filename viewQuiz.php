<?php
include 'config.php';
error_reporting(0);
session_start();
if (!isset($_SESSION['username'])) { //if user went here without login
    header("Location: login.php");
}
?>

<?php
if ($_GET['shared']=="yes") {
    $form = $_GET['name'];
    $owner = $_GET['owner'];
    header("Location: quizInv.php"."?form=".$form."&owner=".$owner);
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
                    echo '<button class="btn cta" onclick="copied();">Share</button>';
                    echo '</section><hr>';
                }
                // Free result set
                unset($result);
            }
            echo '<p class="qa qa2">Answers</p>
            <section class="answers">';
            $sql = "SELECT * FROM submits WHERE owner='$owner' AND formname='$formname'";  
            $result = $conn->query($sql);
            if($result->rowCount() > 0){
                while($row = $result->fetch()){
                    echo '<div class="answer">';
                    echo '<pre class="answered">'.$row['answers'].'</pre>';
                    echo '</div>';
                }
                // Free result set
                unset($result);
            }else{
                echo '<p class="answered" style="text-align: center;">-No answers yet-';
            }
            echo '</section>';
            echo '<p style="display:none;" id="urltxt">'.(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]&owner=".$owner."&shared=yes</p>";
        } else {
            header("Location: myQuizzes.php");
        }
    ?>
    <script src="app.js"></script>
</body>
</html>