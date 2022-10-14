<x-layout>
    <x-header></x-header>
    <div class="flex w-full mx-auto px-4 md:px-0 bg-gradient-to-r from-sky-100 to-indigo-100 min-h-[calc(100vh-76px)]">
        @auth
            <x-aside :notes="$notes" :pages="$pages">
                <x-notes.create-note></x-notes.create-note>
            </x-aside>
        @endauth
        <x-main>
            <x-notes.note-list :notes="$notes"></x-notes.note-list>
        </x-main>
    </div>
    <x-pages.sm-sidebar :notes="$notes" :pages="$pages"></x-pages.sm-sidebar>
</x-layout>
