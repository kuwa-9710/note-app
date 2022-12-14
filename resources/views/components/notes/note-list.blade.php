@props(['notes'])
<div class="md:mx-10 bg-white rounded-lg shadow-md my-5 py-5 px-3">
    <h2 class="border-b border-slate-500 border-dashed md:mx-10 font-bold text-3xl text-slate-800 py-3 mb-5">Notes</h2>
    @foreach ($notes as $note)
        <div class="py-3 md:mx-10 md:px-10 divide-y divide-slate-300 divide-solid">
            <table class="w-full">
                <tbody>
                    <tr class="flex flex-row place-content-between items-center">
                        {{-- note title --}}
                        <td class="text-lg text-slate-700">{{ $note->note_title }}</td>

                        <td>
                            <div class="flex items-center">
                                {{-- edit button --}}
                                <button onclick=location.href="/notes/{{ $note->id }}/edit/"
                                    class="hidden md:block w-24 bg-gray-500 text-white py-2 mr-3 hover:bg-gray-600">
                                    EDIT
                                </button>
                                <button onclick=location.href="/notes/{{ $note->id }}/edit/"
                                    class="block md:hidden md:bg-gray-500 md:text-white p-2 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>

                                </button>
                                {{-- delete button --}}
                                <form action="/notes/{{ $note->id }}" method="POST"
                                    onsubmit="return deleteNote();">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="hidden md:block w-24 bg-gray-500 text-white p-2 hover:bg-red-600">
                                        DELETE
                                    </button>
                                    <button type="submit" class="block md:hidden md:bg-gray-500 md:text-white p-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endforeach
</div>
