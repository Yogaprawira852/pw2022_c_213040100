<?php
//  Array Asosiatif
// array yang indexnya berasosiasi atau berpasangan dengan string
// array numerik hanyak menampilkan nilainya saja


$mahasiswa = [
    ["Yoga", "213040100", "yprawira852@gmail.com", "Teknik Informatika"],
    ["Yogi", "213040323", "yogi@gmail.com", "Teknik Informatika"],
    ["Agoy", "213034234", "Agoy@gmail.com", "Teknik Informatika"]
];

// var_dump($mahasiswa)[0][2];
// echo "<br>";
// print_r($mahasiswa);
?>

<?php foreach ($mahasiswa as $mhs) { ?>
    <ul>
        <li>Nama : <?php echo $mhs[0] ?></li>
        <li>NPM : <?php echo $mhs[1] ?></li>
        <li>Email : <?php echo $mhs[2] ?></li>
        <li>Jurusan : <?php echo $mhs[3] ?></li>
    </ul>
<?php } ?>