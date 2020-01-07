<?php  

require 'functions.php';

$nim = $_GET["nim"];

$mhs = query("SELECT * FROM daftar WHERE nim = $nim")[0];


if (isset($_POST["submit"])) {

	if ( ubah($_POST) > 0) {
		echo "
			<script>
				alert('data berhasil diubah');
				document.location.href = 'index.php';
			</script>
		";
		# code...
	} else {
		echo "
			<script>
				alert('data gagal diubah');
				document.location.href = 'index.php';
			</script>
		";
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah data mahasiswa</title>
</head>
<body>
	<h1>Ubah data mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nim">Nim : </label>
				<input type="text" name="nim" id="nim" required="" value="<?= $mhs["nim"]; ?> ">
			</li>
			<li>
				<label for="nama">nama : </label>
				<input type="text" name="nama" id="nama" required="" value="<?= $mhs["nama"]; ?> ">
			</li>
			<li>
				<label for="kelas">kelas : </label>
				<input type="text" name="kelas" id="kelas" required="" value="<?= $mhs["kelas"]; ?> ">
			</li>
			<li>
				<label for="jurusan">jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required="" value="<?= $mhs["jurusan"]; ?> ">
			</li>
			<li>
				<label for="gambar">gambar : </label>
				<input type="text" name="gambar" id="gambar" required="" value="<?= $mhs["gambar"]; ?> ">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>
</body>
</html>