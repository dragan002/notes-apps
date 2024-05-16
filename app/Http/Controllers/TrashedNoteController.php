<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrashedNoteController extends Controller
{
    //
    public function index(): string
    {
        $notes = Note::whereBelongsTo(Auth::user())->onlyTrashed()->latest('deleted_at')->paginate(5);
        return view('notes.index')->with('notes', $notes);
    }


}
