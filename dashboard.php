<?php
    // Cek apakah form telah dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nim = htmlspecialchars($_POST['nim']);
        $nama = htmlspecialchars($_POST['nama']);
        $hobby = htmlspecialchars($_POST['hobby']);
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav>
    <ul class="nav">
      <li><a href="dashboard.php">Home</a></li>
      <li><a href="biodata.php">Biodata </a></li>
      <li><a href="kontak.php">Kontak </a></li>
    </ul>
  </nav>
 
  <h1>Hai Perkenalkan aku <?php echo $nama; ?></h1>
   <h1> dengan nim  <?php echo $nim; ?></h1>
    <h1>dan saya memiliki hobby  <?php echo $hobby; ?></h1>
    <h1>jenis kelamin <?php  echo htmlspecialchars($gender); ?></h1>
  
    
</body>
</html>