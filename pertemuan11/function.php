<?php 
	// koneksi ke database
	$koneksi = mysqli_connect("localhost", "root", "", "phpdasar");

	function query($query){
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result) ) {
			$rows[] = $row;
		}
		return $rows;
	}

	// fungsi tambah
	function tambah($data){
		global $koneksi;

		// ambil data dari tiap elemen dalam form
		$nama = htmlspecialchars($data["nama"]);
		$nrp = htmlspecialchars($data["nrp"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$email = htmlspecialchars($data["email"]);
		$gambar = htmlspecialchars($data["gambar"]);

		// query insert data
		$query = "INSERT INTO Mahasiswa
						VALUES
					('', '$nama', '$nrp', '$jurusan', '$alamat', '$email', '$gambar')
				 ";
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);
	}

	// fungsi hapus
	function hapus($id){
		global $koneksi;
		mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");
		return mysqli_affected_rows($koneksi);
	}

	// fungsi ubah
	function ubah($data){
		global $koneksi;

		// ambil data dari tiap elemen dalam form
		$id = $data["id"];
		$nama = htmlspecialchars($data["nama"]);
		$nrp = htmlspecialchars($data["nrp"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$email = htmlspecialchars($data["email"]);
		$gambar = htmlspecialchars($data["gambar"]);

		// query insert data
		$query = "UPDATE mahasiswa SET
						nama = '$nama',
						nrp = '$nrp',
						jurusan = '$jurusan',
						alamat = '$alamat',
						email = '$email',
						gambar = '$gambar'
					WHERE id = $id
				 ";
		mysqli_query($koneksi, $query);

		return mysqli_affected_rows($koneksi);

	}
?>