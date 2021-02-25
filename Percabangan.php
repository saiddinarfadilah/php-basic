<?php
$umur = 12;
$nilai = 80;
$level = "";

// percabangan if else
if ($umur >= 20) {
    echo "Kamu boleh akses situs ini";
} else {
    echo "Kamu tidak boleh akses ini <>";
}

// percabangan if elseif dan else
if ($nilai > 80) {
    $grade = "Nilai A";
} elseif ($nilai > 60) {
    $grade =  "Nilai B";
} elseif ($nilai > 40) {
    $grade =  "Nilai C";
} else {
    $grade =  "Nilai E";
}

// if (($nilai < 100) && ($nilai > 80)) {
//     $grade = "Nilai A";
// } elseif (($nilai < 80) && ($nilai > 60)) {
//     $grade =  "Nilai B";
// } elseif (($nilai < 60) && ($nilai > 40)) {
//     $grade =  "Nilai C";
// } else {
//     $grade =  "Nilai E";
// }

echo "Nilai Anda : $nilai <br>";
echo "Grade : $grade <br>";

// percabangan switchcase
switch ($level) {
    case 1:
        echo "anda admin";
        break;
    case 2:
        echo "anda user";
        break;
    case 3:
        echo "anda client";
        break;
    default:
        echo "anda siapa?<br>";
        break;
}

// percabangan bersarang (nested)

if ($umur > 15) {
    if ($nilai > 70) {
        echo "anda hebat";
    } else {
        echo "anda lemah";
    }
} else {
    echo "anda dibanned";
}
