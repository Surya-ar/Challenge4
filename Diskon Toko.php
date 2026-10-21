<?php
$total = 600000;

if (!is_numeric($total) || !is_finite((float)$total) || $total < 0) {
    exit("Total belanja tidak valid!");
}

$diskon = ($total >= 500000) ? 0.15 :
          (($total >= 200000) ? 0.10 : 0);

$potongan = $total * $diskon;
$bayar = $total - $potongan;

echo "Total Awal: Rp " . number_format($total, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($potongan, 0, ',', '.') . "<br>";
echo "Total Bayar: Rp " . number_format($bayar, 0, ',', '.');
?>