<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Note;
use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // public function index(Note $note, Page $page)
    // {
    //     $user = Auth::user();
    //     $notes = Note::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
    //     $pages = Page::where('user_id', \Auth::user()->id)->orderBy('updated_at', 'DESC')->get();
    //     return view('profile', compact('notes', 'pages', 'user'));
    // }
}
