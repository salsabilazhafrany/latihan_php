<?php
$totalBelanja = 150000;

if ($totalBelanja >= 100000) {
    echo "Selamat, Anda mendapat diskon 10%!<br>";
    $totalBelanja = $totalBelanja * 0.9;
}
echo "Total yang harus dibayar: Rp " . $totalBelanja;
?>
