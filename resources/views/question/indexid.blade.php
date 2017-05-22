@extends('layouts.app')

@section('content')

@if ($user->role==1)
<button id="myButton1" onclick="window.location.href='/home'"
class="btn btn-info" type="button" name="button"> Back </button>
@else
<button id="myButton" onclick="window.location.href='/question'"
class="btn btn-info" type="button" name="button"> Back </button>
@endIf

<div id="listQ" class="row">
  <h3>Weekly Report - {{$user->name}}
</h3>
<table class="table table-striped">
<tr>
<th>Date</th>
<th>Remark</th>
<th>Action</th>
<th>Status</th>
</tr>

@foreach($questions as $question)
<tr>
  <td><a href="{{route('question.show',$question->id)}}">{{$question->title}}</a></td>
  <td>{{$question->Qcoin}}</td>
  <td>
    <form class = "" action="{{route('question.destroy',$question->id)}}" method="post">
    <input type ="hidden" name="_method" value="delete">
    <input type ="hidden" name="_token" value="{{ csrf_token() }}">
    @if($question->status==1||$question->status==3)
    <a href="{{route('question.edit',$question->id)}}" class="btn btn-primary">Edit</a>
    <input type="submit" class = "btn btn-danger" onclick="return confirm('Are you sure?')" name="name" value="delete">
    @else
    <h1 id="yimyim">😁😚😁</h1>
    @endif
  </form>
  </td>
  <td>
  @if($question->status==1)
  <span id="span1">Pending</span>
  @elseif($question->status==2)
  <span id="span2">Approve</span>
  @elseif($question->status==3)
  <span id="span3">Reject</span>
  @endif
  </td>
</tr>
@endforeach
</table>
</div>


@stop

<style media="screen">
#span1 {
  padding: 5 5 5 5;
  background-color: rgb(57, 151, 191);
  color: white;
  border-style: double;

}
#span2 {
  padding: 5 5 5 5;
  background-color: rgb(5, 207, 86);
  color: white;
  border-style: double;
}
#span3 {
  padding: 5 5 5 5;
  background-color: rgb(236, 63, 89);
  color: white;
  border-style: double;
}
#listQ{
  padding: 20px 100px;
}
#myButton{
  float: right;
  margin-right: 50px;
  margin-bottom: 10px;
}
#myButton1{
  float: right;
  margin-right: 80px;
  margin-bottom: 10px;
}
#yimyim{
  margin-top: -5px;
  margin-bottom: -5px;

}
</style>
