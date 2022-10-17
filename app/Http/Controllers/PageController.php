<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function top(Note $notes, Page $pages)
    {
        $user = Auth::user();
        $notes = Note::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        $pages = Page::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        return view('pages.top', compact('notes', 'pages'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Note $notes, Page $pages)
    {
        $user = Auth::user();
        $notes = Note::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        $pages = Page::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        return view('pages.index', compact('notes', 'pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $notes = Note::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        $pages = Page::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();

        return view('pages.create', compact('notes', 'pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Page $page)
    {
        $rules = [
            'page_title' => 'max:50',
            'page_content' => 'required',
            'note_id' => 'required'
        ];
        $messages = [
            'required' => 'Noteの選択と、Pageの内容は必須項目です。',
            'max' => 'Pageのタイトルは最大50文字です。'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $page->note_id = $request->note_id;

        $note = Note::find($page->note_id);

        $page->user_id = $request->user()->id;
        $page->page_title = $request->page_title;
        $page->page_content = $request->page_content;
        $page->save();

        $note->updated_at = $page->created_at;
        $note->save();

        return redirect('/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
        $content = Page::find($id);
        $notes = Note::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        $pages = Page::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        $created_date = Carbon::createFromFormat('Y-m-d H:i:s', $content->created_at)->format('Y-m-d');
        $updated_date = Carbon::createFromFormat('Y-m-d H:i:s', $content->updated_at)->format('Y-m-d');
        return view('pages.show', compact('notes', 'pages', 'content', 'user', 'created_date', 'updated_date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        $notes = Note::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        $pages = Page::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        $content = Page::find($id);
        return view('pages.edit', compact('notes', 'pages', 'content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = [
            'page_title' => 'max:50',
            'page_content' => 'required',
        ];
        $messages = [
            'required' => 'Noteの選択と、Pageの内容は必須項目です。',
            'max' => 'Pageのタイトルは最大50文字です。'
        ];

        $page = Page::find($id);
        $note = Note::find($page->note_id);
        $page->page_title = $request->input('page_title');
        $page->page_content = $request->input('page_content');
        $page->save();

        $note->updated_at = $page->updated_at;
        $note->save();

        return redirect()->route('pages.show', [$page]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::find($id)->delete();
        return redirect('/pages');
    }
}
