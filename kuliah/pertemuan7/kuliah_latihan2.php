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
        "npm" => "2130234234",
        "email" => "Agoy@gmail.com",
        "jurusan" => "Teknik Kimia",
        "gambar" => "3.jpg",
        "angka" => "3"
    ],
    [
        "nama" => "Igoy",
        "npm" => "213453663",
        "email" => "Igoy@gmail.com",
        "jurusan" => "Teknik kedokteran",
        "gambar" => "4.png",
        "angka" => "4"
    ],
    [
        "nama" => "Ibnu",
        "npm" => "21303123",
        "email" => "Ibnu@gmail.com",
        "jurusan" => "Teknik seni",
        "gambar" => "5.jpg",
        "angka" => "5",

    ],
    [
        "nama" => "Saipul",
        "npm" => "213034254",
        "email" => "Saipul@gmail.com",
        "jurusan" => "Teknik hukum",
        "gambar" => "6.png",
        "angka" => "6"
    ]
];

?>





<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiwa</title>
</head>

<body>
    <div class="container">
        <h1>Daftar Mahasiwa</h1>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $key => $mhs) { ?>
                    <tr>
                        <th scope="row"> <?php echo $mhs["angka"]; ?></th>
                        <td>
                            <img src="img/<?php echo $mhs["gambar"]; ?>" height="50" class="rounded-circle">
                        </td>
                        <td><?= $mhs["nama"] ?></td>
                        <td>
                            <a href="" class="btn badge bg-warning">Edit</a>
                            <a href="" class="btn badge bg-danger">Delete</a>
                            <a href="kuliah_latihan3.php?id=<?= $key; ?>" class="btn badge bg-danger">Detail</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>


