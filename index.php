<?php 
require 'functions.php';
$pegawai = query("SELECT * FROM pegawai");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
<body>
  <div class="container mt-4">
  <h1>Daftar Pegawai</h1>
  
    <a href="tambah.php"><button class="btn btn-primary">Tambah data mahasiswa</button></a>
        <br><br>
<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Aksi</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php $i = 1; ?>
	<?php foreach( $pegawai as $row ) : ?>
      <th scope="row"><?= $i; ?></th>
      <td> 
        <a href="edit.php?id=<?= $row["id"]; ?>"><span class="badge rounded-pill text-bg-primary">Ubah</span></a> |
		<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');"><span class="badge rounded-pill text-bg-danger">Hapus</span></a>
      </td>
      <td><?= $row["nik"]; ?></td>
      <td><?= $row["nama"]; ?></td>
      <td><?= $row["email"]; ?></td>
      <td><?= $row["status"]; ?></td>
    </tr>
    <?php $i++; ?>
	<?php endforeach; ?>    
  </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
