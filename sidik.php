<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitungan Bengkel</title>
</head>
<body>

<h2>Hitungan Bengkel.</h2>

<form action="" method="post">
    <label for="jenisLayanan">Pilih Jenis Layanan:</label>
    <select name="jenisLayanan" id="jenisLayanan">
        <option value="gantiOli">Ganti Oli - Rp 50.000</option>
        <option value="gantiBan">Ganti Ban - Rp 100.000</option>
        <option value="tuneUp">Tune Up - Rp 150.000</option>
    </select>
    <br><br>
    <label for="jumlah">Jumlah Kendaraan:</label>
    <input type="number" name="jumlah" id="jumlah" min="1" required>
    <br><br>
    <input type="submit" name="hitung" value="Hitung Total">
</form>

<?php
if (isset($_POST['hitung'])) {
    $jenisLayanan = $_POST['jenisLayanan'];
    $jumlah = $_POST['jumlah'];
    $hargaLayanan = 0;

    switch ($jenisLayanan) {
        case 'gantiOli':
            $hargaLayanan = 50000;
            break;
        case 'gantiBan':
            $hargaLayanan = 100000;
            break;
        case 'tuneUp':
            $hargaLayanan = 150000;
            break;
        default:
            echo "Pilih jenis layanan terlebih dahulu.";
            exit;
    }

    $totalBiaya = $hargaLayanan * $jumlah;

    echo "<h3>Total Biaya: Rp " . number_format($totalBiaya, 2, ',', '.') . "</h3>";
}
?>

</body>
</html>
