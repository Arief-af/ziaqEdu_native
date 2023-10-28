<nav class="flex items-center p-10 justify-between">
    <a href="<?php if ($model['page']) {
                    echo "/dashboard";
                } else {
                    echo "/";
                } ?>">
        <section class="text-2xl font-bold">
            <?php
            if ($model['page']) {
                echo "DASHBOARD";
            } else {
                echo "ZiaqEdu";
            }
            ?>
        </section>
    </a>
    <section class="hidden md:block">
        <ul class="flex gap-5 items-center">
            
            <?php if($_SESSION['auth']){ ?>
            <li class="relative group">
                <label for="dropdown" class="cursor-pointer">
                    <span class="p-2 border-b-2 border-transparent hover:border-black transition-all duration-300 ease-in-out">Course</span>
                </label>
                <input type="checkbox" id="dropdown" class="hidden">
                <div class="absolute left-0 mt-2 bg-white border rounded-md opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 ease-in-out" style="min-width: 120px;">
                    <!-- Your dropdown content here -->
                    <ul class="p-5">
                        <li class="p-1"><a href="#">All</a></li>
                        <li class="p-1"><a href="#">Create</a></li>
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
                        <li class="p-1"><a href="#">All</a></li>
                        <li class="p-1"><a href="#">Create</a></li>
                    </ul>
                </div>
            </li>
            <?php } else { ?>
            <li>
                <a href="/courses" class="border-b-2 p-2 border-transparent flex items-center hover:border-black transition-all duration-300 ease-in-out">
                    <i class='mr-2 text-2xl bx bx-book'></i>Course
                </a>
            </li>
            <?php } ?>
            
            <li class="flex gap-5">
                <?php
                if (!$_SESSION['auth']) { ?>
                    <button class="p-2 rounded-full min-w-[90px] border border-black ease-in-out hover:bg-black hover:text-white transition-all">
                        Sign Up
                    </button>
                    <button class="p-2 rounded-full min-w-[90px] border border-black ease-in-out bg-black text-white transition-all">
                        Sign In
                    </button>
                <?php } else { ?>
                    <button class="p-2 rounded-full min-w-[90px] border border-black ease-in-out bg-black text-white transition-all">
                        Logout
                    </button>
                <?php } ?>
            </li>
        </ul>
    </section>
    <section class="md:hidden flex">
        <ul class="flex text-2xl items-center gap-2">
            <li class="flex items-center"><i class='bx bx-book'></i></li>
            <li class="flex items-center"><i class='bx bx-exit'></i><span class="hidden sm:block text-sm ml-2">Sign In</span></li>
        </ul>
    </section>
</nav>