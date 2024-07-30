<?php
// Establishing connection to the database
$koneksikunjungan = new mysqli('localhost', 'root', '', 'crud_native');
if ($koneksikunjungan->connect_error) {
    die('Connection failed: ' . $koneksikunjungan->connect_error);
}

// Menyimpan data //
if (isset($_POST['simpan'])) {
    $idKunjungan = $_POST['idKunjungan'];
    $idDokter = $_POST['idDokter'];
    $idPasien = $_POST['idPasien'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];

    // Prepare and execute the SQL query
    $stmt = $koneksikunjungan->prepare("INSERT INTO kunjungan (idKunjungan, idDokter, idPasien, tanggal, keluhan) VALUES (?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($koneksikunjungan->error));
    }
    $stmt->bind_param("sssss", $idKunjungan, $idDokter, $idPasien, $tanggal, $keluhan);
    $stmt->execute();
    $stmt->close();

    // Redirect after insertion
    header('Location: kunjungan.php');
    exit();
}

// Menghapus data //
if (isset($_GET['idKunjungan'])) {
    $idKunjungan = $_GET['idKunjungan'];

    // Prepare and execute the SQL query
    $stmt = $koneksikunjungan->prepare("DELETE FROM kunjungan WHERE idKunjungan = ?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($koneksikunjungan->error));
    }
    $stmt->bind_param("s", $idKunjungan);
    $stmt->execute();
    $stmt->close();

    // Redirect after deletion
    header("Location: kunjungan.php");
    exit();
}

// Mengedit data //
if (isset($_POST['edit'])) {
    $idKunjungan = $_POST['idKunjungan'];
    $idDokter = $_POST['idDokter'];
    $idPasien = $_POST['idPasien'];
    $tanggal = $_POST['tanggal'];
    $keluhan = $_POST['keluhan'];

    // Prepare and execute the SQL query
    $stmt = $koneksikunjungan->prepare("UPDATE kunjungan SET idDokter=?, idPasien=?, tanggal=?, keluhan=? WHERE idKunjungan=?");
    if ($stmt === false) {
        die('Prepare failed: ' . htmlspecialchars($koneksikunjungan->error));
    }
    $stmt->bind_param("sssss", $idDokter, $idPasien, $tanggal, $keluhan, $idKunjungan);
    $stmt->execute();
    $stmt->close();

    // Redirect after update
    header("Location: kunjungan.php");
    exit();
}
?>
