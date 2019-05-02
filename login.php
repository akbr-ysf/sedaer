<?php
session_start();

if( isset($_SESSION["login"]) ) {
    header ("Location: adminpage.php");
    exit;
}

require 'functions.php';

    if( isset($_POST["login"]) ) {
        
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

        //  cek username
        if( mysqli_num_rows($result) === 1) {
            
            // cek password
            $row = mysqli_fetch_assoc($result);
            if( password_verify($password, $row["password"]) ) {
                
                // set session
                $_SESSION["login"] = true;

                header("Location: adminpage.php");
                exit;
            }
		} 
		
		$error = true;

    }
?>

<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

	<!-- My Font -->
	<link href="https://fonts.googleapis.com/css?family=Sniglet" rel="stylesheet">

	<!-- My CSS -->
	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

	<!-- Font Awesome Icons -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Icon -->
	<link rel="Icon" href="img/s_logo.png">

	<!-- Title -->
	<title>Login - SEDAER RIVER TUBING</title>
</head>

<body class="login">
	<div class="card col-lg-6 mx-auto mt-5">
		<div class="card-header text-center">
			<h3>Login</h3>
		</div>
		<div class="card-body">
			<form method="POST" action="">
				<div class="form-group">
					<label for="username ">Username</label>
                    <input type="text" class="form-control" name="username" id="username"
						aria-describedby="emailHelp" placeholder="Enter username">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" id="password"
						placeholder="Password">
				</div>
                <button type="submit" name="login" class="btn btn-primary">Login</button>
                <a href="index.php" class="ml-3">Back to the main page!</a>
				<?php if( isset($error) ) : ?>
					<p class="text-danger font-italic mt-4">Username / Password salah!</p>
				<?php endif; ?>
			</form>
		</div>
	</div>

	<script src="jquery-3.3.1.js"></script>
	<script src="js/bootstrap.js"></script>
</body>

</html>