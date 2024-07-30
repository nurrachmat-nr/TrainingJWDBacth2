<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Notes</title>
</head>
<body>
    <h1>Note List</h1>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "lat_jwdev");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "SELECT * FROM notes";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {   
        while($value = mysqli_fetch_assoc($result)) {
            echo "<h2>".$value['judul']."</h2>";
            echo "<p>".$value['isi']."</p>";
        }
    }else{
        echo "Belum ada catatan!";
    }
    ?>
</body>
</html>