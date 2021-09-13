<?php
    // $mahasiswa = [
    //     ["Muhammad Rizky Safdila", "2020573010044", "rizkysafdila@gmail.com", "Teknik Informatika"],
    //     ["Zulfati Amelia Fani", "210210200056", "zulfatifani@gmail.com", "Ilmu Perpustakaan"]
    // ];

    $mahasiswa = [
        [
            "nim" => "2020573010044",
            "nama" => "Muhammad Rizky Safdila",
            "email" => "rizkysafdila@gmail.com",
            "prodi" => "Teknik Informatika",
            "gambar" => "rizky.jpg"
        ],
        [
            "nim" => "210210200056",
            "nama" => "Zulfati Amelia Fani",
            "email" => "zulfatifani@gmail.com",
            "prodi" => "Ilmu Perpustakaan",
            "tugas" => [90, 80, 100],
            "gambar" => "fati.jpg"
        ]
    ];

    // echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>" alt="" height="200px">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NIM : <?= $mhs["nim"]; ?></li>
        <li>Email : <?php echo $mhs["email"]; ?></li>
        <li>Prodi : <?php echo $mhs["prodi"]; ?></li>
    </ul>
<?php endforeach; ?>    
    
</body>
</html>