@extends('layouts.app')

@section('content')

@if ($user->role==1)
<button id="myButton1" onclick="window.location.href='/home'"
class="btn btn-info" type="button" name="button"> Back </button>
@else
<button id="myButton1" onclick="window.location.href='/question'"
class="btn btn-info" type="button" name="button"> Back </button>
@endIf
 
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Weekly Report</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{route('question.store')}}">


                  <p>Date </p>
                  <input style="width:180px" type= "date" class = "form-control" name="title" placeholder="Your Question" required><br>

                    <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                  <p>Work Detail </p>
                  <textarea rows="10" name = "discription" class = "form-control" placeholder="Description..." required></textarea><br>

                  <input id="status" name="status" type="hidden" class="form-control" name="role" value="1" required autofocus>

                  <p>Mentor ID </p>
                  <input type= "text" class = "form-control" name="mentorId" placeholder="MentorID..." required><br>

                  <p>Remark </p>
                  <input type= "text" class = "form-control" name="Qcoin" placeholder="Remark..." required><br>

                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection

<style>

.aaaa{
  width: 10px;
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
</style>
