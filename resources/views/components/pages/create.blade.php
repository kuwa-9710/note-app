<form action="/pages" method="post">
    @csrf
    <div class="my-6">
        <select name="note_id" class="border-slate-400 text-slate-500 active:ring-indigo-300 focus:ring-indigo-300">
            <option value="hidden" class="text-slate-300">select note</option>
            @foreach ( $notes as $note)
                <option value="{{ $note->id }}">{{ $note->note_title }}</option>
            @endforeach
        </select>
    </div>

    <div class="my-6">
        <x-input-label for="page_title" :value="__('Page Title.')" />
        <x-text-input value="" id="page_title" class="block mt-1 w-full" type="text" name="page_title" required/>
    </div>

    <textarea name="page_content"></textarea>

    <div class="flex">
        <button
            class="mr-4 mt-6 bg-slate-300 text-slate-600 px-6 py-2 rounded-md hover:bg-slate-400 active:bg-indigo-700">
            <a href="/pages">Cancel</a>
        </button>
        <button type="submit"
            class="mt-6 bg-indigo-500 text-white px-6 py-2 rounded-md hover:bg-indigo-600 active:bg-indigo-700">
            Enter
        </button>
    </div>
</form>