<header
    class="md:h-[76px] flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-4 dark:bg-gray-800 border-b-2 border-slate-200">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
        <div class="flex items-center justify-between">
            {{-- sm sidebar --}}
            <button type="button" class="lg:hidden text-gray-500 hover:text-gray-600 h-[38px] w-[38px] flex justify-center items-center" data-hs-overlay="#docs-sidebar"
                aria-controls="docs-sidebar" aria-label="Toggle navigation">                
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 ">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
            </button>

            <a class="text-slate-800 inline-flex items-center md:gap-x-2 text-xl font-semibold dark:text-white"
                href="/">
                <svg class="" width="38" height="38" viewBox="0 0 36 36" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="36" height="36" rx="8" fill="#6C63FF" />
                    <path
                        d="M11 27.7664H14.5504V20.2598C14.5504 18.0789 14.2461 15.7204 14.0686 13.717H14.1954L16.0974 17.7238L21.5244 27.7664H25.3538V9H21.778V16.4812C21.778 18.6114 22.0823 21.1221 22.2852 23.0748H22.1584L20.2564 19.0172L14.804 9H11V27.7664Z"
                        fill="white" />
                </svg>
                <h1 class="hidden md:block">SimpleNote</h1>
            </a>
            <div class="sm:hidden">
                <button type="button"
                    class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800"
                    data-hs-collapse="#navbar-image-and-text-1" aria-controls="navbar-image-and-text-1"
                    aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path
                            d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-image-and-text-1"
            class="bg-white hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block dark:bg-gray-800">
            <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:pl-5">
                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500"
                    href="/" aria-current="page">TOP</a>
                <form action=" {{ route('logout') }}" method="POST">
                    @csrf
                    <button
                        class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500"
                        type="submit">LOG OUT</button>
                </form>
            </div>
        </div>
    </nav>
</header>
