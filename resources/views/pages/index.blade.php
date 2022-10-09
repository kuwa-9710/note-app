<x-layout>
    <x-header></x-header>
    <div class="flex max-w-[85rem] w-full h-[calc(100vh-76px)] md:h-auto">
        @auth
            <x-aside :notes="$notes" :pages="$pages">
                <x-notes.create-note></x-notes.create-note>
            </x-aside>
        @endauth
        <x-main>
            <div class="h-full w-full px-5 bg-white py-5 md:px-10">
                <h2 class="mb-4 font-bold bg-gradient-to-r bg-clip-text text-transparent from-cyan-500 to-blue-500 text-4xl md:text-3xl">Welcome to SimpleNote!</h2>
                
                <h3 class="font-bold text-slate-700 text-2xl">First: Create your first Note.</h3>
                <h3 class="font-bold text-slate-700 text-2xl">Second: Create your first Page.</h3>
                
            </div>
        </x-main>
    </div>
    <x-pages.sm-sidebar :notes="$notes" :pages="$pages"></x-pages.sm-sidebar>
</x-layout>
