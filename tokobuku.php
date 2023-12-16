<!DOCTYPE html>
<html>
<head>
    <title>TUGAS HAFI</title>
</head>
<body>
    <h2>Buku Hafi</h2>
    <form method="post" action="">
        <label for="no_transaksi">No Transaksi:</label>
        <input type="text" name="no_transaksi" id="no_transaksi">
        <br><br>
        <label for="nama_pembeli">Nama Pembeli:</label>
        <input type="text" name="nama_pembeli" id="nama_pembeli">
        <br><br>
        <label for="judul_buku">Judul Buku:</label>
        <input type="text" name="judul_buku" id="judul_buku">
        <br><br>
        <label for="jumlah_buku">Jumlah Buku:</label>
        <input type="text" name="jumlah_buku" id="jumlah_buku">
        <br><br>
        <label for="harga_buku">Harga Buku:</label>
        <input type="text" name="harga_buku" id="harga_buku">
        <br><br>
        <input type="submit" value="Submit">
    </form>

<?php

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $no_transaksi = $_POST['no_transaksi'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $judul_buku = $_POST['judul_buku'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $harga_buku = $_POST['harga_buku'];

    $total_harga_buku = $jumlah_buku * $harga_buku; 

    $total_belanja = $total_harga_buku;
    $diskon_belanja = 0;
    $diskon_transaksi = 0;

    
    if ($total_belanja > 150000) {
        $diskon_belanja = $total_belanja * 0.1;
    }
    if ($no_transaksi <= 50) {
        $diskon_transaksi = $total_belanja * 0.05;
    }
    $totalbayar=$total_belanja-$diskon_belanja-$diskon_transaksi;
    echo "No Transaksi: $no_transaksi<br>";
    echo "Nama Pembeli: $nama_pembeli<br>";
    echo "Judul Buku: $judul_buku<br>";
    echo "Jumlah Buku: $jumlah_buku<br>";
    echo "Total Harga Buku: $total_harga_buku <br>"; 
    echo "Diskon Belanja: $diskon_belanja <br>";
    echo "Diskon Transaksi: $diskon_transaksi <br>";
    echo "Total Belanja setelah diskon: $totalbayar <br>";
}
?>



</body>
</html>