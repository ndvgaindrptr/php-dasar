<?php 
	$kelas_RPL = [
		[
			"nama" => "Vega",
			"nisn" => "9993016633",
			"tgl_lahir" => "21-05-2006",
			"tempat_lahir" => "Jbr",
			"alamat" => "Jbr"
		],
		[
			"nama" => "Kevin",
			"nisn" => "9993016644",
			"tgl_lahir" => "12-02-2005",
			"tempat_lahir" => "Jbr",
			"alamat" => "Jbr"
		]
	];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Latihan 1 | GET</title>
</head>
<body>
	<h2>daftar siswa tkj</h2>
	<p>angkatan ke-13 SMK N 8 JEMBER</p>
	<ul>
	<?php foreach($kelas_tkj as $siswa) : ?>
			<a href="latihan2.php?
				nama=<?php echo $siswa["nama"]; ?>&
				nisn=<?php echo $siswa["nisn"]; ?>&
				tgl_lahir=<?php echo $siswa["tgl_lahir"]; ?>&
				tempat_lahir=<?php echo $siswa["tempat_lahir"]; ?>&
				alamat=<?php echo $siswa["alamat"]; ?>">
				<li><?php echo $siswa["nama"]; ?></li>
			</a>
	<?php endforeach; ?>
	</ul>
</body>
</html>