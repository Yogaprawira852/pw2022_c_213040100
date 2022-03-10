<?php
// pertemuan 5 - ARRAY
// Array adalah variable yang bisa menampung/menyimpan banyak nilai sekaligus

$hari = "senin";
$hari = "selasa";

$bulan1 = "januari";
$bulan2 = "Februari";

$mahasiswa1 = "yoga";

// Membuat ARRAY
$hari = ["Senin", "Selasa", "Rabu", "Kamis" ]; // Cara Baru
$bulan = [ "Januari", "Februari", "Maret"]; // Cara Lama
$myArr = [ 10, "Yoga", true ];

// Mencetak ARRAY
// mencetak 1 elemen di dalam Array
// dimulai dari 0
echo $hari[0];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo $myArr[2];
echo"<hr>";

// mencetak menggunakan var_dump() atau print_r()
// khusus untuk debugging
var_dump($hari[1]);
echo "<br>";
print_r($bulan[2]);
echo "<hr>";

// mencetak semua isi Array menggunakan looping
// for
for($i = 0; $i < 4; $i++) {
    echo $hari[$i];
    echo "<br>";
}
echo "<hr>";

// foreach
foreach($bulan as $b){
    echo $b;
    echo "<br>";
}
echo "<hr>";

foreach($bulan as $key => $value) {
    echo "key: $key - value: $value";
    echo "<br>";
}

echo "<hr>";

// Memanipulasi ARRAY
// menambah elemen baru di akhir array
$hari[] = "Senin";
$hari[] = "Jum'at";
print_r($hari); 