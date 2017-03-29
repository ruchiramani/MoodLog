@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <ul>
            <?php  $i = 0; ?>

            @foreach ($entries as $entry)
            <?php $datetime = explode(" ",$entry->created_at);
             $i++;
            $date = $datetime[0]; ?>
            <div>
              <li>
                <h4> <a href='{{ route('entries.show',['id' => $entry->id]) }}' id='{{"entry-$i"}}'> {!! $date !!}</a></h4>
              </li>
            </div>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
  @endsection
