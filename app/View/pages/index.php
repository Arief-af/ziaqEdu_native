<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $model['title'] ?></title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <main class="lg:px-20 px-10">
        <header>
            <?php include __DIR__ . "/../components/navbar.php" ?>
        </header>
        <main class="mb-10">
            <?php include __DIR__ . "/../components/hero.php" ?>
        </main>
    </main>
    <footer class="w-full bg-gray-50">
        <?php include __DIR__ . "/../components/footer.php" ?>
    </footer>
</body>

</html>