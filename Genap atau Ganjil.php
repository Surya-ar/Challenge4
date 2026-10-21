<?php
$angka = 7;

if (!is_numeric($angka) || !is_finite((float)$angka) ||
    (int)$angka != $angka) {
    exit("Input harus berupa bilangan bulat!");
}

echo ($angka % 2 == 0) ? "Genap" : "Ganjil";
?>