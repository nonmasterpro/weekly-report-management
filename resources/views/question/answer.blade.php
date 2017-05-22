@extends('layouts.app')

@section('content')

<button id="myButton" onclick="window.location.href='/question'"
class="btn btn-info" type="button" name="button"> Back </button>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Answer</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{route('question.storeAns', $aaaa)}}">

                  <textarea rows="10" name = "discription" class = "form-control" placeholder="Your answer"></textarea>
                  <br>

                <button id="ansButton" type="submit" class="btn btn-primary">Post</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>


</div>

@stop

<style >

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
