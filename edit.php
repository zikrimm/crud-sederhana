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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
<body>
    <div class="container mt-4">
  <h1>Ubah data pegawai</h1>

<form action="" method="post">
    <input type="hidden" name="id" value="<?= $pegawai["id"]; ?>">
    <div class="mb-3">
        <label for="nik" class="form-label">NIK</label>
        <input type="text" class="form-control" name="nik" id="nik" value="<?= $pegawai["nik"]; ?>">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <input type="text" class="form-control" name="nama" id="nama" value="<?= $pegawai["nama"]; ?>" >
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="<?= $pegawai["email"]; ?>" >
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" name="status" id="status" value="<?= $pegawai["status"]; ?>" >
    </div>

    <button class="btn btn-primary" name="submit">Ubah Data</button>
    

</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>

