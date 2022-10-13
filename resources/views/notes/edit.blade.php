<x-layout>
    <x-header></x-header>
    <div class="flex max-w-[85rem] w-full mx-auto px-4 md:px-0 bg-indigo-50 min-h-[calc(100vh-76px)]">
        @auth
            <x-aside :notes="$notes" :pages="$pages">
                <x-notes.create-note></x-notes.create-note>
            </x-aside>
        @endauth
        <x-main>
            <x-notes.note-edit :content="$content"></x-notes.note-edit>
        </x-main>
    </div>
    <x-pages.sm-sidebar :notes="$notes" :pages="$pages"></x-pages.sm-sidebar>
</x-layout>