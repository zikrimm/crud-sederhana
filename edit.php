<?php
require 'functions.php';

$id = $_GET["id"];

$pegawai = query("SELECT * FROM pegawai WHERE id = $id")[0];


if( isset($_POST["submit"]) ) {
	
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data pegawai</title>
</head>
<body>
	<h1>Ubah data pegawai</h1>

	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $pegawai["id"]; ?>">
		<ul>
			<li>
				<label for="nik">NIK : </label>
				<input type="text" name="nik" id="nik" required value="<?= $pegawai["nik"]; ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?= $pegawai["nama"]; ?>">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" value="<?= $pegawai["email"]; ?>">
			</li>
			<li>
				<label for="status">status :</label>
				<input type="text" name="status" id="status" value="<?= $pegawai["status"]; ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>
