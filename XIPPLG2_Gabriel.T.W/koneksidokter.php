<?php
// Establishing connection to the database
$koneksidokter = new mysqli('localhost', 'root', '', 'crud_native') or die(mysqli_error($koneksidokter));

// Menyimpan data //
if (isset($_POST['simpan'])) {
    $idDokter = $_POST['idDokter'];
    $nmDokter = $_POST['nmDokter'];
    $spesialisasi = $_POST['spesialisasi'];
    $noTelp = $_POST['noTelp'];

    // Prepare and execute the SQL query
    $stmt = $koneksidokter->prepare("INSERT INTO dokter (idDokter, nmDokter, spesialisasi, noTelp) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $idDokter, $nmDokter, $spesialisasi, $noTelp);
    $stmt->execute();

    // Redirect after insertion
    header('Location: dokter.php');
    exit();
}

// Menghapus data //
if (isset($_GET['idDokter'])) {
    $idDokter = $_GET['idDokter'];

    // Prepare and execute the SQL query
    $stmt = $koneksidokter->prepare("DELETE FROM dokter WHERE idDokter = ?");
    $stmt->bind_param("s", $idDokter);
    $stmt->execute();

    // Redirect after deletion
    header("Location: dokter.php");
    exit();
}

// Mengedit data //
if (isset($_POST['edit'])) {
    // Ambil data dari form
    $idDokter = $_POST['idDokter'];
    $nmDokter = $_POST['nmDokter'];
    $spesialisasi = $_POST['spesialisasi'];
    $noTelp = $_POST['noTelp'];

    if ($koneksidokter) {
        // Prepare and execute the SQL query
        $stmt = $koneksidokter->prepare("UPDATE dokter SET nmDokter=?, spesialisasi=?, noTelp=? WHERE idDokter=?");
        $stmt->bind_param("ssss", $nmDokter, $spesialisasi, $noTelp, $idDokter);
        $stmt->execute();

        // Redirect after update
        header("Location: dokter.php");
        exit();
    }
}
?>
