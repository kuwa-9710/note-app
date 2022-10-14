<x-layout>
    <x-header></x-header>
    <div class="flex w-full min-h-[calc(100vh-76px)]">
        @auth
            <x-aside :notes="$notes" :pages="$pages">
                <x-notes.create-note></x-notes.create-note>
            </x-aside>
        @endauth
        <x-main>
            <div class="px-4 md:px-10">
                <x-pages.create :notes="$notes"></x-pages.create>
            </div>
        </x-main>
    </div>
    <x-pages.sm-sidebar :notes="$notes" :pages="$pages"></x-pages.sm-sidebar>
</x-layout>