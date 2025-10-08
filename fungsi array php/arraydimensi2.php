<?php
// Soal 2
$buah = [
    ["Apel", 15000, 10],
    ["Jeruk", 12000, 8],
    ["Mangga", 20000, 5]
];

// 1. Cetak nama buah pertama
echo "Nama buah pertama adalah: " . $buah[0][0] . "<br><br>";

// 2. Hitung total nilai stok * harga untuk semua buah
$total = 0;
foreach ($buah as $data) {
    $total += $data[1] * $data[2];
}
echo "Total nilai semua buah (stok × harga): Rp " . number_format($total, 0, ',', '.');
?>
<?php