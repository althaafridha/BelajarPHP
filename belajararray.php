<?php

    /**
     * Array Slice
     * Array Slice untuk membatasi array yang dipanggil
     */

     $nama = ["maikel", "sebastian", "frankenstein"];
     $slice = array_slice($nama, 2);

     print_r($slice);


     echo "<br>";
     $laptop = ["toshiba", "lenovo", "infinix", "apple"];
     $handphone = ["xiomi", "samsung", "asus", "lg"];
     $harga = ["1jt", "2jt", "3jt", "4jt"];

     $merge = array_merge($laptop, $handphone);
     $arslice = array_slice($merge, 6, 7);

     print_r($arslice);

     echo "<br>";
     
     $combine = array_combine($laptop, $harga);
     print_r($combine);

     echo "<br>";
    //  array Column
    $kelompok = [
        [
            "id" => 1,
            "nama lengkap" => "maikel frankenstain",
            "nama" => "maikel"
        ],
        [
            "id" => 2,
            "nama lengkap" => "sebastian frankenstein",
            "nama" => "sebastian"
        ],
        [
            "id" => 3,
            "nama lengkap" => "jonatan frankenstein",
            "nama" => "jonatan"
        ]
    ];

    $column = array_column($kelompok, "nama lengkap");
    $sebastian = $kelompok[0]["nama lengkap"];

    // memanggil salah satu nama lengkap
    echo $sebastian. "<br>";

    // memanggil semua nama lengkap
    print_r($column);
?>