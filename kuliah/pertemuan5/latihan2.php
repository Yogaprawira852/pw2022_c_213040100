<?php
// ARRAY Multidimensi
// Array di dalam Array

$mahasiswa = [["Yoga Prawira Kusuma", 
"213040100", 
"yoga.213040100@mail.unpas.ac.id", 
"Teknik Informatika"], 
["Doddy Ferdiansyah", 
"103040001", 
[1,2,3,], "doddy@gmail.com", 
"Teknik Mesin"]
];
echo $mahasiswa[1][2][1];