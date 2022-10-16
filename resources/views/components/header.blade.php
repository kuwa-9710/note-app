<header
    class="md:h-[76px] flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm py-4 dark:bg-gray-800 border-b-2 border-slate-200">
    <nav class="max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between" aria-label="Global">
        <div class="flex items-center justify-between">
            {{-- sm sidebar --}}
            <button type="button" class="lg:hidden text-gray-500 hover:text-gray-600" data-hs-overlay="#docs-sidebar"
                aria-controls="docs-sidebar" aria-label="Toggle navigation">
                <span class="sr-only">Toggle Navigation</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                  </svg>
            </button>

            <a class="text-slate-800 inline-flex items-center md:gap-x-2 text-xl font-semibold dark:text-white"
                href="/">
                <svg class="hidden lg:block" width="38" height="38" viewBox="0 0 38 38" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <rect width="37.3456" height="37.984" rx="6.3567" fill="#6366F1" />
                    <path
                        d="M11.1989 30.492H14.8896V22.689C14.8896 20.4219 14.5732 17.9702 14.3887 15.8877H14.5205L16.4976 20.0528L22.139 30.492H26.1196V10.9844H22.4026V18.7611C22.4026 20.9755 22.719 23.5853 22.9299 25.6151H22.798L20.8209 21.3972L15.1532 10.9844H11.1989V30.492Z"
                        fill="white" />
                </svg>
                <h1>SimpleNote</h1>
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
                <a class="font-medium text-gray-600 hover:text-gray-400 dark:text-gray-400 dark:hover:text-gray-500" href="/" aria-current="page">TOP</a>
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
