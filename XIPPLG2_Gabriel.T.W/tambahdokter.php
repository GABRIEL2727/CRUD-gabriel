<html>
<head>
<title>Menambah Dokter</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
<div class="container">
<div class="row mt-3">
<div class="col-4">
<h3>Tambah Data Dokter</h3>
<form action="koneksidokter.php" method="POST">
<div class="form-group">
<label for="idDokter">ID Dokter</label>
<input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter"> </div>
<div class="form-group">
<label for="nmDokter">Nama Dokter</label>
<input type="text" class="form-control mb-3" name="nmDokter" placeholder="Nama Dokter">
</div>
<div class="form-group">
<label for="spesialisasi">spesialisasi</label>
<div class="form-check">
<input type="radio" class="form-check-input" name="spesialisasi" value="kanker cinta">kanker cinta
</div>
<div class="form-check">
<input type="radio" class="form-check-input" name="spesialisasi" value="hati retak">hati retak
</div>
</div>
<div class="form-group mt-3">
<label for="noTelp">noTelp</label>
<textarea name="noTelp" id="noTelp" cols="5" rows="3" placeholder="noTelp" class="form-control"></textarea>
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