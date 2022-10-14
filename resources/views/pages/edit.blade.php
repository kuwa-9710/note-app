<x-layout>
    <x-header></x-header>
    <div class="flex w-full min-h-[calc(100vh-76px)]">
        <x-aside :notes="$notes" :pages="$pages">
            <x-notes.create-note></x-notes.create-note>
        </x-aside>
        <x-main>
            <div class="px-4 md:px-10 dark:bg-gray-800">
                <x-pages.page-edit :content="$content"></x-pages.page-edit>
            </div>
        </x-main>
    </div>
    <x-pages.sm-sidebar :notes="$notes" :pages="$pages"></x-pages.sm-sidebar>
</x-layout>