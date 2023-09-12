<?php 
	require '../function.php';
	$keyword = $_GET["keyword"];
	$query = "SELECT * FROM mahasiswa
				 WHERE
					nama LIKE '%$keyword%' OR
					nrp LIKE '%$keyword%' OR
					jurusan LIKE '%$keyword%'
			";
	$mahasiswa = query($query);
	
?>

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