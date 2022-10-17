<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
        return view('notes.index', compact('notes', 'pages'));
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

        return view('notes.create', compact('notes', 'pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Note $note)
    {
        $rules = [
            'note_title' => 'required|max:50'
        ];
        $messages = [
            'required' => 'Noteタイトルは必須項目です。',
            'max' => 'Noteのタイトルの最大文字数は50文字です。'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $note->user_id = $request->user()->id;
        $note->note_title = $request->note_title;
        $note->save();

        return redirect('/notes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notes = Note::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        $pages = Page::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
        $content = Note::find($id);
        return view('notes.edit', compact('notes', 'pages', 'content'));
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
        $note = Note::find($id);
        $note->note_title = $request->input('note_title');
        $note->save();

        return redirect('/notes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Note::find($id)->delete();
        return redirect('/notes');
    }
}
