
@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-success">
        @if(Auth::check())
        <div class="container">
          <h3> <a href='{{ route('entries.create') }}' id='new-entry'>Make a new entry in your log!</a> </h3>
        </div>
        <div class="container">
          <h3> <a href='{{ route('entries.index') }}'id='all-entries'> See your previous entries!</a> </h3>
        </div>
        @endif
      </div>
      @if(Auth::guest())
      <a href="/login" class="btn btn-info"> You need to login first! >></a>
      @endif
    </div>
  </div>
</div>
@endsection
