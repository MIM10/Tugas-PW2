<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>BMI Pasien</title>
</head>

<body style="height: 100%; padding-bottom: 45px;">
    <div class="container card mt-5 py-4 shadow-sm">
        <h1 class="text-center">BMI Pasien</h1>
        <form method="POST" action="form.php">
            <div class="form-group justify-content-center row">
                <label for="nama" class="col-3 col-form-label">Nama</label>
                <div class="col-7">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group justify-content-center row">
                <label for="berat" class="col-3 col-form-label">Berat Badan</label>
                <div class="col-7">
                    <input id="berat" name="berat" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group justify-content-center row">
                <label for="tinggi" class="col-3 col-form-label">Tinggi Badan</label>
                <div class="col-7">
                    <input id="tinggi" name="tinggi" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group justify-content-center row">
                <label for="umur" class="col-3 col-form-label">Umur</label>
                <div class="col-7">
                    <input id="umur" name="umur" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group justify-content-center row">
                <label class="col-3">Jenis Kelamin</label>
                <div class="col-7">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="L">
                        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="P">
                        <label for="jk_1" class="custom-control-label">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <div class="container px-5">
            <?php
                if (isset($_POST["submit"])) {
                    require_once "class.php";

                    // Set nilai properti pada objek dari nilai yang diisi pada form
                    $nama = $_POST["nama"];
                    $berat = $_POST["berat"];
                    $tinggi = $_POST["tinggi"];
                    $umur = $_POST["umur"];
                    $jk = $_POST["jk"];

                    // Buat objek baru dari class bmiPasien
                    $pasien = new bmiPasien($nama, $berat, $tinggi, $umur, $jk);
                    $judul = ['Nama','Berat','Tinggi','Umur','Jenis Kelamin','Hasil BMI','Status BMI'];

                    echo "
                    <hr class='border border-dark border-2 opacity-25 my-3'>

                    <div class='mx-5'>
                        <h2 class='text-center'>Hasil BMI Pasien</h2>
                        <table class='table table-bordered text-center'>
                            <tr>
                                <th>#</th>";
                                foreach ($judul as $i) {
                                    echo "<th>{$i}</th>";
                                }
                                echo"
                            </tr>
                            <tr>
                                <th>1</th>
                                <td>{$pasien->nama}</td>
                                <td>{$pasien->berat} kg</td>
                                <td>{$pasien->tinggi} cm</td>
                                <td>{$pasien->umur} tahun</td>
                                <td>{$pasien->jk}</td>
                                <td>{$pasien->hasilBMI()}</td>
                                <td>{$pasien->statusBMI()}</td>
                            </tr>
                        </table>
                    </div>";
                }
            ?>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>