@extends('layouts.app')

@section('content')

<button id="myButton" onclick="window.location.href='/question'"
class="btn btn-info" type="button" name="button"> Back </button>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Question</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{route('question.store')}}">



                  <input type= "text" class = "form-control" name="title" placeholder="your question"><br>

                  <input type= "text" class = "form-control" name="Qcoin" placeholder="coin"><br>
                    <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                  <textarea rows="10" name = "discription" class = "form-control" placeholder="main"></textarea>
                <button type="submit" class="btn btn-primary">Add</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection

<style media="screen">

#myButton{
  float: right;
  margin-right: 50px;
  margin-bottom: 10px;
}
</style>
