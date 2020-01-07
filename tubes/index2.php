<?php 
$conn = mysqli_connect("localhost", "root", "", "mhm");
$mhm = mysqli_query($conn, "SELECT * FROM dafter");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<tr>
	<?php foreach ($mhm as $row) : ?>
		<li>gambar = <img src="img/<?= $row["foto"]; ?>" width="50"></li>
		<li>id = <?= $row["id"] ?></li>
		<li>nama = <?= $row["nama"] ?></li>
		<li>alamat = <?= $row["alamat"] ?></li>
		<li>tempat tanggal lahir = <?= $row["ttl"] ?></td></li>
		<li>agama = <?= $row["agama"] ?></td></li>
		<li>Hobby = <?= $row["hobi"] ?></td></li>
		<li>Email = <?= $row["Email"] ?></td></li>
		<li>Pendidikan = <?= $row["pendidikan"] ?></li></th>
		<li>Organisasi = <?= $row["organisasi"] ?></li></th>
		<li>Prestasi = <?= $row["prestasi"] ?></td></li>
	</tr>
	<?php endforeach; ?>

</body>
</html>