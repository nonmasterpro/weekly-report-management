@extends('layouts.app')

@section('content')

<button id="myButton1" onclick="window.location.href='/question/user'"
class="btn btn-info" type="button" name="button"> Back </button>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Report</div>

                <div class = "panel-body">
                <form class = "" method = "post" action = "{{route('question.update',$question->id)}}">
                  <input name="_method" type="hidden" value="PATCH">
                  <div>
                    <p>Date </p>
                  <input style="width:180px" type= "date" class = "form-control" name="title" placeholder="your question" value = "{{$question->title}}" required><br>
</div>
 
<p>Work Detail </p>

          <div>  <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                  <textarea rows="10" name = "discription" class = "form-control" placeholder="main" value = "{{$question->discription}}" required>{{$question->discription}}</textarea><br>
          </div>

<p>Mentor ID </p>
<input type= "text" class = "form-control" name="mentorId" value="{{$question->mentorId}}"placeholder="MentorID..." required><br>

<p>Remark </p>

<input type= "text" class = "form-control" name="Qcoin" placeholder="coin" value="{{$question->Qcoin}}" required><br>

                <button type="submit" class="btn btn-primary">Edit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection
<style media="screen">

#myButton{
  float: right;
  margin-right: 80px;
  margin-bottom: 10px;
}
#myButton1{
  float: right;
  margin-right: 80px;
  margin-bottom: 10px;
}
</style>
