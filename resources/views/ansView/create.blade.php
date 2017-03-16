
@extends('layouts.app')

@section('content')
<form class = "" method = "POST" action = "{{route('ansView.store')}}">
<input type= "text" class = "form-control" name="Ans" placeholder="Answer"><br>
<button type="submit" class="btn btn-primary">Add</button>
  <input type="hidden" name="_token" value="{{csrf_token()}}">
