<?php 
	// ngenes amat hidup lu!!!
	$kelas_rpl = [
		[
			"nama" => "Vega",
			"nisn" => "9993016633",
			"tgl_lahir" => "21-05-2006",
			"tempat_lahir" => "Jember",
			"alamat" => "Umbulrejo"
		],
		[
			"nama" => "Kevin",
			"nisn" => "9993016644",
			"tgl_lahir" => "12-02-2005",
			"tempat_lahir" => "Jember",
			"alamat" => "Sidomekar"
		]
	];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 2 | array associative</title>
</head>
<body>
	<h2>daftar siswa rpl</h2>
	<p>angkatan ke-13 SMK N 8 JEMBER</p>
	<?php foreach($kelas_rpl as $siswa) : ?>
		<ul>
			<li>Nama : <?php echo $siswa["nama"]; ?></li>
			<li>NISN : <?php echo $siswa["nisn"]; ?></li>
			<li>Tanggal Lahir : <?php echo $siswa["tgl_lahir"]; ?></li>
			<li>Tempat Lahir : <?php echo $siswa["tempat_lahir"]; ?></li>
			<li>Alamat : <?php echo $siswa["alamat"]; ?></li>
		</ul>
	<?php endforeach; ?>
</body>
</html>