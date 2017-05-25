@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

      <h1 style="text-align:center">Welcome</h1>

       @if ($user->role==1)
        <div class="col-md-8 col-md-offset-2">
          <button id="myButton2" onclick="window.location.href='weekly/user'"
          class="btn btn-primary" type="button" name="button"> My Weekly Report </button>

          <button id="askButton2" onclick="window.location.href='weekly/create'"
          class="btn btn-success" type="button" name="button"> Create Weekly Report </button>
           @elseif ($user->role==2)
            <button id="Button3" onclick="window.location.href='weekly'"
            class="btn btn-success" type="button" name="button"> Weekly Report </button>
            @elseif ($user->role==3)
            <button id="Button4" onclick="window.location.href='user'"
            class="btn btn-success" type="button" name="button"> User Management </button>
          @endIf


    </div>
</div>
@endsection
