<?php
    $mahasiswa = [
        [
            "nrp" => "233040163",
            "nama" => "Valdric Abirama Pranaja Dandi",
            "email" => "valdricapd@gmail.com",
            "jurusan" => "Teknik Informatika",
            "gambar" => "valdric.jpg"
        ],

        [
            "nrp" => "23901098",
            "nama" => "Brela Fatimah Noer",
            "email" => "fatimahbrela@gmail.com",
            "jurusan" => "Manajemen",
            "gambar" => "brela.jpg"
        ],

        [
            "nrp" => "23409027",
            "nama" => "Ning Yizhuo",
            "email" => "yizhuo@gmail.com",
            "jurusan" => "Desain Komunikasi Visual",
            "gambar" => "ning ning.jpg"
        ],

        [
            "nrp" => "19029801",
            "nama" => "Cha Eun Woo",
            "email" => "eunwoo@gmail.com",
            "jurusan" => "Department of Instrumental Music",
            "gambar" => "cha eun woo.webp"
        ],


        [
             "nrp" => "043040023",
            "nama" => "Sandhika Galih",
            "email" => "sandhikagalih@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "sandhika.jpeg"
        
        ],

        [
            "nrp" => "09128761",
            "nama" => "Gusion",
            "email" => "gusion@unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "gusion.jpg"
        ],

        [
            "nrp" => "0019287",
            "nama" => "Avatar Aang",
            "email" => "avataraang@unpas.ac.id",
            "jurusan" => "Teknik Pangan",
            "gambar" => "aang.webp"
        ],

        [
            "nrp" => "09182745",
            "nama" => "Kimmy",
            "email" => "kimmy@gmail.com",
            "jurusan" => "Teknik Industri",
            "gambar" => "kimmy.jpeg"
        ],

        [
            "nrp" => "088671212",
            "nama" => "Olivia Rodrigo",
            "email" => "oliviarodrigo@gmail.com",
            "jurusan" => "Ilmu Komunikasi",
            "gambar" => "olivia.webp"
        ],

        [
            "nrp" => "73245232",
            "nama" => "Spongebob SquarePants",
            "email" => "spongebob@bikinibottom.com",
            "jurusan" => "Teknik Lingkungan",
            "gambar" => "spongebob.jpeg"
        ],

    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5</title>
    <style>
        img{
            width: 150px;
            height: 150px;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    
    <?php foreach ( $mahasiswa as $mhs ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li><?php echo $mhs ["nama"]; ?></li>
            <li><?php echo $mhs ["nrp"]; ?></li>
            <li><?php echo $mhs ["jurusan"]; ?></li>
            <li><?php echo $mhs ["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>