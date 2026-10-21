
<?php
$berat = 65;
$tinggi = 1.70;

// Pastikan input berupa angka
if (!is_numeric($berat) || !is_numeric($tinggi)) {
    exit("Error: Berat dan tinggi harus berupa angka!");
}

// Ubah ke tipe angka
$berat = (float)$berat;
$tinggi = (float)$tinggi;

// Tolak nilai nol atau negatif
if ($berat <= 0 || $tinggi <= 0) {
    exit("Error: Berat dan tinggi harus lebih dari 0!");
}

// Hitung BMI
$bmi = $berat / ($tinggi * $tinggi);

// Tentukan kategori
if ($bmi < 18.5) {
    $kategori = "Kurus";
} elseif ($bmi < 25) {
    $kategori = "Normal";
} elseif ($bmi < 30) {
    $kategori = "Gemuk";
} else {
    $kategori = "Obesitas";
}

// Tampilkan hasil
echo "Berat badan: " . $berat . " kg<br>";
echo "Tinggi badan: " . $tinggi . " meter<br>";
echo "BMI: " . number_format($bmi, 1, ',', '.') . "<br>";
echo "Kategori: " . $kategori;
?>
