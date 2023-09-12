<?php 
	session_start();
	if ( !isset($_SESSION["login"]) ) {
		header("Location: login.php");
		exit;
	}

	require 'function.php';
	$mahasiswa = query("SELECT * FROM mahasiswa");

	// jika tombol cari ditekan
	if ( isset($_POST["cari"])) {
		$mahasiswa = cari($_POST["keyword"]);
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halaman Admin</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<a href="logout.php">Logout</a>

	<h1>Daftar Mahasiswa</h1>
	<a href="tambah.php">Tambah Data Mahasiswa</a>
	<br><br>

	<form action="" method="post">
		<input type="text" name="keyword" size="25" autofocus autocomplete="off" placeholder="masukkan nama mahasiswa" id="keyword">
		<button type="submit" name="cari" id="tombol-cari">SEARCH</button>
	</form>
	<br>
	<div id="container">
		<table border="1" cellpadding="10" cellspacing="0">
			<tr>
				<th>NO.</th>
				<th>AKSI</th>
				<th>GAMBAR</th>
				<th>NRP</th>
				<th>NAMA</th>
				<th>JURUSAN</th>
				<th>ALAMAT</th>
				<th>EMAIL</th>

			</tr>
			
			<?php $i=1; ?>
			<?php foreach( $mahasiswa as $row) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"]; ?>">UBAH</a> | 
					<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">HAPUS</a>
				</td>
				<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
				<td><?= $row["nrp"]; ?></td>
				<td><?= $row["nama"]; ?></td>
				<td><?= $row["jurusan"]; ?></td>
				<td><?= $row["alamat"]; ?></td>
				<td><?= $row["email"]; ?></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>


	<script src="js/script.js"></script>
</body>
</html>