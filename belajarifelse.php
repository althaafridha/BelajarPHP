<?php

// metode if else 
$a = "magic";

// if digunakan untuk kondisi yang diinginkan
if($a == "magics"){
    echo "berhasil";
// else digunakan untuk kondisi tidak sesuai dengan yang diinginkan
} else {
    echo "gagal";
};
echo "<br>";
for($i = 1; $i <=20; $i++){
    if($i % 2 == 0){
        echo "$i adalah bilangan genap <br>";
    } else {
        echo "$i adalah bilangan ganjil <br>";
    }
}

/**
 * operator logika
 * 
 * && = and
 * || = or
 * ! = not
 */

 $laki = "laki";
 $perempuan = "perempuan";

    if($laki == "laki" && $perempuan == "perempuan"){
        echo "berhasil";
    } else {
        echo "gagal";
    }
?>