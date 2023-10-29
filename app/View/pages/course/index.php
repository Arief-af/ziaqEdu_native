<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $model['title'] ?></title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <main class="mb-10">
            <div class="text-center">
                ALL COURSES
            </div>
            <div class="p-5 max-w-3xl mx-auto overflow-hidden shadow-sm sm:rounded-lg">
                <?php
                foreach ($model['data'] as $value) {
                ?>
                    <a href="/courses/show?id=<?= $value['id'] ?>">
                        <div class="flex flex-col md:flex-row gap-4 border-b-2 p-5 transition-all bg-slate-50 mb-3 rounded-lg cursor-pointer hover:bg-slate-100 border-gray-200 py-10">
                            <div class="w-full md:w-1/3">
                                <div class="h-[200px] rounded-xl overflow-hidden">
                                    <img class="h-full w-full object-cover" src="storage/thumbnail/<?= $value['image'] ?>" alt="" srcset="" />
                                </div>
                            </div>
                            <div class="w-full md:w-2/3 flex flex-col">
                                <article class="flex-1">
                                    <h2 class="font-bold my-2">
                                        <?= $value['name']; ?><br />
                                    </h2>

                                    <p>
                                        <?= $value['desc']; ?>
                                    </p>
                                </article>
                            </div>
                        </div>
                    </a>
                <?php  } ?>
            </div>
        </main>
    </main>
    <footer class="w-full bg-gray-50">
        <?php include __DIR__ . "/../../components/footer.php" ?>
    </footer>
</body>

</html>