<?php
$nilai = 75;

if ($nilai >= 80) {
    echo "Status: Lulus dengan predikat A";
} elseif ($nilai >= 70) {
    echo "Status: Lulus dengan predikat B";
} elseif ($nilai >= 60) {
    echo "Status: Lulus dengan predikat C";
} else {
    echo "Status: Tidak Lulus";
}
?>
