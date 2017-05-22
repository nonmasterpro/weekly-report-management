@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

      <h1 style="text-align:center">Welcome</h1>

       @if ($user->role==1)
        <div class="col-md-8 col-md-offset-2">
          <button id="myButton" onclick="window.location.href='question/user'"
          class="btn btn-primary" type="button" name="button"> My Weekly Report </button>

          <button id="askButton" onclick="window.location.href='question/create'"
          class="btn btn-success" type="button" name="button"> Create Weekly Report </button>
           @elseif ($user->role==2)
            <button id="Button3" onclick="window.location.href='question'"
            class="btn btn-success" type="button" name="button"> Weekly Report </button>
            @elseif ($user->role==3)
            <button id="Button4" onclick="window.location.href='user'"
            class="btn btn-success" type="button" name="button"> User Management </button>
          @endIf
 

    </div>
</div>
@endsection

<style media="screen">
  #listQ{
    padding: 20px 100px;
  }
  #askButton{
    position: relative;
    left: 14%;
    font-size: 50px;
    margin-bottom: 20px;


  }
  #myButton{
    position: relative;
    left: 20%;
    font-size: 50px;
    margin-bottom: 20px;


  }
  #Button3{
      position: relative;
      left: 35%;
      font-size: 50px;
  }
  #Button4{
      position: relative;
      left: 31%;
      font-size: 50px;
  }
</style>
