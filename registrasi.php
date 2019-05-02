<?php
require 'functions.php';

    if( isset($_POST["register"]) ) {

        if( registrasi($_POST) > 0 ) {
            echo "<script>
                            alert('User baru berhasil ditambahkan!');
                        </script>";
        } else {
            echo mysqli_error($conn);
        }

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
	<title>Registrasi - SEDAER RIVER TUBING</title>
</head>

<body class="login">
	<div class="card col-lg-6 mx-auto mt-5">
		<div class="card-header text-center">
			<h3>Registrasi</h3>
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
                <div class="form-group">
					<label for="password2">Konfirmasi Password</label>
					<input type="password" class="form-control" name="password2" id="password2"
						placeholder="Password">
				</div>
				<button type="submit" name="register" class="btn btn-primary">Register</button>
				<div class="text-right">
					<a href="login.php">Sudah Terdaftar? Masuk..</a>
				</div>
			</form>
		</div>
	</div>

	<script src="jquery-3.3.1.js"></script>
	<script src="js/bootstrap.js"></script>
</body>

</html>