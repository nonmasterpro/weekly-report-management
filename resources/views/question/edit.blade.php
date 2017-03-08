@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Question</div>

                <div class = "panel-body">
                <form class = "" method = "POST" action = "{{route('question.update',$question->id)}}">



                  <input type= "text" class = "form-control" name="title" placeholder="your question" value = "{{$question->title}}"><br>

                  <input type= "text" class = "form-control" name="Qcoin" placeholder="coin" value="{{$question->Qcoin}}"><br>
                    <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                  <textarea rows="10" name = "discription" class = "form-control" placeholder="main" value = "{{$question->discription}}"></textarea>
                <button type="submit" class="btn btn-primary">Edit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection
