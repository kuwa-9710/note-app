@props(['content', 'user', 'notes', 'created_date', 'updated_date'])
<div class="w-full h-fit md:w-1/3 rounded-lg mt-6 md:ml-4 md:mt-0 p-4 bg-white shadow-md">
    <ul>
        @foreach ($notes as $note)
            @if ($note->id === $content->note_id)
                <li class="py-2 text-slate-400 border-b border-slate-200 border-t flex place-content-between">Note:<span
                        class="text-slate-500">{{ $note->note_title }}</span></li>
            @endif
        @endforeach
        <li class="py-2 text-slate-400 border-b border-slate-200 flex place-content-between">作成者:<span
                class="text-slate-500">{{ $user->name }}</span></li>
        <li class="py-2 text-slate-400 border-b border-slate-200 flex place-content-between">作成日:<span
                class="text-slate-500">{{ $created_date }}</span></li>
        <li class="py-2 text-slate-400 border-b border-slate-200 flex place-content-between">更新日:<span
                class="text-slate-500">{{ $updated_date }}</span></li>
        <li class="pt-4">
            <form action="/pages/{{ $content->id }}/edit">
                @csrf                
                <button
                    type="submit" class="mb-2 text-lg md:text-base border border-indigo-500 bg-indigo-500 text-white w-full flex justify-center bold items-center px-4 py-2 rounded-md font-semibold uppercase tracking-widest hover:bg-indigo-600 disabled:opacity-25 transition ease-in-out duration-150">
                    編集
                </button>
            </form>
            <form action="/pages/{{ $content->id }}" method="POST"  onsubmit="return deletePage();" >
                @csrf
                @method('DELETE')
                <button
                    type="submit" class="text-lg md:text-base border border-red-500 bg-white w-full flex justify-center bold items-center px-4 py-2 rounded-md font-semibold text-red-500 uppercase tracking-widest hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">
                    削除
                </button>
            </form>
        </li>
    </ul>
</div>
