@props(['content'])

<form action="/pages/{{ $content->id }}" method="post">
    @csrf
    @method('PUT')

    <div class="my-6">
        <x-input-label for="page_title" :value="__('Pageタイトル')" />
        <x-text-input value="{{ $content->page_title }}" id="page_title" class="block mt-1 w-full" type="text" name="page_title" required/>
    </div>

    <textarea name="page_content">{{ $content->page_content }}</textarea>

    <div class="flex">
        <button
            class="mr-4 mt-6 bg-slate-300 text-white px-6 py-2 hover:bg-slate-400 active:bg-indigo-700">
            <a href="/pages/{{ $content->id }}">戻る</a>
        </button>
        <button type="submit"
            class="mt-6 bg-indigo-500 text-white px-6 py-2 hover:bg-indigo-600 active:bg-indigo-700">
            完了
        </button>
    </div>
</form>