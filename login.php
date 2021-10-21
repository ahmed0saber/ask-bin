<?php 
include 'config.php';
session_start();
error_reporting(0); //turn off error reporting

if (isset($_SESSION['username'])) { //if logged in
    header("Location: myQuizzes.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']); //convert to md5 hash

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) //if found
	{
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: myQuizzes.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Log in</title>
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
    <section class="formCon">
        <section class="form">
            <form action="" method="POST">
                <p class="title">Log in</p>
                <input type="text" name="email" placeholder="Email" class="txt" value="<?php echo $email; ?>" required>
                <input type="password" name="password" placeholder="Password" class="txt" value="<?php echo $_POST['password']; ?>" required>
                <button name="submit" class="btn">Log in</button>
            </form>
            <p class="msg">Don't have account ?! <a href="signup.php">Create one</a></p>
        </section>
    </section>
    

    <script src="app.js"></script>
</body>
</html>