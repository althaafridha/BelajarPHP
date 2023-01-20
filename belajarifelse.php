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

    echo "<br>";
/**
 * operator arimatika
 * 
 * + = tambah
 * - = kurang
 * * = kali
 * / = bagi
 * % = modulus (hasil sisa bagi)
 */

$value1 = 20;
$value2 = 10;

echo $value1 + $value2;
echo "<br>";
echo $value1 - $value2;
echo "<br>";
echo $value1 * $value2;
echo "<br>";
echo $value1 / $value2;
echo "<br>";
echo $value1 % $value2;

echo "<br>";

// array
// array adalah sebuah variable yang bisa menampung banyak data

$buah = ["jeruk", "apel", "mangga", "anggur"];
echo $buah[0]; // memanggil data array dimulai dari 0
echo "<br>";
foreach($buah as $b){
    echo "$b <br>";
};

// array multidimensi
$sayur = ["mentah" => ["bayam", "kangkung", "wortel"], "tomat", "jagung"];
echo $sayur["mentah"][0]; //memanggil data array didalam array
echo "<br>";
echo $sayur[1]; // value "mentah" tidak dihitung

echo "<br>";
$handphone = [
    "apple" => [
        "12" => ["pro max", "pro"]
    ],
    "samsung" => [
        "note",
        "galaxy" => ["s16", "s17", "s18"],
        "tablet",
        "laptop"
    ],
    "xiomi" => [
        "note 10 pro", "note 12 pro", "note 30 pro" 
    ]
    ];

echo $handphone["apple"]["12"][0]. "<br>";
echo $handphone["samsung"]["galaxy"][1]. "<br>";
echo $handphone["xiomi"][2]. "<br>";
?>

<!-- form handling PHP -->
<form method="get" action="belajarifelse.php">
    <label>Nama</label>
    <input type="text" name="nama">
    <br>
    <label>Umur</label>
    <input type="number" name="umur">
    <br>
    <button type="submit">Submit</button>
</form>

<?php
/**
 * form handling PHP
 * 
 * form handling adalah metode penanganan operasi data
 * form handling ada 3 macam
 *   1. GET
 *   2. POST
 *   3. REQUEST
 * 
 * $_GET = untuk pengambilan data
 * $_POST = untuk pengiriman data
 * $_REQUEST = untuk penampung data
 */
    // mengambil data dengan form handling GET
    $nama = isset($_GET['nama']);
    $umur = isset($_GET['umur']);

    echo "nama saya $nama, umur saya $umur tahun";
?>