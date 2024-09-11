
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Tia</title>
    <link rel="stylesheet" href="style.css">
<style>
body {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 35px;
    background-color: #f0f0f0;
}

.container {
    background-color: #ffffff;
    padding: 70px;
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    max-width: 400px;
    width: 100%;
}

.biodata {
    text-align: center;
    color:  rgb(20, 147, 231);
    margin-bottom: 20px;
}

input {
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}


button {
 display: block ;
    width: 60%;
    margin: 20px auto 0;
    padding: 10px;
    background-color: rgb(20, 147, 231);
    border: none;
    color: white;
    border-radius: 4px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #0056b3;
}

</style>

</head>
<body>
  <nav>
      <ul class="nav">
          <li><a href="dashboard.php">Home</a></li>
          <li><a href="biodata.php">Biodata </a></li>
          <li><a href="kontak.php">Kontak </a></li>
      </ul>
  </nav>

  
  <div class="container">
        <p>udah bisa kirim data nih pak ke dashboard</p>
        <h1 class="biodata">Biodata Tia</h1>
        <form action="dashboard.php" method="POST">
            <label for="nim">Nim:</label>
            <input type="text" id="nim" name="nim"> <br> <br>
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama"> <br> <br>
            <label for="nama">Hobby :</label>
            <input type="text" name="hobby" id="hobby"> <br> <br>
            <button type="submit">Submit</button>
        </form>

    </div>
</body>
</html>