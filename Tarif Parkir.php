
<?php
$jenis = "Motor";
$lamaJam = 3;

// Validasi jenis kendaraan
if ($jenis !== "Motor" && $jenis !== "Mobil") {
    exit("Error: Jenis kendaraan harus Motor atau Mobil!");
}

// Validasi lama parkir
if (
    !is_numeric($lamaJam) ||
    !is_finite((float)$lamaJam) ||
    (float)$lamaJam < 1 ||
    (float)$lamaJam != (int)$lamaJam
) {
    exit("Error: Lama parkir harus berupa bilangan bulat minimal 1 jam!");
}

// Tarif berdasarkan jenis kendaraan
if ($jenis === "Motor") {
    $tarifAwal = 2000;
    $tarifTambahan = 1000;
} else {
    $tarifAwal = 5000;
    $tarifTambahan = 3000;
}

// Perhitungan tarif
if ($lamaJam <= 2) {
    $total = $tarifAwal;
} else {
    $total = $tarifAwal + (($lamaJam - 2) * $tarifTambahan);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kalkulator Tarif Parkir</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            margin: 0;
            padding: 20px;
        }

        .kartu {
            background: white;
            max-width: 350px;
            margin: 60px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 12px #0002;
        }

        h2 {
            color: #2563eb;
        }

        .total {
            font-size: 24px;
            font-weight: bold;
            color: #15803d;
        }
    </style>
</head>
<body>
    <div class="kartu">
        <h2>Tarif Parkir</h2>

        <p>Jenis Kendaraan: <?= htmlspecialchars($jenis) ?></p>
        <p>Lama Parkir: <?= (int)$lamaJam ?> jam</p>

        <hr>

        <p>Total Biaya:</p>
        <div class="total">
            Rp <?= number_format($total, 0, ',', '.') ?>
        </div>
    </div>
</body>
</html>
