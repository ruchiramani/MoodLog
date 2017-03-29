@extends('layouts.app')

@section('content')
<div class="container">
  <div class="col-sm-8 col-sm-offset-2">
    <div class="panel panel-default">
      <div class="panel-body">
        <?php  $answers = DB::select('select * from entry_answers where entry_id = :entry_id ', ['entry_id' => $entry->id]);
        ?>
        <ul>
          @foreach ($answers as $answer)
          <?php
          $option = DB::select('select * from options where id = :id', ['id' => $answer->option_id])[0];
          $question = DB::select('select * from questions where id = :id', ['id' => $option->question_id])[0];
          ?>
          <div>
            <li>
              <h4>  {!! $question->description!!} </h4>
              <p>  {!! $option->text !!} </p>
            </li>
          </div>
          @endforeach
        </ul>

      </div>
    </div>
  </div>
</div>
@endsection
