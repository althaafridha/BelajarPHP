<?php

$berat = 60;
$tinggi = 178;
$hasil = $tinggi - 110;

if ($berat > $hasil) {
    echo "Berat badan anda lebih dari ideal";
} else if ($berat < $hasil){
    echo "Berat badan anda kurang ideal";
} else {
    echo "Berat badan anda ideal";
}

?>