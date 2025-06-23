<?php include("database.php"); ?>    

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tabel</title>
    <style>
        body {
            background:rgb(7, 80, 250);
            height: 50vh;
        }
        .box a{
            font-size: 20px;
            color: rgb(85, 237, 9);
            text-decoration: none;
        }
        .box a:hover {
            text-decoration: underline;
        }
        tr {
            border: 2px solid black;
            background: #fff;
        }
        th {
            background: red;
        }
    </style>
</head>

<body>
    <div class="box">
        <h2><a href="index.php">Kembali</a></h2>
    </div>
    <div class="tabel">
        <div>
            <header>
                <h2>Akhiran Plat Nomor yang Berangka Ganjil</h2>
            </header>
            <table border="1" cellpadding='10' cellspacing='0'>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemilik</th>
                        <th>Nomor Kendaraan</th>
                        <th>Waktu Input</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql_ganjil = "SELECT * FROM plat_ganjil";
                    $query_ganjil = mysqli_query($db, $sql_ganjil);

                    while($plat_ganjil = mysqli_fetch_array($query_ganjil)){
                        echo "<tr>";

                        echo "<td>".$plat_ganjil['id']."</td>";
                        echo "<td>".$plat_ganjil['nama_pemilik']."</td>";
                        echo "<td>".$plat_ganjil['no_kendaraan']."</td>";
                        echo "<td>".$plat_ganjil['waktu']."</td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>     
        <div>
            <header>
                <h2>Akhiran Plat Nomor yang Berangka Genap</h2>
            </header>
            <table border="1" cellpadding='10' cellspacing='0'>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemilik</th>
                        <th>Nomor Kendaraan</th>
                        <th>Waktu Input</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql_genap = "SELECT * FROM plat_genap";
                    $query_genap = mysqli_query($db, $sql_genap);

                    while($plat_genap = mysqli_fetch_array($query_genap)){
                        echo "<tr>";

                        echo "<td>".$plat_genap['id']."</td>";
                        echo "<td>".$plat_genap['nama_pemilik']."</td>";
                        echo "<td>".$plat_genap['no_kendaraan']."</td>";
                        echo "<td>".$plat_genap['waktu']."</td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>