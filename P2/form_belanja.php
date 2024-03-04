<?php

    $customer = $_POST['customer'] ?? null;
    $produk = $_POST['produk'] ?? null;
    $jmlh = $_POST['jumlah'] ?? null;

    // Set harga untuk setiap produk
    $hargaTV = 4200000;
    $hargaKulkas = 3100000;
    $hargaMesinCuci = 3800000;

    // Hitung total harga
    $ttlhrga = 0;
    if ($produk == "TV") {
        $ttlhrga = $hargaTV * $jmlh;
    } elseif ($produk == "Kulkas") {
        $ttlhrga = $hargaKulkas * $jmlh;
    } elseif ($produk == "Mesin Cuci") {
        $ttlhrga = $hargaMesinCuci * $jmlh;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>
    <div class="mx-5 mt-5">
        <form action="form_belanja.php" method="post" class="card p-3 shadow-sm mb-4">
            <h2>Belanja Online</h2>
            <hr>
            <div class="form-group row">
                <label for="customer" class="col-4 col-form-label">Customer</label>
                <div class="col-5">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" required="required" class="custom-control-input" value="TV">
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" required="required" class="custom-control-input" value="Kulkas">
                        <label for="produk_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" required="required" class="custom-control-input" value="Mesin Cuci">
                        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                <div class="col-2">
                    <input id="jumlah" name="jumlah" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </div>
        </form>
        <div id="card" class="card p-3 shadow-sm">
            <span>Nama Customer : <?= $customer; ?></span>
            <span>Proudk Pilihan : <?= $produk; ?></span>
            <span>Jumlah Beli : <?= $jmlh; ?></span>
            <span>Total Belanja : <?= $ttlhrga; ?></span>
        </div>
    </div>
</body>

</html>