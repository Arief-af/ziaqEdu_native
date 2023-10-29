<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $model['title'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        footer {
            flex-shrink: 0;
        }
    </style>
</head>

<body>
    <main class="lg:px-20 sm:px-2 md:px-10">
        <header>
            <?php include __DIR__ . "/../../components/navbar.php" ?>
        </header>
        <main class="mb-10 gap-5 justify-center md:flex-row flex-col flex p-20">
            <div class="max-w-lg rounded overflow-hidden shadow-lg">
                <img src="https://source.unsplash.com/800x400/?study" alt="Unsplash Image" class="w-full h-40 object-cover">
                <div class="px-6 py-4">
                    <a href="/dashboard/course" class="block text-xl font-semibold mb-2 hover:underline">Courses</a>
                </div>
            </div>
            <div class="max-w-lg rounded overflow-hidden shadow-lg">
                <img src="https://source.unsplash.com/800x400/?category" alt="Unsplash Image" class="w-full h-40 object-cover">
                <div class="px-6 py-4">
                    <a href="/dashboard/category" class="block text-xl font-semibold mb-2 hover:underline">Categories</a>
                </div>
            </div>
        </main>
    </main>
    <footer class="w-full bg-gray-50">
        <?php include __DIR__ . "/../../components/footer.php" ?>
    </footer>
</body>

</html>