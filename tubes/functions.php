<?php  
// koneksi database
$conn = mysqli_connect("localhost", "root", "", "Mahasiswa");
$sql = "SELECT daftar.nim, daftar.nama, kelas.namakelas, daftar.jurusan, daftar.gambar FROM daftar, kelas WHERE daftar.kelas = kelas.id ORDER BY daftar.nim";
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
		# code...
	}
	return $rows;
}


function tambah($data){

	global $conn;

	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "INSERT INTO daftar VALUES ('$nim', '$nama', '$kelas', '$jurusan', '$gambar')";

	mysqli_query($conn, $query ) or die (mysqli_error($conn)); 

	return mysqli_affected_rows($conn);
}

function hapus($nim){
	global $conn;
	mysqli_query($conn, "DELETE FROM daftar WHERE nim = $nim");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;

	$nim = htmlspecialchars($data["nim"]);
	$nama = htmlspecialchars($data["nama"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "UPDATE daftar SET 
				nim = '$nim', 
				nama = '$nama',
				kelas = '$kelas',
				jurusan = '$jurusan',
				gambar = '$gambar'

				WHERE nim = $nim;
				";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

?>

