<?php 
require 'koneksi.php';
if (isset($_GET['id'])) {
	mysqli_query($koneksi, "DELETE FROM topik WHERE id = '$_GET[id]'");
}
	echo "<script>
				alert('data berhasil di hapus');
				document.location.href='admin.php';
			</script>";


 ?>