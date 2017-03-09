@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Question</div>

                <div class = "panel-body">
                <form class = "" method = "post" action = "{{route('question.update',$question->id)}}">
                  <input name="_method" type="hidden" value="PATCH">
                  <div>
                  <input type= "text" class = "form-control" name="title" placeholder="your question" value = "{{$question->title}}"><br>
</div><div>
                  <input type= "text" class = "form-control" name="Qcoin" placeholder="coin" value="{{$question->Qcoin}}"><br>
                </div><div>  <!-- <input type= "text" class = "form-control" name="UserQId" placeholder="UserQId"><br> -->
                  <input rows="10" name = "discription" class = "form-control" placeholder="main" value = "{{$question->discription}}">
</div>
                <button type="submit" class="btn btn-primary">Edit</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection
