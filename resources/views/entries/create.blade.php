@extends('layouts.app')

@section('content')
<div class='container'>
<div class="center-block">
{!! Form::open(array('route' => 'entries.store', 'class' => 'form')) !!}
<div class="form-group">
      @foreach ($questions as $question)
    <?php
    $options = DB::select('select * from options where question_id = :question_id', ['question_id' => $question->id]);
    ?>
      <div class="form-check row">
       <h4>{!! Form::label('radios', $question->description, ['class' => 'col-lg-2 control-label']) !!}</h4>
        @foreach ($options as $option)
          {!! Form::label($option->id, $option->text) !!}
          {!! Form::radio($question->id, $option->id, ['id' => 'option1']) !!}
          @endforeach
     </div>
   </br>
     @endforeach
  </div>

<div class="form-group row">
  {!! Form::submit('Submit',
  array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
</div>
</div>
@endsection
