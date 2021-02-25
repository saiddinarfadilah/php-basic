<?php
// pake tanda kutip satu biar enakeun

$teks1 = "BELAJAR PHP";
$teks2 = "Semangat untuk yang selalu berjuang";
$x = 5;
$y = 5;
$harga = 1000;

echo "<h1>" . $teks1 . "</h1>";
echo "Hey...." . $teks2 . "<br>";
echo $x + $y . "<br>";

printf("Hey.... %s sangat menyenangkan, tetapi %s", $teks1, $teks2);

echo "Harganya adalah $harga";
// dua angka dibelakang koma
printf("Harganya adalah %.2f", $harga) . "<br>";

// untuk mencetak tanda kutip didalam string gunakan tanda  back slah (\)
echo 'Hari ini adalah hari jum\'at<br>';

echo "Saya $teks2";
