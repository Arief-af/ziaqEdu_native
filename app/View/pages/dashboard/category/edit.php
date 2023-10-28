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
            <div class="mb-5">
                EDIT CATEGORY
            </div>
            <form action="/dashboard/category/update?id=<?= $model['data']['id']?>" method="POST">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" value="<?= $model['data']['name'] ?>" name="name" id="name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="name" class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">name</label>
                </div>

                <button type="submit" class="float-right p-2 rounded-full min-w-[90px] border border-black ease-in-out bg-black text-white transition-all">
                    Update
                </button>
            </form>
        </main>
    </main>
    <footer class="w-full bg-gray-50">
        <?php include __DIR__ . "/../../../components/footer.php" ?>
    </footer>
</body>

</html>