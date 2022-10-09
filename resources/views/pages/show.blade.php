<x-layout>
    <x-header></x-header>
    <div class="block md:flex w-full h-auto">
        <x-aside :notes="$notes" :pages="$pages" :content="$content">
            <x-notes.create-note></x-notes.create-note>
        </x-aside>
        <x-main>
            <div class="py-10 px-5 md:px-10 w-full bg-indigo-50">
                <div class="flex flex-col md:flex-row">
                    <x-pages.page-content :content="$content" :updated_date="$updated_date"></x-pages.page-content>
                    <x-pages.page-sidebar :content="$content" :user=$user :notes="$notes" :created_date="$created_date" :updated_date="$updated_date"></x-pages.page-sidebar>
                </div>
            </div>
        </x-main>
    </div>
    <x-pages.sm-sidebar :notes="$notes" :pages="$pages"></x-pages.sm-sidebar>
</x-layout>