<?php 
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Pegawai</title>
</head>
<body>

<h1>Daftar Pegawai</h1>
<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>Email</th>
        <th>Status</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $pegawai as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
            <a href="edit.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">hapus</a>
		</td>
		<td><?= $row["nik"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["status"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</body>
</html>
