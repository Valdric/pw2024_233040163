// Array Associative adalah Array yang dapat menampung lebih dari 1 nilai
// Array Associative memiliki definisi yang sama seperti Array numerik hanya saja memiliki perbedaan 
// dibagian key-nya adalah string yang kita buat sendiri
$mahasiswa = [
        [
            "nama" => "Valdric Abirama Pranaja Dandi",
            "nrp" => "233040163",
            "jurusan" => "Teknik Informatika",
        ],

        [
            "nama" => "Brela Fatimah Noer",
            "nrp" => "23901098",
            "jurusan" => "Manajemen",
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Daftar Mahasiswa </title>
</head>
<body>
    <h1> Daftar Mahasiswa </h1>

    <?php foreach( $mahasiswa as $mhs): ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>