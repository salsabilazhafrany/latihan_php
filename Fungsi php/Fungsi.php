<?php
// =====================
// 1. FUNGSI BILANGAN TERBESAR
// =====================
echo "BILANGAN TERBESAR<br>";
function terbesar($x, $y)
{
    if ($x > $y) {
        return $x;
    } else {
        return $y;
    }
}
$bil1 = 700;
$bil2 = 120;
echo "Bilangan terbesar dari $bil1 dan $bil2 adalah: " . terbesar($bil1, $bil2);
echo "<br><br>";

// =====================
// 2. GETDATE()
// =====================
echo "TANGGAL SEKARANG DENGAN getdate()<br>";
$sekarang = getdate();
$tanggal = $sekarang["mday"];
$bulan   = $sekarang["mon"];
$tahun   = $sekarang["year"];
echo "Sekarang tanggal : $tanggal-$bulan-$tahun";
echo "<br><br>";

// =====================
// 3. DATE()
// =====================
echo "TANGGAL SEKARANG DENGAN date('d-F-Y')<br>";
echo "Sekarang tanggal : " . date('d-F-Y');
?>
