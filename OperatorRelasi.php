<?php
$a = 7;
$b = 5;
$total = 5000;

// lebih besar
$lebihBesar = $a > $b;
echo "$a > $b = $lebihBesar";
echo "<hr>";

// lebih kecil
$lebihKecil = $a < $b;
echo "$a < $b = $lebihKecil";
echo "<hr>";

// sama dengan
$samaDengan = $a == $b;
echo "$a = $b = $samaDengan";
echo "<hr>";

// tidak sama dengan
$tidakSamaDengan = $a != $b;
echo "$a <> $b = $tidakSamaDengan";
echo "<hr>";

// lebih besar sama dengan
$lebihBesarSamaDengan = $a >= $b;
echo "$a >= $b = $lebihBesarSamaDengan";
echo "<hr>";

// lebih kecil sama dengan
$lebihKecilSamaDengan = $a <= $b;
echo "$a <= $b = $lebihKecilSamaDengan";
echo "<hr>";

// contoh

if ($total > 10000) {
    echo "Anda Dapat Diskon";
} else {
    echo "Tidak ada Diskon";
}
