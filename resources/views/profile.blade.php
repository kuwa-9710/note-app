<x-layout>
    <x-header></x-header>
    <div class="flex max-w-[85rem] w-full h-[calc(100vh-76px)] md:h-auto">
        @auth
            <x-aside :notes="$notes" :pages="$pages">
                <x-notes.create-note></x-notes.create-note>
            </x-aside>
        @endauth
        <x-main>
            <x-users.user-edit :user="$user"></x-users.user-edit>
        </x-main>
    </div>
    <x-pages.sm-sidebar :notes="$notes" :pages="$pages"></x-pages.sm-sidebar>
</x-layout>