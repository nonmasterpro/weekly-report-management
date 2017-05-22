@extends('layouts.app')

@section('content')
<div class="">
{{--  <button id="askButton" onclick="window.location.href='question/create'"
  class="btn btn-success" type="button" name="button"> Ask Question </button>

  <button id="myButton" onclick="window.location.href='question/user'"
  class="btn btn-primary" type="button" name="button"> My Question </button> --}}

  <button id="myButton1" onclick="window.location.href='/home'"
  class="btn btn-info" type="button" name="button"> Back </button>

</div>

<div id="listQ" class="row">
  <h3>Weekly Report
</h3>
<table class="table table-striped">
<tr>
<th>Name</th>
<th>Date</th>
<th>Remark</th>
<th>Status</th>
</tr>


@foreach($questions as $question)
<tr>
  <td><a href="{{route('question.show',$question->id)}}">{{$question->username}}</a></td>
  <td> {{$question->title}}</td>
  <td>{{$question->Qcoin}}</td>
  <td>
    @if($question->status==1)
    <span id="span1">Pending</span>
    @elseif($question->status==2)
    <span id="span2">Approve</span>
    @elseif($question->status==3)
    <span id="span3">Reject</span>
    @endif
  </td>
  <!-- <td>
<form class = "" action="{{route('question.destroy',$question->id)}}" method="post">
  <input type ="hidden" name="_method" value="delete">
  <input type ="hidden" name="_token" value="{{ csrf_token() }}">
  <a href="{{route('question.edit',$question->id)}}">Edit</a>
  <input type="submit" class = "btn btn-danger" onclick="return confirm('sour')" name="name" value="delete">
</form>
  </td> -->
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
  #askButton{
    float: right;
    margin-right: 50px;
    margin-bottom: 10px;
  }
  #myButton{
    float: right;
    margin-right: 10px;
    margin-bottom: 10px;
  }
  #myButton1{
    float: right;
    margin-right: 80px;
    margin-bottom: 10px;
  }
</style>
