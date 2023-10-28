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
        <main class="mb-10 px-10">

            <section class="flex w-full flex-col justify-center lg:flex-row  gap-5">
                <section class="w-full lg:w-2/3 mx-auto">
                    <video controls class="rounded-lg" src="/storage/video.mp4" alt="not found">
                    </video>
                    <div class="my-10 bg-slate-200 text-black p-10 rounded-lg">
                        <span class="font-bold"> LARAVEL TUTORIAL</span> <br>
                        by @admin
                    </div>
                </section>


                <section class="w-full lg:w-1/3 mx-auto flex flex-col gap-4 rounded-lg p-10 h-full bg-slate-200">
                    <?php
                    for ($i = 1; $i < 4; $i++) {
                    ?>
                        <div class="flex flex-col mx-auto gap-3 bg-white p-4 w-full max-w-md rounded-lg">
                            <div class="h-[200px] rounded-xl overflow-hidden">
                                <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1628258334105-2a0b3d6efee1?auto=format&fit=crop&q=80&w=1974&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" srcset="" />
                            </div>
                            <div class="bg-slate-100 p-4 rounded-lg">
                                <span class="font-bold"> LARAVEL TUTORIAL</span> <br>
                                by @admin
                            </div>
                        </div>
                    <?php } ?>
                </section>

            </section>


        </main>
    </main>
    <footer class="w-full bg-gray-50">
        <?php include __DIR__ . "/../../components/footer.php" ?>
    </footer>
</body>

</html>