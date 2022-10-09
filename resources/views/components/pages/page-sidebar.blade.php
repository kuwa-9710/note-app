@props(['content', 'user', 'notes', 'created_date', 'updated_date'])
<div class="w-full h-[324px] md:w-1/3 rounded-lg mt-6 md:ml-4 md:mt-0 p-4 bg-white shadow-md">
    <ul>
        @foreach ($notes as $note)
            @if ($note->id === $content->note_id)
                <li class="py-2 text-slate-400 border-b border-slate-200 border-t flex place-content-between">Note:<span
                        class="text-slate-500">{{ $note->note_title }}</span></li>
            @endif
        @endforeach
        <li class="py-2 text-slate-400 border-b border-slate-200 flex place-content-between">Author:<span
                class="text-slate-500">{{ $user->name }}</span></li>
        <li class="py-2 text-slate-400 border-b border-slate-200 flex place-content-between">Create:<span
                class="text-slate-500">{{ $created_date }}</span></li>
        <li class="py-2 text-slate-400 border-b border-slate-200 flex place-content-between">Update:<span
                class="text-slate-500">{{ $updated_date }}</span></li>
        <li class="pt-4">
            <x-primary-button class=" text-xl w-full flex justify-center mb-2"
                onclick="location.href='/pages/{{ $content->id }}/edit'">EDIT</x-primary-button>
            <form action="/pages/{{ $content->id }}" method="POST"  onsubmit="return deleteTask();" >
                @csrf
                @method('DELETE')
                <button
                    type="submit"class="border border-red-500 bg-white w-full flex justify-center bold items-center px-4 py-2 rounded-md font-semibold text-xs text-red-500 uppercase tracking-widest hover:bg-red-500 hover:text-white active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150">DELETE</button>
            </form>
        </li>
    </ul>
</div>
