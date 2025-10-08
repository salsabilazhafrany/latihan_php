<?php
// Soal 1
$siswa = [
    ["Nama" => "Andi", "Matematika" => 85, "Bahasa" => 90],
    ["Nama" => "Budi", "Matematika" => 78, "Bahasa" => 88],
    ["Nama" => "Citra", "Matematika" => 92, "Bahasa" => 95]
];

// Cetak nilai Bahasa dari siswa ke-2
echo "Nilai Bahasa dari siswa ke-2 (" . $siswa[1]["Nama"] . ") adalah: " . $siswa[1]["Bahasa"] . "<br><br>";

// Cetak semua data menggunakan looping
echo "<b>Data Semua Siswa:</b><br>";
foreach ($siswa as $data) {
    echo "Nama: " . $data["Nama"] . "<br>";
    echo "Nilai Matematika: " . $data["Matematika"] . "<br>";
    echo "Nilai Bahasa: " . $data["Bahasa"] . "<br><br>";
}
?>
<?php