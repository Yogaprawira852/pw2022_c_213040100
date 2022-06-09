<?php
// SUPERGOALS
// Variabel milik PHP yang bisa kita gunakan 
// bentuknya Array Associative
// $_GET
// $_POST
// $_SERVER
// $_GET["nama"] = "Yoga";
// $_GET["email"] = "yoga.213040100@mail.unpas.ac.id";
// var_dump($_GET);
// var_dump($_SERVER);
// var_dump($_POST);
if (isset($_GET["nama"])) {
    $nama = $_GET["nama"];
} else {
    $nama = "Tidak Diketahui!";
}
// $nama = $_GET["nama"];
?>

<h1>Hallo, <?= $nama; ?></h1>
<ul>
    <li>
        <a href="kuliah_latihan1.php?nama=Markonah">Markonah</a>
    </li>
    <li>
        <a href="?nama=Dodo">Dodo</a>
    </li>
    <li>
        <a href="?nama=Dudung">Dudung</a>
    </li>
</ul>