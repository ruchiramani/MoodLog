<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Auth;
use Illuminate\Http\Request;
use App\Entry;
use App\EntryAnswer;


class EntryController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function create()
  {
    // creates an entry with all the questions in the database
    $questions = DB::select('select * from questions');
    return view('entries.create')->with('questions', $questions);
  }

  public function store( Request $request){
    // makes a new entry
    // $request = $request;
    $entry = new Entry;
    //get the current user from session
    $user = Auth::user();
    // assigns attributes to the new entry
    $entry->user_id = $user->id;
    $entry->completed = true;
    $entry->save();
    // calls a method to save all the answers associated with the entry
    $entry->saveAnswers($request);
    return redirect()->route('entries.show', ['id' => $entry->id]);
  }

  public function show($id)
  {
    $entry = Entry::findOrFail($id);
    return view('entries.show', ['entry' => $entry]);
  }

  public function index(){
    $user = Auth::user();
    $entries = DB::select('select * from entries where user_id = :user_id', ['user_id' => $user->id]);
    return view('entries.index')->with('entries', $entries);
  }


}
