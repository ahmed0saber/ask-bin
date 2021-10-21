<?php
include 'config.php';
error_reporting(0); //turn off error reporting
session_start();

if (isset($_SESSION['username'])) { //if logged in
    header("Location: login.php");
}

if (isset($_POST['submit'])) { //because this page submits to itself
	$username = $_POST['username']; //fill the input fields
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) { //password confirmation
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')"; //add a row to the table
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$_SESSION['username'] = $username;
				header("Location: myQuizzes.php");
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <title>Sign up</title>
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
                <p class="title">Sign up</p>
                <input type="text" name="username" placeholder="Username" class="txt" value="<?php echo $username; ?>" required>
                <input type="text" name="email" placeholder="Email" class="txt" value="<?php echo $email; ?>" required>
                <input type="password" name="password" placeholder="Password" class="txt" value="<?php echo $_POST['password']; ?>" required>
                <input type="password" name="cpassword" placeholder="Confirm Password" class="txt" value="<?php echo $_POST['cpassword']; ?>" required>
                <button name="submit" class="btn">Sign up</button>
            </form>
            <p class="msg">Already have account ?! <a href="login.php">Log in</a></p>
        </section>
    </section>
    

    <script src="app.js"></script>
</body>
</html>