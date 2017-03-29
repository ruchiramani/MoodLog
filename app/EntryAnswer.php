<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntryAnswer extends Model
{
    //
    public function entry()
    {
      return $this->belongsTo(Entry::class);

    }
    public function option()
    {
      return $this->belongsTo(Option::class);

    }
}
