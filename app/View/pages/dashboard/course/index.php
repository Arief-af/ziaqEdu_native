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
            <?php include __DIR__ . "/../../../components/navbar.php" ?>
        </header>
        <main class="mb-10 p-10">
            <div class="overflow-x-auto">
                <table class="min-w-full overflow-hidden">
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                id
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                title
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                description
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                thumbnail
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                video
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                Category
                            </th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($model['data'] as $key => $value) { ?>
                            <tr class="bg-gray-100 border-b">
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?= $value['id'] ?>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?= $value['title'] ?>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?= $value['description'] ?>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?= $value['thumbnail'] ?>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?= $value['video'] ?>
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <?= $value['name'] ?>
                                </td>
                                <td class="text-sm flex gap-3 text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                    <form action="/dashboard/course/delete?id=<?= $value['id'] ?>" method="POST">
                                        <button type="submit" class="p-2 justify-center flex rounded-full min-w-[90px] border text-red-400 border-red-400 ease-in-out hover:bg-red-400 hover:text-white transition-all">
                                            Delete
                                        </button>
                                    </form>
                                    <a href="/dashboard/course/edit?id=<?= $value['id'] ?>" class="p-2 justify-center flex rounded-full min-w-[90px] border text-blue-400 border-blue-400 ease-in-out hover:bg-blue-400 hover:text-white transition-all">
                                        Edit
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </main>
    </main>
    <footer class="w-full bg-gray-50">
        <?php include __DIR__ . "/../../../components/footer.php" ?>
    </footer>
</body>

</html>