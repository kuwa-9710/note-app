<form action="/notes" method="post">
    @csrf
    <div class="mt-8 mb-8">
        <x-input-label for="note_title" :value="__('Noteのタイトル')" class="font-bold text-2xl mb-6" />
        <x-text-input id="note_title" class="block w-full py-3" type="text" name="note_title" />
    </div>

    <button type="submit"
        class="block w-full bg-indigo-500 text-white py-3 rounded-md hover:bg-indigo-600 active:bg-indigo-700 mb-4">
        作成
    </button>
    <button type="button" onclick="history.back()" class="block bg-slate-300 text-slate-600 w-full py-3 rounded-md hover:bg-slate-400">
        キャンセル
    </button>

</form>
