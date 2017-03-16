@extends('layouts.app')

@section('content')

<button id="myButton" onclick="window.location.href='/question'"
class="btn btn-info" type="button" name="button"> Back </button>

<div id="listQ" class="row">
  <h3>Question
</h3>

<div id="questionbox"class="">
  <div id="titleQ" class="">
    <h3>{{$questions->title}}</h3>

  </div><hr id="hr">

  <div id="desQ" class="">
    {{$questions->discription}}

  </div>

  </div>

@foreach($answers as $answer)
<br>
  <div id="answerbox"class="">
    <div id="titleQ" class="">
      <br/>
      <h3>Answer{{$answer->id}}</h3>
      <h4 id="answer">{{$answer->answer}}</h4>
    </div>
  </div>
@endforeach


</div>





@stop

<style media="screen">
#listQ{
  padding: 20px 100px;

}
#hr{
  border: solid 1px white;
  width: 950px;
}
#titleQ{
  /*text-align: center;*/
  padding-left: 50px;
  color: white;
}
#desQ{
  padding-left: 80px;
  color: white;


}
#questionbox{
  border: 1px solid;
  width: 1000px;
  height: 280px;
  margin:0 auto;
  background-color: gray;
}

#answerbox{
  border: 1px solid;
  width: 1000px;
  height: 280px;
  margin:0 auto;
  background-color: #B5B5B5;
}


#myButton{
  float: right;
  margin-right: 50px;
  margin-bottom: 10px;
}
</style>
