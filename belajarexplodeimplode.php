<?php

    // Explode

    /**
     * String
     * String adalah type data yang berisi teks
     */
    $string = "ini adalah string";

    /**
     * Integer
     * Integer adalah type data yang berisi angka
     */
    $integer = 10;

    // ketika di exploe ataupun di implode maka data akan berubah menjadi array
    $explode = explode(" ", $string);

    // eksekusi array menggunakan print_r()
    print_r($explode);

    echo "<br>";
    // Implode
    $implode = implode(" ", $explode);
    print_r($implode);

    echo "<br>";
    /**
     * Array Merge
     * Array Merge digunakan untuk menggabungkan 2 nilai variable array
     */

     $toyota = ["innova", "avanza", "fortuner"];
     $honda = ["civic", "jazz", "hrv"];

     $merge = array_merge($toyota, $honda);

     print_r($merge);
?>