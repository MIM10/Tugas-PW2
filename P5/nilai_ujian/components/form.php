<div class="container">
    <h4 class="pt-4">Form Nilai ujian</h4>
    <hr class="border border-dark border-2 opacity-25">
    <form class="mx-5 px-5" method="POST" action="form.php">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label text-end fw-semibold">NIM</label>
            <div class="col-5">
                <input id="nim" name="nim" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="pilih_mk" class="col-4 col-form-label text-end fw-semibold">Pilih MK</label>
            <div class="col-5">
                <select id="pilih_mk" name="pilih_mk" class="custom-select">
                    <option value="Data Warehouse">Data Warehouse</option>
                    <option value="lorem ipsum">lorem ipsum</option>
                    <option value="lorem ipsum">lorem ipsum</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai" class="col-4 col-form-label text-end fw-semibold">Nilai</label>
            <div class="col-5">
                <input id="nilai" name="nilai" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-success">Submit</button>
            </div>
        </div>
    </form>
    <hr class="border border-dark border-2 opacity-25">
</div>
