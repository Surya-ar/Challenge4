<?php
$namaBarang = "Sepatu";
$harga = 27000;
$jumlah = 2;

if (!is_string($namaBarang) || trim($namaBarang) === "" ||
    !is_numeric($harga) || !is_numeric($jumlah) ||
    $harga < 0 || $jumlah < 0 ||
    (int)$jumlah != $jumlah) {
    exit("Input tidak valid!");
}

$total = $harga * $jumlah;

echo "Barang: " . htmlspecialchars($namaBarang) . "<br>";
echo "Total: Rp " . number_format($total, 0, ',', '.');
?>