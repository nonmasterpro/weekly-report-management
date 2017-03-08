@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class = "panel-body">
                <form method = "POST" action = "{{url('Create')}}">
                  <input type= "text" class = "form-control" name="title" placeholder="your question"><br>
                  <textarea rows="10" name = "discription" class = "form-control" placeholder="main"></textarea>
                <button type="submit" class="btn btn-primary">Add</button>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
            </div>
        </div>
    </div>
</div>
@endsection
