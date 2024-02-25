<?php
    // Buat array asosiatif nilai
    $nilai1 = ["id" => 1, "nama" => "Udin", "nim" => "0110290001", "uts" => 80, "uas" => 84, "tugas" => 78];
    $nilai2 = ["id" => 2, "nama" => "Jamal", "nim" => "0110290002", "uts" => 90, "uas" => 80, "tugas" => 88];
    $nilai3 = ["id" => 3, "nama" => "Dani", "nim" => "0110290003", "uts" => 70, "uas" => 74, "tugas" => 70];
    $nilai4 = ["id" => 4, "nama" => "Benny", "nim" => "0110290004", "uts" => 88, "uas" => 95, "tugas" => 80];

    // Buat array multidimensi
    $kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->

    <title>Nilai Siswa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content: center;
            height: 100dvh;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }
        table {
            width: 1000px;
            border: 1px solid #ccc;
        }
        th,td {
            padding: 10px;
        }
        .thead-dark {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Daftar Nilai Siswa</h1>
        <table border class="table">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($kumpulan_nilai as $nilai): ?>

                    <tr>
                        <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                        <td><?= $nilai["id"]?></td>
                        <td><?= $nilai["nama"]?></td>
                        <td><?= $nilai["nim"]?></td>
                        <td><?= $nilai["uts"]?></td>
                        <td><?= $nilai["uas"]?></td>
                        <td><?= $nilai["tugas"]?></td>
                        <td><?= number_format($nilai_akhir, 2, ",", ".")  ?></td>
                        
                    </tr>
                 
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>