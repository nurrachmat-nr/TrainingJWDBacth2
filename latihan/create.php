<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create Notes</h1>
    <form method="post" accept="create.php">
        Judul : <input type="text" name="judul" id="judul"><br/>
        Isi : <textarea name="isi" id="judul"></textarea><br/>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $conn = mysqli_connect("localhost", "root", "", "lat_jwdev");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO `notes`( `judul`, `isi`) VALUES 
    ('$judul','$isi')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header("Location: index.php");
}
?>