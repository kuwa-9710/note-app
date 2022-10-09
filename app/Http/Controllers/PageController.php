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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Note $notes, Page $pages)
    {
        if ($user = Auth::user()) {
            $user = Auth::user();
            $notes = Note::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
            $pages = Page::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();

            return view('pages.index', compact('notes', 'pages'));
        } else {
            return redirect('login');
        }
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
            'page_title' => 'required|max:50',
            'page_content' => 'required',
            'note_id' => 'required'
        ];
        $messages = [
            'required' => 'Please fill in the required fields.',
            'max' => 'Check the number of characters, and make them 50 or less.'
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
        if ($user = Auth::user()) {
            $user = Auth::user();
            $content = Page::find($id);
            $notes = Note::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
            $pages = Page::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
            $created_date = Carbon::createFromFormat('Y-m-d H:i:s', $content->created_at)->format('Y-m-d');
            $updated_date = Carbon::createFromFormat('Y-m-d H:i:s', $content->updated_at)->format('Y-m-d');

            return view('pages.show', compact('notes', 'pages', 'content', 'user', 'created_date', 'updated_date'));
        } else {
            return redirect('login');
        }
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
            'page_title' => 'required|max:50',
            'page_content' => 'required|max:50',
            'note_id' => 'required'
        ];
        $messages = [
            'required' => 'Please fill in the required fields.',
            'max' => 'Check the number of characters. and make them 50 or less.'
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
