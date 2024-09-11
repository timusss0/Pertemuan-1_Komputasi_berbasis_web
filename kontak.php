<?php
    // Cek apakah form telah dikirim
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $nama = htmlspecialchars($_POST['nama']);
        $email = htmlspecialchars($_POST['email']);
        $gender = $_POST['gender'] ?? 'Tidak dipilih';
        $hobbies = $_POST['hobby'] ?? [];

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak kami</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
           
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-box {
            background-color: white;
            padding: 70px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            margin-top: 60px;

        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }

        .submit-reset {
            display: flex;
            justify-content: space-between;
        }

        input[type="submit"],
        button[type="reset"] {
            padding: 10px 20px;
            border: none;
            background-color: #007BFF;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        button[type="reset"] {
            background-color: #dc3545;
        }

        input[type="submit"]:hover,
        button[type="reset"]:hover {
            opacity: 0.9;
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
    <div class="contact-box">
        <h1>Kontak Kami</h1>
        <form action="dashboard.php" method="post">
            <label>Nama: 
                <input type="text" name="nama">
            </label>
            <br>
            <label>Email: 
                <input type="text" name="email">
            </label>
            <br>
            <label>Jenis kelamin: 
                <input type="radio" name="gender" value="Laki-laki"> Laki-laki
                <input type="radio" name="gender" value="Perempuan"> Perempuan
            </label>
            <br>
            <label>Hobby: 
                <br>
                <input type="checkbox" name="hobby[]" value="Tidur"> Tidur
                
                <input type="checkbox" name="hobby[]" value="Makan"> Makan
                <br>
                <input type="checkbox" name="hobby[]" value="Ngoding"> lupa makan
             
                <input type="checkbox" name="hobby[]" value="Lupa makan"> Ngoding
            </label>
            <br><br>
            <div class="submit-reset">
                <button type="reset">Reset</button>
                <input type="submit" value="Submit">
            </div>
        </form>
    </div>
    
</body>
</html>