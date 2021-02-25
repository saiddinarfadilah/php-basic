<?php
// perintah perulangan dimana varibale diawali nilai 0 dan berulang selagi varibel kurang dari 10
for ($i = 0; $i < 10; $i++) {
    echo "<h1> perulangan for ke-$i</h1>";
}
// perulangan while
$ulangi = 0;
while ($ulangi <= 10) {
    echo "<h1>Perulangan while ke-$ulangi</h1>";
    $ulangi++;
}
// perulangan do while
$again = 0;
do {
    echo "<h1>Perulangan Do while ke-$again</h1>";
    $again++;
} while ($again <= 10);

// foreach perulangan untuk mencetak array

$books = ["Intro PHP", "Variabel PHP", "Tipe Data PHP", "Prosedur dan Fungsi PHP"];

echo "<h1>MAHIR PHP</h1>";
echo "<ul>";
foreach ($books as $buku) {
    echo "<li>$buku</li>";
}
echo "</ul>";

// perulangan bersarang
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo "Perulangan bersarang ke - ($i, $j)<br>";
    }
}
// perpaduan while dan for
$cobai = 0;
while ($cobai <= 10) {
    for ($cobaj = 0; $cobaj < 5; $cobaj++) {
        echo "Perulangan kombinasi ke - ($cobai, $cobaj)<br>";
    }
    $cobai++;
}
