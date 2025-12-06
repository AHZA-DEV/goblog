<header class="flex flex-col xs:flex-row items-center justify-between gap-4 xs:gap-0 whitespace-nowrap border-b border-solid border-gray-200 dark:border-gray-800 px-4 xs:px-6 sm:px-10 py-4">
    <div class="flex items-center gap-3 xs:gap-4 text-gray-900 dark:text-white">
        <div class="size-5 xs:size-6">
            <svg fill="currentColor" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" d="M24 4H6V17.3333V30.6667H24V44H42V30.6667V17.3333H24V4Z" fill-rule="evenodd"></path>
            </svg>
        </div>
        <h2 class="text-lg xs:text-xl font-bold tracking-tight">Fatz Dev</h2>
    </div>
    <div class="flex flex-1 justify-end items-center gap-4 xs:gap-6 sm:gap-8">
        <nav class="flex items-center gap-4 xs:gap-6 sm:gap-9">
            <a class="text-xs xs:text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-gray-200 transition-colors" href="{{ route('home') }}">Home</a>
            <a class="text-xs xs:text-sm font-medium text-gray-600 dark:text-gray-300 hover:text-primary dark:hover:text-gray-200 transition-colors" href="{{ route('articles.index') }}">Articles</a>
        </nav>
        <button class="flex min-w-[80px] xs:min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-8 xs:h-9 sm:h-10 px-3 xs:px-4 border border-white bg-primary text-white text-xs xs:text-sm font-bold tracking-wide hover:bg-primary/90 transition-colors">
            <span class="truncate">Get In Touch</span>
        </button>
    </div>
</header>