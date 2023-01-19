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