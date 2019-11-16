<!--Realiza la verificacion del usuario-->

<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>One Music - Modern Music HTML5 Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
	<body>
		<div class="container">

			<?php
			// Connection info. file
			include 'conn.php';

			// Connection variables

			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			// data sent from form login.html
			$email = $_POST['email'];
			$pass = $_POST['pass'];

			// Query sent to database
			$result = mysqli_query($conn, "SELECT email, password FROM Users WHERE email = '$email'");

			// Variable $row hold the result of the query
			$row = mysqli_fetch_assoc($result);

			// Variable $hash hold the pass hash on database
			$hash = $row['password'];

			/*
			pass_Verify() function verify if the pass entered by the user
			match the pass hash on the database. If everything is OK the session
			is created for one minute. Change 1 on $_SESSION[start] to 5 for a 5 minutes session.
			*/
			if (password_verify($_POST['pass'], $hash)) {

				$_SESSION['loggedin'] = true;
				$_SESSION['name'] = $row['name'];
				$_SESSION['start'] = time();
                $_SESSION['expire'] = $_SESSION['start'] + (1 * 120) ;

                header ("Location:inicio.php?email=$email");

			} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>email or password are incorrects!
				<p><a href='login.html'><strong>Please try again!</strong></a></p></div>";
			}
			?>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>
