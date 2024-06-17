<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Loop</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 400px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .form-group button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
        }
        .form-group button:hover {
            background-color: #0056b3;
        }
        .info {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 4px;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Form Perulangan</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="text">Teks</label>
            <input type="text" id="text" name="text" required>
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah Perulangan</label>
            <input type="number" id="jumlah" name="jumlah" required>
        </div>
        <div class="form-group">
            <button type="submit">Cetak</button>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $text = htmlspecialchars($_POST['text']);
        $jumlah = intval($_POST['jumlah']);

        if ($jumlah > 0) {
            echo "<div class='info'>";
            for ($i = 0; $i < $jumlah; $i++) {
                echo "<p>" . ($i + 1) . ". " . $text . "</p>";
            }
            echo "</div>";
        } else {
            echo "<div class='info'>";
            echo "<p>Jumlah perulangan harus lebih dari 0.</p>";
            echo "</div>";
        }
    }
    ?>
</div>

</body>
</html>
