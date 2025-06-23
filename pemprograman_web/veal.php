<?php include("database.php");

if(isset($_POST['veal'])){
    $nama_pemilik = $_POST['nama_pemilik'];
    $no_kendaraan = $_POST['no_kendaraan'];
    preg_match_all('/\d+/', $no_kendaraan, $matches);

    if (!empty($matches[0])) {
        // Ambil angka terakhir yang ditemukan
        $angka = end($matches[0]);
        $last_digit = substr($angka, -1);

        if ((int)$last_digit % 2 === 0) {
            $sql = "INSERT INTO plat_genap (nama_pemilik, no_kendaraan) VALUE ('$nama_pemilik', '$no_kendaraan')";
        } else {
            $sql = "INSERT INTO plat_ganjil (nama_pemilik, no_kendaraan) VALUE ('$nama_pemilik', '$no_kendaraan')";
        }
    } else {
        echo "<p style='color:red;'>Tidak ditemukan angka dalam input.</p>";
    }
    
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: index.php?status=sukses');
    } else {
        header('Location: index.php?status=gagal');
    }
} 
?>