<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 12.2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: palevioletred;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            max-width: 400px;
            padding: 50px; 
            background: mistyrose;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-radius: 5px;
        }
        .hasil {
            margin-top: 20px;
            padding: 5px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background: lavenderblush;
            font-family: 'Times New Roman', Times, serif;
        }
        input[type=submit]{
            padding: 5px 15px;
            background: blue;
            border: 0 none;
            cursor: pointer;
            border-radius: 5px;
            background-image: linear-gradient(to right, white, lightpink);
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Form Penilaian</h1>
    <form method="post" action="">
        <label for="nilai">Masukkan Nilai:</label><br>
        <input type="number" id="nilai" name="nilai" required><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    function cekNilai($nilai) {
        return $nilai >= 60 ? "Lulus" : "Tidak Lulus";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        $status = cekNilai($nilai);
        echo "<div class='hasil'>Nilai anda $nilai, anda $status</div>";
    }
    ?>
</div>

</body>
</html>
