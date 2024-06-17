<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
        }
        .menu {
            display: flex;
            justify-content: space-around;
            padding: 0;
            list-style-type: none;
        }
        .menu li {
            margin: 0 10px;
        }
        .menu a {
            text-decoration: none;
            color: #007bff;
            padding: 10px 20px;
            border: 1px solid #007bff;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
        }
        .menu a:hover {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Menu</h2>
    <ul class="menu">
        <li><a href="index.php">Beranda</a></li>
        <li><a href="NIM_login.php">Form Login</a></li>
        <li><a href="NIM_loop.php">Form Loop</a></li>
        <li><a href="NIM_profil.php">Form Profil</a></li>
    </ul>
</div>

</body>
</html>