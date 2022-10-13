@props(['content'])
<div class="mt-10 md:mx-10 bg-white p-2 rounded-md shadow-md">
    <form action="/notes/{{ $content->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-7">
            <x-input-label class="font-bold text-2xl my-4" for="note_title" :value="__('Noteを編集')" />
            <x-text-input value="{{ $content->note_title }}" id="note_title" class="block mt-1 w-full py-3" type="text" name="note_title" required/>
        </div>
    
        <div class="md:flex md:flex-row-reverse md:justify-end mb-4">
            <button type="submit"
                class="mb-4 md:mb-0 block w-full md:inline bg-indigo-500 text-white py-3 md:py-2 hover:bg-indigo-600 active:bg-indigo-700 rounded-md md:w-28">
                完了
            </button>
            <button
                class="block w-full md:inline mr-4 bg-slate-300 text-white py-3 md:py-2 hover:bg-slate-400 active:bg-indigo-700 rounded-md md:w-28">
                <a href="/notes">キャンセル</a>
            </button>
        </div>
    </form>
</div>