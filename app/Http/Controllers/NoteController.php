<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Page;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NoteController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Note $notes, Page $pages)
    {
        if($user = Auth::user()) {
            $user = Auth::user();
            $notes = Note::where('user_id', \Auth::user()->id)->get();
            $pages = Page::where('user_id', \Auth::user()->id)->get();
    
            return view('notes.index', compact('notes', 'pages'));
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
            'required' => 'Please fill in the required fields.',
            'max' => 'Check the number of characters, and make them 50 or less.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $note->user_id = $request->user()->id;
        $note->note_title = $request->note_title;
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
        //
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
        //
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
