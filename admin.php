
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin</title>
	<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-light bg-light pl-6">
  <a class="navbar-brand text-info" href="index.html">Berita INDONESIA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Admin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tambah.php">Tambah Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="user.php">User</a>
      </li>
    
    </ul>
  </div>
</nav>






	<div class="container mt-100" >
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Id</th>
      <th scope="col">Judul</th>
      <th scope="col">Gambar</th>
      <th scope="col">Isi</th>
      <th scope="col" colspan="2">Action</th>
      

    </tr>
  </thead>
  <tbody>
  	<?php require 'koneksi.php';

				$tampil = mysqli_query($koneksi, "SELECT * FROM topik");
				$no = 1;
				$cek = mysqli_num_rows($tampil) ?>
					<?php if ($cek > 0) :?>

						<?php foreach ($tampil as $data): ?>
							
							<tr scope="row" >
								<td><?= $no; ?></td>
								<td><?= $data['id']; ?></td>
								<td><?= $data['judul']; ?></td>
								<td>
									<img src="img/<?= $data['gambar']; ?>" width="200">
								</td>
								<td ><?= $data['isi']; ?></td>
								<td><a href="edit.php?id=<?= $data['id']; ?>">edit</a></td>
								<td><a href="hapus.php?id=<?= $data['id']; ?>">hapus</a></td>						
							</tr>



							      
							  



							<?php $no++; ?>
						<?php endforeach ?>
					<?php else :?>
							<tr>
				                <td style="text-align: center;" colspan="3">Data kosong</td>
				            </tr>
					<?php endif; ?>

  </tbody>
</table>


</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>

</body>
</html>