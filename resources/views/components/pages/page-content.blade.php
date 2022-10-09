@props([
    'content',
    'updated_date'    
])
<div class="md:mb-10 overflow-auto w-full md:w-2/3 p-6 bg-white rounded-lg shadow-md">
    <h2 class="pt-2 text-slate-800 inline-block font-bold text-2xl md:text-3xl mb-3 border-b border-slate-300 pb-2 w-full"> {{ $content->page_title }}</h2>
    <p class="mb-4 font-thin"> {{ $updated_date }}</p>
    <div class="text-md md:text-lg">
        {!! $content->page_content !!}
    </div>
</div>