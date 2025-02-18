<!--memadam rekod barang-->
<?php
include("config.php");

$query=mysqli_query($connect,"DELETE FROM barang  WHERE bilbotol='$_GET[bilbotol]';");
if ($query) {
    echo "<script>alert('Data Berhasil Dihapus');window.location.href='index.php';
    </script>";
}

?>