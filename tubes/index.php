<?php 

require('functions.php');
$mahasiswa = query("SELECT daftar.nim, daftar.nama, kelas.namakelas, daftar.jurusan, daftar.gambar FROM daftar, kelas WHERE daftar.kelas = kelas.id ORDER BY daftar.nim");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<a href="tambah.php">Tambah data mahasiswa</a>
	<br></br>
	<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>aksi</th>
		<th>gambar</th>
		<th>nim</th>
		<th>nama</th>
		<th>kelas</th>
		<th>jurusan</th>
	</tr>

	<?php  $i = 1;?>
	<?php foreach ($mahasiswa as $row) : ?>
		<tr>
			<td><?= $i ?></td>
			<td>
				<a href="ubah.php?nim=<?= $row["nim"]; ?>">ubah |</a>
				<a href="hapus.php?nim=<?= $row["nim"]; ?>" onclick="return confirm('yakin?');">hapus</a>
			</td>
			<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
			<td><?= $row["nim"] ?></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["namakelas"] ?></td>
			<td><?= $row["jurusan"] ?></td>
		</tr>
	<?php $i++; ?>		
	<?php endforeach; ?>

</table>

</body>
</html>