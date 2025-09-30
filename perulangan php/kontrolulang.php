<?php
echo "<h2>Daftar Barang di Toko</h2>";

$barang = [
    ["nama" => "Buku Tulis", "harga" => 5000],
    ["nama" => "Pulpen", "harga" => 3000],
    ["nama" => "Pensil", "harga" => 2000],
    ["nama" => "Penghapus", "harga" => 1500],
    ["nama" => "Rautan", "harga" => 2500],
    ["nama" => "Penggaris", "harga" => 4000],
    ["nama" => "Tas Sekolah", "harga" => 120000],
    ["nama" => "Sepatu", "harga" => 250000],
    ["nama" => "Seragam Sekolah", "harga" => 180000],
    ["nama" => "Topi Sekolah", "harga" => 25000],
    ["nama" => "Laptop", "harga" => 7500000],
    ["nama" => "Printer", "harga" => 1500000],
    ["nama" => "Flashdisk 16GB", "harga" => 80000],
    ["nama" => "Harddisk Eksternal", "harga" => 950000],
    ["nama" => "Meja Belajar", "harga" => 500000],
    ["nama" => "Kursi Belajar", "harga" => 350000],
    ["nama" => "Buku Kamus", "harga" => 60000],
    ["nama" => "Spidol", "harga" => 7000],
    ["nama" => "Papan Tulis", "harga" => 400000],
    ["nama" => "Proyektor", "harga" => 3500000]
];

foreach ($barang as $item) {
    $harga = $item["harga"];

    if ($harga <= 10000) {
        $kategori = "Murah";
    } elseif ($harga > 10000 && $harga <= 100000) {
        $kategori = "Sedang";
    } elseif ($harga > 100000 && $harga <= 1000000) {
        $kategori = "Mahal";
    } else { // > 1 juta
        $kategori = "Sangat Mahal";
    }

    echo "Nama Barang: {$item['nama']} | Harga: Rp " . number_format($harga, 0, ',', '.') . " → Kategori: $kategori<br>";
}
?>
