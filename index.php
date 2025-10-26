<?php
// Tentukan halaman yang akan ditampilkan
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Modular PHP</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f8;
            color: #333;
            display: flex;
            flex-direction: column;
            height: 100vh;
        }
        header {
            background-color: #2f3e46;
            color: #fff;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .container {
            display: flex;
            flex: 1;
        }
        aside {
            width: 220px;
            background-color: #354f52;
            color: white;
            padding-top: 20px;
            flex-shrink: 0;
        }
        aside ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        aside ul li a {
            display: block;
            padding: 12px 20px;
            color: white;
            text-decoration: none;
        }
        aside ul li a:hover {
            background-color: #52796f;
        }
        main {
            flex: 1;
            padding: 20px;
            background: #fff;
            overflow-y: auto;
        }
        footer {
            background-color: #2f3e46;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <div class="container">
        <?php include 'includes/sidebar.php'; ?>

        <main>
            <?php
            // Tampilkan halaman sesuai parameter
            $file = "pages/$page.php";
            if (file_exists($file)) {
                include $file;
            } else {
                echo "<h2>404</h2><p>Halaman tidak ditemukan.</p>";
            }
            ?>
        </main>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>
</html>
