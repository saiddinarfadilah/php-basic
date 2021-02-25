<?php
// dua cara buat array
$minuman = array('sprite', 'fanta', 'pepsi');
$makanan = ['KFC', 'MCD', 'Yosinoya'];

// menghapua array
// unset($minuman[0]);

// menambah array pada indeks tertentu
$minuman[3] = 'aqua';
// menambah indeks pada indeks akhir
$minuman[] = 'pucuk';

// 

// akses array manual
echo $minuman[0];
echo $minuman[1];
echo $minuman[2];

echo $makanan[2];

print_r($minuman);

// akses array dengan loop
for ($i = 0; $i < count($makanan); $i++) {
    echo $makanan[$i] . "<br>";
}

foreach ($minuman as $isi) {
    echo $isi . "<br>";
}

// array assosiatif tidak menggunakan indeks tapi menggunakan kata kunci dan diikuti tanda =>
$artikel = [
    "judul" => "MAHIR PHP",
    "penulis" => "SDF",
    "harga" => 2000
];

// cetak

echo "<h1> Artikel : " . $artikel["judul"] . "</h1>";
echo "<h1> Oleh : " . $artikel["penulis"] . "</h1>";
echo "<h1> Harga : " . $artikel["harga"] . "</h1>";
