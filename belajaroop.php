<!-- format tag php -->
<?php
// membuat sebuah class
class idn {
    // ini adalah nama properti
    var $kelas;
    var $kantor;
    var $uks;

    // ini adalah nama method atau function
    function test_urine() {
        return "ini adalah hasil urine";
    }
    function test_narkoba() {
        return "ini adalah hasil narkoba";
    }
}
 // ini adalah nama sebuah class
 $idnschool = new idn();

//  set property dari object
$idnschool->kelas = "11 RPL";
$idnschool->kantor = "Kantor Guru";
$idnschool->uks = "UKS";

// tampilkan hasil variabel dari class
echo $idnschool->kelas;
echo "<br>";
echo $idnschool->kantor;
echo "<br>";
echo $idnschool->uks;
echo "<br>";

// memanggil hasil isi method
echo $idnschool->test_urine();

class mobil {
    var $warna;
}
$warnaMerah = new mobil();
$warnaHitam = new mobil();

$warnaMerah->warna = "Merah";
$warnaHitam->warna = "Hitam";

echo "<hr>";
echo $warnaMerah->warna;
echo "<br>";
echo $warnaHitam->warna;

// method
/**
 * Public
 */
class satu {

    public function detail(){
        return "ini adalah method public";
    }
}
$objeksatu = new satu();
$turunan = $objeksatu->detail();
echo "<hr>";
echo $turunan;

/**
 * Protected
 */
class dua {
    protected $nama = "Sebastian";

    // untuk method proctected kita harus membuat fungsi berawalan dengan protected
    protected function name() {
        return "Maikel";
    }

    public function your_name(){
        return $this->name();
    }
}
$objekdua = new dua();
echo "<hr>";
echo $objekdua->your_name();

echo "<hr>";

/**
 * Variable $this
 */

// contoh pembuatan variable this
class coba{
    // membuat sebuah variable yang akan di akses ke dalam function
    public $nama = "Maikel";

    // membuat sebuah function
    public function testing(){
        return "nama saya $this->nama";
    }
}

// membuat sebuah object untuk menampilkan hasil
$nama_saya = new coba();
echo $nama_saya->testing();

echo "<hr>";

/**
 * Variable Scope
 */

//  variable scope adalah sebuah variable yang hanya bisa di akses di dalam function saja
 $a = 10;

 function test(){
    $a = 7;
    $b = 2;

    echo $a;
    echo "<br>";
    echo $b;

    echo "<br>";
 }

 test();
 echo $a;

echo "<br>";

/**
 * Variable Global
 */

//  variable global adalah sebuah variable yang bisa di akses di dalam function dan di luar function

 $c = 10;
 
 function test2(){
    global $c;
    global $d;

    $d = 13;
    echo $c;
    echo "<br>";
    echo $d;
 }
 test2();


echo "<br>";
/**
 * Variable Static
 */

//  variable static adalah variable yang mempertahankan nilai nya di setiap pemanggilan function
function test3(){
    static $a = 0;
    $a++;
    echo $a;
}

// setiap pemanggilan function akan bertambah nilainya
test3();
echo "<br>";
test3();

echo "<br>";
/**
 * membuat method atau function dengan parameter
 */


 class pesawat {
    function hidupkan_pesawat($namapesawat, $pemilik){
        return "Pesawat $namapesawat milik $pemilik telah di hidupkan";
    }
 }

    // membuat object
    $pesawatku = new pesawat();
    echo $pesawatku->hidupkan_pesawat("boeing", "Maikel");


// latihan 
class laptop {
    var $pemilik;
    var $merk;
    var $ukuran_layar;
    var $warna;
}

$laptopku = new laptop();
$laptopku->pemilik = "Maikel";
$laptopku->merk = "Toshiba";
$laptopku->ukuran_layar = "15 inci";
$laptopku->warna = "Hitam";

echo "<hr>";
echo $laptopku->pemilik;
echo "<br>";
echo $laptopku->merk;
echo "<br>";
echo $laptopku->ukuran_layar;
echo "<br>";
echo $laptopku->warna;

echo "
<style>
table, th, td {
    border: 1px solid black;
    text-align: start;
    padding: 2px;
  }
</style>
<table>
<tr>
  <th>Pemilik</td>
  <td>$laptopku->pemilik</td>
</tr>
<tr>
  <th>Merk</td>
  <td>$laptopku->merk</td>
</tr>
<tr>
  <th>Ukuran Layar</td>
  <td>$laptopku->ukuran_layar</td>
</tr>
<tr>
  <th>Warna</td>
  <td>$laptopku->warna</td>
</tr>
</table>";

echo "<br>";

$mobil1 = 1;
$mobil2 = 2;
$mobil3 = 3;
$mobil4 = 4;
$mobil5 = 5;

function mobilan(){
    $mobil2 = 12;
    $mobil5 = 15;

    echo $mobil2;
    echo "<br>";
    echo $mobil5;
    echo "<br>";
    echo $mobil1;
}

mobilan();

echo "<br>";
function minus(){
    static $a = 100;
    $a--;

    echo ("$a <br>");
}

minus();
minus();
minus();
minus();
minus();
minus();
minus();
minus();
minus();
minus();
?>