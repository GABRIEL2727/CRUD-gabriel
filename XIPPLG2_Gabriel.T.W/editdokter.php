<html>
<head>
<title>My App | Edit dokter</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row mt-3">
<div class="col-4">
<h3>Edit Data dokter</h3>
<?php
include 'koneksidokter.php';
$panggil = $koneksidokter->query("SELECT * FROM dokter WHERE idDokter='$_GET[edit]'");
while ($row = $panggil->fetch_assoc()) {
?>
<form action="koneksidokter.php" method="POST">
    <div class="form-group">
        <label for="iDokter">ID Dokter</label>
        <input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter" value="<?= $row['idDokter'] ?>">
    </div>
    <div class="form-group">
        <label for="nmDokter">Nama Dokter</label>
        <input type="text" class="form-control mb-3" name="nmDokter" placeholder="Nama Dokter" value="<?= $row['nmDokter'] ?>">
    </div>
    <div class="form-group">
        <label for="jk">spesialisasi</label>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="spesialisasi" value="Kanker Cinta" <?= ($row['spesialisasi'] === "Kanker Cinta") ? "checked" : "" ?>>kanker cinta
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="spesialisasi" value="Hati retak" <?= ($row['spesialisasi'] === "Hati retak") ? "checked" : "" ?>> Hati retak
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="noTelp">noTelp</label>
        <textarea class="form-control" name="noTelp" id="noTelp" cols="5" rows="3" placeholder="noTelp"><?= $row['noTelp'] ?></textarea>
    </div>
    <div class="form-group mt-3">
        <input type="submit" name="edit" value="Simpan" class="form-control btn btn-primary">
    </div>
</form>
<?php } ?>
</div>
</div>
</div>
</body>
</html>
