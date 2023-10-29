<nav class="flex items-center p-10 justify-between">
    <a href="/">
        <section class="text-2xl font-bold">
           ZiaqEdu
        </section>
    </a>
    <section>
        <ul class="flex gap-5 items-center">
            <?php if ($model['page'] == 'admin') { ?>
                <li class="relative group">
                    <label for="dropdown" class="cursor-pointer">
                        <span class="p-2 border-b-2 border-transparent hover:border-black transition-all duration-300 ease-in-out">Course</span>
                    </label>
                    <input type="checkbox" id="dropdown" class="hidden">
                    <div class="absolute left-0 mt-2 bg-white border rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out" style="min-width: 120px;">
                        <!-- Your dropdown content here -->
                        <ul class="p-5">
                            <li class="p-1"><a href="/dashboard/course">All</a></li>
                            <li class="p-1"><a href="/dashboard/course/create">Create</a></li>
                        </ul>
                    </div>
                </li>

                <li class="relative group">
                    <label for="dropdown" class="cursor-pointer">
                        <span class="p-2 border-b-2 border-transparent hover:border-black transition-all duration-300 ease-in-out">Categories</span>
                    </label>
                    <input type="checkbox" id="dropdown" class="hidden">
                    <div class="absolute left-0 mt-2 bg-white border rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out" style="min-width: 120px;">
                        <!-- Your dropdown content here -->
                        <ul class="p-5">
                            <li class="p-1"><a href="/dashboard/category">All</a></li>
                            <li class="p-1"><a href="/dashboard/category/create">Create</a></li>
                        </ul>
                    </div>
                </li>
            <?php } else { ?>
                
                <li>
                    <a href="/courses" class="border-b-2 p-2 border-transparent flex items-center hover:border-black transition-all duration-300 ease-in-out">
                        <i class='mr-2 text-2xl bx bx-book'></i>Courses
                    </a>
                </li>
            <?php } ?>

        </ul>
    </section>
</nav>