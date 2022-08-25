<?php 
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "pegawai");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;
    $id = '0';
	$nik = htmlspecialchars($data["nik"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$status = htmlspecialchars($data["status"]);

	$query = "INSERT INTO pegawai (nik,nama,email,status)
				VALUES
			  ('$nik', '$nama', '$email', '$status')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM pegawai WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$nik = htmlspecialchars($data["nik"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$status = htmlspecialchars($data["status"]);

	$query = "UPDATE pegawai SET
				nik = '$nik',
				nama = '$nama',
				email = '$email',
				status = '$status'
			  WHERE id = $id
			";
	// var_dump($query); die;
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	
}

?>
