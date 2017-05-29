@extends('layouts.app')

@section('content')

@if($user->role==1)
<button id="myButton11" onclick="window.location.href='/weekly/user'"
class="btn btn-info" type="button" name="button"> Back </button>
@else
<button id="myButton11" onclick="window.location.href='/weekly'"
class="btn btn-info" type="button" name="button"> Back </button>
@endif

<div id="listQ" class="row">
  <h3 id="listH3">Report

</h3>

<div id="questionbox"class="">
  <div id="titleQ" class="">
    <h3>{{$weeklys->title}}</h3>

  </div><hr id="hr">

  <div id="desQ" class="">
    <h4>Work Detail</h4>
    <h5> - {{$weeklys->discription}}</h5>
    <br>

    <h4>Remark</h4>
    <h5> - {{$weeklys->Qcoin}}</h5>

  </div>

@if($user->role==2&&$weeklys->status==1)
  <div class="butt" id="butt">

    <form action="{{ URL('weekly/'.$weeklys->id.'/reject')}}" method="get" >
        <button id="myButton22" type="submit" class = "btn btn-danger" onclick="return confirm('Are you sure?')">Reject</button>
    </form>

  <form action="{{ URL('weekly/'.$weeklys->id.'/approve')}}" method="get" >
      <button id="myButton33" type="submit" class = "btn btn-success" onclick="return confirm('Are you sure?')">Approve</button>
  </form>

  </div>
@endif

@if($weeklys->status==2)

<form action="{{ URL('weekly/print')}}" method="get" >
    <button id="myButton33" type="submit" class = "btn btn-info">Print Preview</button>
</form>
@endif

  </div>

@if($weeklys->comment!='null')
  <h3 id="listH3">Comment</h3>
  <div id="questionbox" class="panel panel-default">

      <div class = "panel-body">

        <div id="titleQ" class="">
          <h3>{{$user->name}}</h3>

        </div><hr id="hr">

        <div id="desQ" class="">

          <h5> - {{$weeklys->comment}}</h5>

        </div>


      </div>
  </div>
@endif

@if($user->role==2)

  <div id="commentbox" class="panel panel-default">
      <div class="panel-heading">Comment</div>
      <div class = "panel-body">

      <form action = "{{URL('weekly/'.$weeklys->id.'/comment')}}" method = "get" >
        <textarea rows="10" name = "comment" class = "form-control"  required></textarea><br>
        <button type="submit" class="btn btn-primary buttonComment">Submit</button>
      </form>

      </div>
  </div>

@endif





@stop



<style media="screen">


</style>
