<html>
<head>
<title>Menambah Kunjungan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
<div class="container">
<div class="row mt-3">
<div class="col-4">
<h3>Tambah Data Kunjungan</h3>
<form action="koneksikunjungan.php" method="POST">
<div class="form-group">
<label for="idKunjungan">ID kunjungan</label>
<input type="text" class="form-control mb-3" name="idKunjungan" placeholder="ID Kunjungan"> </div>
<div class="form-group">
<label for="idDokter">Id Dokter</label>
<input type="text" class="form-control mb-3" name="idDokter" placeholder="id Dokter">
</div>
<div class="form-group">
<label for="idPasien">Id Pasien</label>
<input type="text" class="form-control mb-3" name="idPasien" placeholder="id Pasien">
</div>
<div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" class="form-control" name="tanggal" id="tanggal">
</div>

<div class="form-group mt-3">
<label for="keluhan">keluhan</label>
<textarea name="keluhan" id="keluhan" cols="10" rows="5" placeholder="keluhan" class="form-control"></textarea>
</div>
<div class="form-group mt-3">
<input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
</div>
</form>
</div>
</div>
</div>
</body>
</html>