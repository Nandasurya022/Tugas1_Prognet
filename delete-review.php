<?php
include "koneksi.php";
if (isset($_GET['email'])){
    $email = $_GET['email'];
    
    $query = mysqli_query($koneksi, "DELETE FROM review WHERE email='$email'");
    if ($query){
        echo "<script>alert('Data Berhasil dihapus!'); window.location = 'index.php'</script>";	
    } else {
        echo "<script>alert('Data Gagal dihapus!'); window.location = 'index.php'</script>";	
    }
} else {
    echo 'Data Kosong';
}
?>