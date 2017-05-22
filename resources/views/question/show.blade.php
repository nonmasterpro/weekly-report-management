@extends('layouts.app')

@section('content')

@if($user->role==1)
<button id="myButton" onclick="window.location.href='/question/user'"
class="btn btn-info" type="button" name="button"> Back </button>
@else
<button id="myButton" onclick="window.location.href='/question'"
class="btn btn-info" type="button" name="button"> Back </button>
@endif

<div id="listQ" class="row">
  <h3 id="listH3">Report
  {{--<button id="reButton" onclick="window.location.href='answer/{{$questions->id}}'"
    class="btn btn-success" type="button" name="button"> Reply </button>--}}
</h3>
 
<div id="questionbox"class="">
  <div id="titleQ" class="">
    <h3>{{$questions->title}}</h3>

  </div><hr id="hr">

  <div id="desQ" class="">
    <h4>Work Detail</h4>
    <h5> - {{$questions->discription}}</h5>
    <br>

    <h4>Remark</h4>
    <h5> - {{$questions->Qcoin}}</h5>

  </div>

@if($user->role==2&&$questions->status==1)
  <div class="butt" id="butt">

    <form action="{{ URL('question/'.$questions->id.'/reject')}}" method="get" >
        <button id="myButton2" type="submit" class = "btn btn-danger" onclick="return confirm('Are you sure?')">Reject</button>
    </form>

  <form action="{{ URL('question/'.$questions->id.'/approve')}}" method="get" >
      <button id="myButton3" type="submit" class = "btn btn-success" onclick="return confirm('Are you sure?')">Approve</button>
  </form>





    {{-- <button id="myButton" onclick="updateStatus()"
    class="btn btn-danger" type="button" name="button"> Reject </button>
    <button id="myButton" onclick="updateStatus()"
    class="btn btn-success appp" type="button" name="button"> Approve </button> --}}

  </div>
@endif

  </div>





{{-- @foreach($answers as $answer)
<br>
  <div id="answerbox"class="">
    <div id="titleQ" class="">
      <br/>
      <h3>Answer{{$answer->id}}</h3>
      <h4 id="answer">{{$answer->answer}}</h4>
      <h4 id="nameU">{{$answer->UserId}}</h4>
    </div>
  </div>
@endforeach

<br>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Answer</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{route('question.store')}}">

                  <textarea rows="10" name = "discription" class = "form-control" placeholder="Your answer"></textarea>
                  <br>

                <button id="ansButton" type="submit" class="btn btn-primary">Post</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>


</div> --}}

@stop



<style media="screen">
.butt{
  margin-right: -20px;
}

#ansButton{
  float: right;
  padding-right: 20px;
}

#reButton{
  float: right;
  margin-right: 110px;

}

#nameU{
  float: right;
  padding-right: 20px;
  padding-top: 120px;

}

#listQ{
  padding: 20px 100px;
  /*margin-left: 20px;*/

}
#listH3{
  margin-left: 90px;

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
#myButton2{
  position: absolute;
  right: 235px;
  top: 385px;
}
#myButton3{
  position: absolute;
  right: 310px;
  top: 385px;
}

</style>
