<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Plat Nomor Kendaraan</title>
</head>
<body>
    <div class="wrapper">
        <form action="veal.php" method="POST">
            <h2>Plat Nomor Kendaraan</h2>
            <div class="input-box">
                <input type="text" name="nama_pemilik" placeholder="Nama Pemilik" required="required">
                <i></i>
            </div>
            <div class="input-box">
                <input type="text"  name="no_kendaraan" placeholder="Nomor Kendaraan" required="required">
                <i></i>
            </div>
            <input type="submit" value="Submit" name="veal" class="btn">
            <div class="cek-tabel">
                <a href="tabel.php">Cek Tabel Nomor Kendaraan</a>
            </div>
        </form>
    </div>
</body>
</html>