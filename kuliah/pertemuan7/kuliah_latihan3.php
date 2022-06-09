<?php
$mahasiswa = [
    [
        "nama" => "Yoga",
        "npm" => "213040100",
        "email" => "yprawira852@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1.jpg",
        "angka" => "1"
    ],
    [
        "nama" => "Yogi",
        "npm" => "213040323",
        "email" => "Yogi@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "2.png",
        "angka" => "2"
    ],
    [
        "nama" => "Agoy",
        "email" => "Agoy@gmail.com",
        "jurusan" => "Teknik Kimia",
        "npm" => "2130234234",
        "gambar" => "3.jpg",
        "angka" => "3"
    ],
    [
        "nama" => "Igoy",
        "email" => "Igoy@gmail.com",
        "jurusan" => "Teknik kedokteran",
        "npm" => "213453663",
        "gambar" => "4.png",
        "angka" => "4"
    ],
    [
        "nama" => "Ibnu",
        "email" => "Ibnu@gmail.com",
        "jurusan" => "Teknik seni",
        "npm" => "21303123",
        "gambar" => "5.jpg",
        "angka" => "5",

    ],
    [
        "nama" => "Saipul",
        "email" => "Saipul@gmail.com",
        "jurusan" => "Teknik hukum",
        "npm" => "213034254",
        "gambar" => "6.png",
        "angka" => "6"
    ]
];
$detail=$mahasiswa[$_GET["id"]];
?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Detail $mahasiswa</title>
</head>

<body>
    <div class="container">
        <h1>Detail Mahasiwa</h1>

        <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="IMG/<?php echo $detail['gambar'];?>" class="img-fluid rounded-start" alt="Yoga Prawira Kusuma">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?= $detail["nama"];?></h5>
        <p class="card-text"><?= $detail["npm"];?></p>
        <p class="card-text"><?= $detail["email"];?></p>
        <p class="card-text"><?= $detail["jurusan"];?></p>
        <a href="kuliah_latihan2.php">Kembali</a>
      </div>
    </div>
  </div>
</div>

    </div>


