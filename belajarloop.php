<?php

// metode looping atau perulangan ada 4 macam

/**
 * For
 * 
 * ada 3 bagian
 *   1. inisialisasi
 *   2. kondisi
 *   3. increment/decrement
 */

for ($i=1; $i <= 10; $i++) { 
    echo "$i <br>";
}

echo "<hr>";
/**
 * While
 * 
 * ada 1 bagian
 */

$angka = 1; 
while ($angka <= 50){
    echo "$angka <br>";
    $angka++;
}

echo "<hr>";
/**
 * do while
 */

$number = 10;
do {
    echo "$number <br>";
    $number--;
} while ($number > 0);

echo "<hr>";
/**
 * foreach
 */
$fruits = ["mangga", "jambu", "apel"];
foreach ($fruits as $fruit) {
    echo "$fruit <br>";
}

echo "<hr>";
// latihan
for ($ganjil=1; $ganjil <=100; $ganjil+=2) { 
    echo "$ganjil <br>";
}

echo "<hr>";
for ($urut=100; $urut >= 1; $urut--){
    echo "$urut <br>";
}

echo "<hr>";
$cars = ["toyota", "honda", "suzuki", "mazda"];
foreach ($cars as $car) {
    echo "
<style>
table, th, td {
    border: 1px solid black;
  }
</style>
<table>
<tr>
  <th>Merk</td>
  <td>$car</td>
</tr>
</table>";
}

?>