@props(['pages'])
<div class="mx-2 md:mx-10 bg-white rounded-lg shadow-md my-5 py-5 px-3">
    <h2 class="md:flex md:place-content-between border-b border-slate-500 border-dashed md:mx-10 font-bold text-3xl text-slate-800 py-3 mb-5">
        Pages
        <button
            class="text-base font-normal hidden md:flex flex-row items-center justify-center border-2 border-indigo-500 rounded-md p-2 text-white bg-indigo-500 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
            Pageを新規作成
        </button>

    </h2>
    @foreach ($pages as $page)
        <div class="py-3 md:mx-10 md:px-10 divide-y divide-slate-300 divide-solid">
            <table class="w-full">
                <tbody>
                    <tr class="flex flex-row place-content-between items-center">
                        {{-- page title --}}
                        <td class="text-lg text-slate-700"><a href="pages/{{ $page->id }}">{{ $page->page_title }}</a></td>

                        <td>
                            <div class="flex items-center">
                                {{-- edit button --}}
                                <button onclick=location.href="/pages/{{ $page->id }}/edit/"
                                    class="hidden md:block w-24 bg-indigo-500 text-white py-2 mr-3 hover:bg-indigo-600">
                                    EDIT
                                </button>
                                <button onclick=location.href="/pages/{{ $page->id }}/edit/"
                                    class="block md:hidden md:bg-gray-500 md:text-white p-2 mr-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                    </svg>

                                </button>
                                {{-- delete button --}}
                                <form action="/pages/{{ $page->id }}" method="POST"
                                    onsubmit="return deletePage();">
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
    <form action="/pages/create" method="">
        @csrf
        <button
            class="md:hidden flex flex-row items-center justify-center w-full border-2 rounded-md py-2 mt-6 border-indigo-500 text-indigo-500 shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
            </svg>
            Pageを新規作成
        </button>
    </form>
</div>
