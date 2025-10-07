<?php
// Matriks A
$A = [
    [1, 1, 1],
    [2, 2, 2],
    [3, 3, 3]
];

// Matriks B
$B = [
    [3, 3, 3],
    [2, 2, 2],
    [1, 1, 1]
];

// Matriks hasil (kosong)
$C = [];

// Proses penjumlahan menggunakan looping
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $C[$i][$j] = $A[$i][$j] + $B[$i][$j];
    }
}

// Tampilkan hasil dalam bentuk tabel HTML
echo "<h3>Hasil Penjumlahan Matriks A + B</h3>";
echo "<table border='0' cellpadding='5' cellspacing='0'>";

// Loop untuk menampilkan hasil
for ($i = 0; $i < 3; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $C[$i][$j] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>