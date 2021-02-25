<?php
// fungsi tanpa parameter
function perkenalan()
{
    echo "Nama Saya SDF";
}

perkenalan();
echo "<br>";

// fungsi menggunakan paramater

function perkenalanParams($nama, $salam = "Hey Tayo")
{
    echo $salam . ", <br>";
    echo "Perkenalkan nama saya : $nama <br>";
    // memanggil fungsi didalam fungsi
    echo "Umur Saya Sekarang" . hitungUmur(1994, 2020) . " tahun";
}
echo "<br>";

perkenalanParams("said", "Samlekum");
echo "<br>";

$aing = "Asep";
$salamaing = "Hallo Lurs";

perkenalanParams($aing, $salamaing);
// pemanggilan fungsi dengan satu parameter nama dan salam diisi dengan default
perkenalanParams($aing);
echo "<br>";


// fungsi yang mengembalikan nilai
function hitungUmur($tahunLahir, $tahunSekarang)
{
    $umur = $tahunLahir - $tahunSekarang;
    return $umur;
}

echo "Umur Saya Sekarang" . hitungUmur(1994, 2020) . " tahun";

echo "<br>";
// fungsi rekursif
function faktorial($angka)
{
    if ($angka < 2) {
        return 1;
    } else {
        // memanggil dirinya sendiri
        return ($angka * faktorial($angka - 1));
    }
}

// memanggil fungsi
echo "faktorial 5 adalah " . faktorial(6);
