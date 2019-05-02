<?php
    session_start();
    require 'functions.php';

	if( !isset($_SESSION["login"]) ) {
		header ("Location: login.php");
    }

    if( isset($_POST["submit"])) {
        
        //cek keberhasilan
        if (edit($_POST) >= 0) {
            // echo "
            //     <script>
            //         alert('data berhasil diubah');
            //         document.location.href= '../admin.php';
            //     </script>
            // ";
        } header('Location: adminpage.php');
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
	<link rel="Icon" href="/img/s_logo.png">

	<!-- Title -->
	<title>Edit - SEDAER RIVER TUBING</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/s_logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                    Sedaer River Tubing
            </a>
            <a href="logout.php" class="btn btn-danger">Log Out</a>
        </div>
    </nav>

    <div class="container my-5">
        <form method="post" action="" enctype="multipart/form-data">
            <?php
            $id = $_GET['id'];
			$data = mysqli_query($conn,"select * from artikel where id=$id");
			while ($value=mysqli_fetch_array($data)) {
				$judul = $value['judul'];
				$tanggal = $value['tanggal'];
                $content = $value['content'];
                $gambar = $value['gambar'];
				# code...
			}
			?>
			<input type="hidden" name="id" value="<?= $id ?>">
            <input type="hidden" name="gambarLama" value="<?= $gambar ?>">
            <div class="form-group row">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Artikel"
                        value="<?= $judul ?>" required>
                </div>
            </div>
            <input type="hidden" name="tanggal" value="<?php echo date(" l, d-m-Y"); ?>">
            <textarea name="editor" class="form-control ckeditor" id="" cols="30" rows="30" required><?= $content ?></textarea>
            <div class="col-sm-12 mt-4 custom-file">
                <label class="custom-file-label" for="file-upload" id="file-upload-filename">Pilih Gambar</label>
                <input type="file" class="custom-file-input" id="file-upload" name="gambar" >
            </div>
            <div class="col-sm-3" id="gambarUbah">
                <img src="../images/<?= $gambar ?>" class="img-thumbnail mt-4">
            </div>
            <div class="form-group row mt-4">
                <!-- <button type="submit" class="btn btn-primary" name="submit">Simpan</button> -->

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalSimpan">
                Simpan
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalSimpan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Simpan Data?</h5>
                            </div>
                            <div class="modal-body">
                                Simpan perubahan data terbaru?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                <button type="submit"  name="submit" class="btn btn-success">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger ml-3" data-toggle="modal" data-target="#modalBatal" id="kembali">
                Kembali
                </button>

                <!-- Modal -->
                <div class="modal fade" id="modalBatal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Kembali?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Tidak ada data yang ingin diubah?                            
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-warning" data-dismiss="modal">Tidak</button>
                                <a href="adminpage.php">
                                    <button type="button" class="btn btn-danger">Ya</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        var input = document.getElementById( 'file-upload' );
        var infoArea = document.getElementById( 'file-upload-filename' );

        input.addEventListener( 'change', showFileName );

        function showFileName( event ) {
        
        // the change event gives us the input it occurred in 
        var input = event.srcElement;
        
        // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
        var fileName = input.files[0].name;
        
        // use fileName however fits your app best, i.e. add it into a div
        infoArea.textContent = 'File name: ' + fileName;
        }
    </script>

    <script src="jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="editor/ckeditor.js"></script>
</body>

</html>