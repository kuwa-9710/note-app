@props([
    'notes' => [],
    'pages' => [],
    'content' => [],
])
<div
    class="h-[calc(100vh-76px)] lg: top-0 hidden lg:block inset-0 w-[22rem] px-4 pt-8 overflow-auto pb-6 dark:text-white dark:bg-gray-800">
    <div class="flex place-content-between mb-4 items-center">
        <h2 class="text-slate-800 inline-block font-bold text-2xl dark:text-white">Notes</h2>
        {{ $slot }}
    </div>
    <div>
        <x-pages.create-page></x-pages.create-page>
    </div>
    @if ($notes->isNotEmpty())
        @foreach ($notes as $note)
            <div class="hs-accordion-group" data-hs-accordion-always-open>
                <div class="hs-accordion active" id="hs-basic-always-open-heading-one">

                    {{-- Notes --}}
                    <button
                        class=" hs-accordion-toggle hs-accordion-active:text-indigo-500 py-3 inline-flex items-center place-content-between gap-x-3 w-full font-semibold text-left text-gray-800 transition hover:text-gray-500 dark:hs-accordion-active:text-indigo-500 dark:text-gray-200 dark:hover:text-gray-400"
                        aria-controls="hs-basic-always-open-collapse-one">
                        {{ $note->note_title }}

                        {{-- acordion hidden --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="hs-accordion-active:hidden hs-accordion-active:text-indigo-600 hs-accordion-active:group-hover:text-indigo-600 block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>

                        {{-- acordion active --}}
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor"
                            class="hs-accordion-active:block hs-accordion-active:text-indigo-600 hs-accordion-active:group-hover:text-indigo-600 hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                        </svg>
                    </button>

                    {{-- Pages --}}
                    <div id="hs-basic-always-open-collapse-one"
                        class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300"
                        aria-labelledby="hs-basic-always-open-heading-one">
                        <ul class=" ml-4">
                            @foreach ($pages as $page)
                                @if ($page->note_id == $note->id)
                                    <li
                                        class="text-sm py-1 px-2 flex place-content-between text-slate-500 group border-l border-slate-300 hover:border-indigo-600 dark:text-white">
                                        <a href="/pages/{{ $page->id }}" class="hover:text-indigo-600">
                                            {{ $page->page_title }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
    <small class="my-6 text-slate-400 block text-center">@2022 tomoya kuwashima</small>
</div>


<!-- Navigation Toggle -->

<!-- End Navigation Toggle -->


