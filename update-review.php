<?php
include "koneksi.php";
$nama        = $_POST['nama'];
$email 		 = $_POST['email'];
$hp	         = $_POST['hp'];
$review      = $_POST['review'];

$query = mysqli_query($koneksi, "UPDATE review SET nama='$nama', hp='$hp', review='$review' WHERE email='$email'")or die(mysql_error());
if ($query){
header('location:index.php');	
} else {
	echo "gagal";
    }
?>