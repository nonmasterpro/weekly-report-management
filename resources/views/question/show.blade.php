@extends('layouts.app')

@section('content')

<button id="myButton" onclick="window.location.href='/question'"
class="btn btn-info" type="button" name="button"> Back </button>

<div id="listQ" class="row">
  <h3>Question
</h3>

<div id="titleQ" class="">
  <h3>{{$questions->title}}</h3>

</div><hr id="hr">

<div id="desQ" class="">
  {{$questions->discription}}

</div>

</div>




@stop

<style media="screen">
#listQ{
  padding: 20px 100px;

}
#hr{
  border: solid 1px gray;
  width: 1000px;
}
#titleQ{
  text-align: center;
}
#desQ{
  text-align: center;
}
#myButton{
  float: right;
  margin-right: 50px;
  margin-bottom: 10px;
}
</style>
