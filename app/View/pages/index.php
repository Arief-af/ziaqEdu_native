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
    <div class="lg:px-20 px-10">
        <?php include __DIR__ . "/../components/navbar.php" ?>
        <?php include __DIR__ . "/../components/hero.php" ?>
    </div>
</body>

</html>