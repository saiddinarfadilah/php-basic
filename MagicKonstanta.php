<?php
// konstanta yang menyatakan baris di editor
echo "Ini baris pertama <br>";
echo "Ini baris " . __LINE__ . "<br>";

// konstanta yang menyatakan alamat lengkap dari sebuah file php
echo "Alamat File " . __FILE__ . "<br>";

// konstanta yang menyatakan alamat direktori lengkap dari sebuah file php
echo "Alamat File " . __DIR__ . "<br>";

// konstanta yang menyatakan nama fungsi
function cobaFungsi()
{
    echo "Nama Fungsi " . __FUNCTION__ . "<br>";
}
// panggil fungsi
cobaFungsi();

// konstanta yang menyatakan nama kelas
class manusiaSerigala
{
    function printClassname()
    {
        echo "Nama Kelas " . __CLASS__ . "<br>";
    }
}
// membuat objek
$aku = new manusiaSerigala();
$aku->printClassname();

// konstanta yang menyatakan nama metode
class manusiaSendal
{
    function lari()
    {
        echo "ini adaah method" . __METHOD__ . "<br>";
    }

    function lompat()
    {
        echo "ini adaah method" . __METHOD__ . "<br>";
    }
}
// membuat objek
$aku = new manusiaSendal;
$aku->lari();
$aku->lompat();
