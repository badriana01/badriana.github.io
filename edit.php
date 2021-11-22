	<?php 
require 'koneksi.php';


	if (isset($_GET['id'])) {
		$tampil = mysqli_query($koneksi, "SELECT * FROM topik WHERE id = '$_GET[id]'");
		$data = mysqli_fetch_array($tampil);
	};
 ?>




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
			     </ul>
			  </div>
	</nav>

	<div class="container">
		<form action="" method="POST" enctype="multipart/form-data">
		
		  <div class="form-group">
		    <label for="judul">Judul</label>
		    <input type="text" class="form-control" name="judul" id="judul" value="<?= $data['judul']; ?>">
		  </div>
		  <div class="form-group">
		    <label for="gambar">gambar</label>
		    <input type="file" class="form-control" id="gambar" name="gambar"  value="<?= $data['gambar']; ?>">
		  </div>
		  <div class="form-group">
		    <label for="isi">isi</label>
		    <textarea name="isi" id="isi" class="form-control" value="<?= $data['isi']; ?>" required></textarea></td>
		  </div>

		  <button type="submit" class="btn btn-primary" name="kirim">Submit</button>
		</form>
	</div> 

	<?php 
		require 'koneksi.php';
		if (isset($_POST['kirim'])) {
			$file_name= $_FILES['gambar']['name'];
			move_uploaded_file($_FILES['gambar']['tmp_name'], 'img/' .$file_name);

			 mysqli_query($koneksi , "UPDATE  topik SET gambar = '$file_name',

			judul = '$_POST[judul]',
			isi = '$_POST[isi]'
			WHERE id = '$_GET[id]'");


			echo "<script>
			alert('data berhasil di edit');
			document.location.href='admin.php';
		</script>";

		}
	 ?>
</form>

<script src="ckeditor/ckeditor.js"></script>
  <script src="ckeditor/styles.js"></script>

  <script type="text/javascript">
   CKEDITOR.replace('isi');
  </script>



<script src="ckeditor/ckeditor.js"></script>
  <script src="ckeditor/styles.js"></script>

  <script type="text/javascript"> CKEDITOR.replace('isi');</script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  
  </body>
</html>

</body>
</html>	
</body>
</html>
