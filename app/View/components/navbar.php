<nav class="flex items-center p-10 justify-between">
    <a href="/">
        <section class="text-2xl font-bold">
            ZiaqEdu
        </section>
    </a>
    <section class="hidden md:block">
        <ul class="flex gap-5 items-center">
            <li>
                <a href="/courses" class="border-b-2 p-2 border-transparent flex items-center hover:border-black transition-all duration-300 ease-in-out">
                    <i class='mr-2 text-2xl bx bx-book'></i>Course
                </a>
            </li>

            <li class="flex gap-5">
                <button class="p-2 rounded-full min-w-[90px] border border-black ease-in-out hover:bg-black hover:text-white transition-all">
                    Sign Up
                </button>
                <button class="p-2 rounded-full min-w-[90px] border border-black ease-in-out bg-black text-white transition-all">
                    Sign In
                </button>
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