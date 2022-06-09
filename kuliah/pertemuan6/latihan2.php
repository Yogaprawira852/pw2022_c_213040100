<?php

// Array Assosiatif array yang indexnya string


$mahasiswa = [
    [
        "nama" => "Yoga",
        "npm" => "213040100",
        "email" => "yprawira852@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Yogi",
        "npm" => "213040323",
        "email" => "yogi@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Agoy",
        "email" => "agoy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "npm" => "2130434234"
    ]
];

?>

<?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs["nama"] ?></li>
        <li>NPM : <?php echo $mhs["npm"] ?></li>
        <li>Email : <?php echo $mhs["email"] ?></li>
        <li>Jurusan : <?php echo $mhs["jurusan"] ?></li>
    </ul>
<?php }
?>