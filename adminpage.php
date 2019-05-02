<?php
	session_start();
	require 'functions.php';

	if( !isset($_SESSION["login"]) ) {
		header ("Location: login.php");
	}
	
	$artikel = query("SELECT * FROM artikel ORDER BY tanggal ASC") ;

	$no = 1;

	//pagination
    $jumlahDataPerHalaman = 5;
    $jumlahData = count(query("SELECT * FROM artikel ORDER BY tanggal ASC"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = ( isset($_GET["p"]) ) ? $_GET["p"] : 1; 
    $awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
    $hasilHalamanPertama = ($halamanAktif-1)*$jumlahDataPerHalaman;
    $noAwal = 0;
    $no = ($hasilHalamanPertama + 1) - 1;

    $artikel = query("SELECT * FROM artikel ORDER BY tanggal ASC LIMIT $awalData, $jumlahDataPerHalaman");

	//tombol cari diklik
    if( isset($_POST["cari"])) {
		$artikel = cari($_POST["keyword"]);
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
	<link rel="stylesheet" href="styles2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

	<!-- Font Awesome Icons -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Icon -->
	<link rel="Icon" href="img/s_logo.png">

	<!-- Title -->
	<title>Admin - SEDAER RIVER TUBING</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand">
                <img src="img/s_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Sedaer River Tubing
            </a>
            <a href="logout.php" class="btn btn-danger">Log Out</a>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Artikel</h1>
            <p class="lead">Karangan faktual untuk dibaca dan bertujuan menyampaikan gagasan dan fakta yang dapat meyakinkan, mendidik, dan menghibur.</p>
        </div>
    </div>

	<div class="container">
		
		<nav class="navbar navbar-expand-lg navbar-light">
			<!-- <a class="navbar-brand" href="#">Navbar</a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link btn btn-success" href="tambah.php">Tambah Artikel <span class="sr-only">(current)</span></a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0" action="" method="POST">
					<input class="form-control mr-sm-2" type="text" name="keyword" placeholder="Search" aria-label="Search" placeholder="Masukkan Judul yang ingin dicari" autofocus autocomplete="off">
					<button class="btn btn-success my-2 my-sm-0" type="submit" name="cari">Search</button>
				</form>
			</div>
		</nav>

		<table class="table table-bordered table-striped">
			<tr class="table-primary">
				<th>No.</th>
				<th>Aksi</th>
				<th>Judul</th>
				<th>Tanggal</th>
				<th>Gambar</th>
			</tr>
			
			<?php foreach ($artikel as $row): $no++;?>
			<tr id="tableRow">
				<td>
					<?= $no; ?>
				</td>
				<td>
					<!-- Edit -->
					<a href="edit.php?id=<?= $row["id"];?>">
						<button type="button" class="btn btn-warning btn-sm">Edit</button>
					</a>
					<!-- Hapus -->
					<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalHapus<?= $row["id"];?>">
						Hapus
					</button>
					<div class="modal fade" id="modalHapus<?= $row["id"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Hapus Data Mahasiswa</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									Anda yakin ingin menghapus salah satu data Mahasiswa?</p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
									<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
									<a href="functions.php?id=<?= $row['id'] ?>&Hapus">
										<button type="button" class="btn btn-danger">Hapus</button>
									</a>
								</div>
							</div>
						</div>
					</div>
				</td>
				<td>
					<?= $row["judul"]; ?>
				</td>
				<td>
					<?= "Diterbitkan tanggal " . $row["tanggal"]; ?>
				</td>
				<td>
					<img src="../images/<?= $row["gambar"]; ?>" alt="" width="100">
				</td>
			</tr>
			<?php  ?>
			<?php endforeach;?>

		</table>

		<nav aria-label="Page navigation example">
			<ul class="pagination justify-content-center">
				<?php if( $halamanAktif > 1) : ?>
					<li class="page-item">
						<a class="page-link" href="?p=<?= $halamanAktif - 1; ?>" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>
				<?php else : ?>
					<li class="page-item disabled">
						<a class="page-link" href="?p=<?= $halamanAktif - 1; ?>" aria-label="Previous">
							<span aria-hidden="true">&laquo;</span>
							<span class="sr-only">Previous</span>
						</a>
					</li>
				<?php endif; ?>
				<?php for( $i = 1; $i <= $jumlahHalaman; $i++) : ?>
					<?php if( $i == $halamanAktif) : ?>
						<li class="page-item active"><a class="page-link" href="?p=<?= $i; ?>"><?= $i; ?></a></li>
					<?php else : ?>
						<li class="page-item"><a class="page-link" href="?p=<?= $i; ?>"><?= $i; ?></a></li>
					<?php endif; ?>
				<?php endfor; ?>
				<?php if( $halamanAktif < $jumlahHalaman ) : ?>
					<li class="page-item">
						<a class="page-link" href="?p=<?= $halamanAktif + 1; ?>" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				<?php else : ?>
					<li class="page-item disabled">
						<a class="page-link" href="?p=<?= $halamanAktif + 1; ?>" aria-label="Next">
							<span aria-hidden="true">&raquo;</span>
							<span class="sr-only">Next</span>
						</a>
					</li>
				<?php endif; ?>
			</ul>
		</nav>

	</div>

    <script src="jquery-3.3.1.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="editor/ckeditor.js"></script>
</body>
</html>