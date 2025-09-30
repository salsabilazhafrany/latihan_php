<?php
echo "<h2>Pembagian Grade Berdasarkan Nilai</h2>";

for ($i = 0; $i <= 100; $i++) {
    if ($i >= 0 && $i <= 40) {
        $Grade = "E";
    } elseif ($i >= 41 && $i <= 50) {
        $Grade = "D";
    } elseif ($i >= 51 && $i <= 60) {
        $Grade = "C";
    } elseif ($i >= 61 && $i <= 79) {
        $Grade = "B";
    } else { // 80-100
        $Grade = "A";
    }
    echo "Nilai: $i &rarr; Grade $Grade<br>";
}
?>