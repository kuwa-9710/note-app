<x-layout>
    <x-header></x-header>
    <div class="flex w-full h-[calc(100vh-76px)] md:h-auto">
        @auth
            <x-aside :notes="$notes" :pages="$pages">
                <x-notes.create-note></x-notes.create-note>
            </x-aside>
        @endauth
        <x-main>
            <x-pages.page-list :pages="$pages"></x-pages.page-list>
        </x-main>
    </div>
    <x-pages.sm-sidebar :notes="$notes" :pages="$pages"></x-pages.sm-sidebar>
</x-layout>
