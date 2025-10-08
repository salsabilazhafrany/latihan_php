<?php
// Soal 3
$produk = [
    ["Nama" => "Laptop", "Kategori" => "Elektronik", "Harga" => 7500000, "Rating" => 4.7],
    ["Nama" => "Headphone", "Kategori" => "Aksesoris", "Harga" => 1200000, "Rating" => 4.5],
    ["Nama" => "Smartphone", "Kategori" => "Elektronik", "Harga" => 9500000, "Rating" => 4.8]
];

// Mencari produk dengan harga tertinggi
$tertinggi = $produk[0];
foreach ($produk as $item) {
    if ($item["Harga"] > $tertinggi["Harga"]) {
        $tertinggi = $item;
    }
}

echo "Produk dengan harga tertinggi adalah: " . $tertinggi["Nama"] . 
     " (Rp " . number_format($tertinggi["Harga"], 0, ',', '.') . ")";
?>
<?php