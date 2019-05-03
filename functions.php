<?php

// $dbhost = 'localhost';
// $dbuser = 'id4504169_sedaerrt';
// $dbpass = 'megapro2005';
// $dbname = 'id4504169_sedaer';

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'sedaer';

$conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($conn->connect_error) {
	die('Maaf Koneksi Gagal: '. $conn->connect_error);
}else {
// 	echo "Koneksi Berhasil";
}

// sedaerrivertubing
// sedaernamatanaman

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
	}
	return $rows;
}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

  	 // cek username yang ganda
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if( mysqli_fetch_assoc($result)  ) {
		echo "<script>
				alert('Username yang sama telah terdaftar!')
			</script>";
	return false;
}

	// cek konfirmasi password
	if ( $password !== $password2) {
		echo "<script>
				alert('Konfirmasi password tidak sesuai!');
			</script>";
		return false;	
	}

	//  enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// Tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
	
	return mysqli_affected_rows($conn);
}

function tambah($data) {
	global $conn;
						
	//ambil data dari form
	$judul = htmlspecialchars($data["judul"]);
	$tanggal = $_POST["tanggal"];
	$content = $_POST["editor"];
	
	//upload gambar
	$gambar = upload();
	if( !$gambar ) {
		return false;
	}
    // (id,judul,tanggal,content,gambar)
	//query insert data
	$query = "INSERT INTO artikel VALUES (null,'$judul','$tanggal','$content','$gambar')";
	
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

	header('Location:adminpage.php');
}

function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile =$_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah ada gambar yang diupload
	if( $error===4 ) {
		echo "<script>
				alert('Pilih gambar terlebih dahulu!');
			</script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
				alert('Yang anda upload bukan gambar!');
			</script>";
	}

	// cek jika ukuran terlalu besar
	if( $ukuranFile > 10000000 ) {
		echo "<script>
				alert('Ukuran gambar terlalu besar!');
			</script>";
	}

	// lolos pengecekan, gambar siap di upload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'images/' . $namaFileBaru);

	return $namaFileBaru;
}

if (isset($_GET['Hapus'])) {
	hapus();
}

function hapus(){
	// koneksi
	global $conn;
	// ambil data dari form
	$id = $_GET['id'];
	// query
	$query = "DELETE FROM artikel where id=$id";
	// eksekusi
	$eksekusi = mysqli_query($conn, $query);
	if ($eksekusi) {
		header('Location:adminpage.php');
	}else{
		echo "gagal";
		# code...
	}
}	

function edit($data) {
	global $conn;

	//ambil data dari form
	$id = $data["id"];
	$judul = htmlspecialchars($data["judul"]);
	$tanggal = $_POST["tanggal"];
	$content = $_POST["editor"];
	$gambarLama = htmlspecialchars($data["gambarLama"]);
	
	//cek apakah admin memilih gambar baru
	if( $_FILES['gambar']['error'] === 4) {
		$gambar = $gambarLama;
	} else {
		$gambar = upload();
	}

	//query insert data
	$query = "UPDATE artikel SET judul = '$judul', tanggal = '$tanggal', content = '$content', gambar = '$gambar' WHERE id = $id";
	
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM artikel
						WHERE
			  		judul LIKE '%$keyword%' ORDER BY tanggal ASC";
	return query($query);
}

// function tambah($data) {
// 	global $conn;

// 	$nrp = $data["nrp"];
// 	$nama = $data["nama"];
// 	$email = $data["email"];
// 	$jurusan = $data["jurusan"];

// 	$query = "INSERT INTO mahasiswa
//                     VALUES
//                     ('', '$nrp', '$nama', '$email', '$jurusan')
// 				";

// 	mysqli_query($conn, $query);

// 	return mysqli_affected_rows($conn);
// }

?>