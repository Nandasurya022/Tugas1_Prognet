<?php
include "koneksi.php";
$nama        = $_POST['nama'];
$email 		 = $_POST['email'];
$hp	         = $_POST['hp'];
$review      = $_POST['review'];


$query = mysqli_query($koneksi, "INSERT INTO review (nama, email, hp, review) VALUES ('$nama', '$email', '$hp', '$review')");
if ($query){
	echo "<script>alert('Review Berhasil!'); window.location = 'index.php'</script>";	
} else {
	echo "<script>alert('Review Gagal!'); window.location = 'index.php'</script>";	
}
//}
?>