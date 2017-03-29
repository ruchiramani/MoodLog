<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Entry extends Model
{
  use FormAccessible;

    //
    public function user()
    {
      return $this->belongsTo(User::class);

    }
    public function entryAnswers()
    {
      return $this->hasMany(EntryAnswer::class);

    }

    public function saveAnswers($request){
      $entry = $this;
      $entry_answer_1 = new EntryAnswer;
      $entry_answer_1->entry_id = $entry->id;
      $entry_answer_1->option_id = $request->input('1');
      $entry_answer_1->save();
      $entry_answer_2 = new EntryAnswer;
      $entry_answer_2->entry_id = $entry->id;
      $entry_answer_2->option_id = $request->input('2');
      $entry_answer_2->save();
      $entry_answer_3 = new EntryAnswer;
      $entry_answer_3->entry_id = $entry->id;
      $entry_answer_3->option_id = $request->input('3');
      $entry_answer_3->save();
    }
}
