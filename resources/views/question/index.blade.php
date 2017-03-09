@extends('layouts.app')

@section('content')
<div class="row">
<table class="table table-striped">
<tr>
<th>title</th>
<th>Discription</th>
<th>Coin</th>
<th>Action</th>
</tr>

@foreach($questions as $question)
<tr>
  <td>{{$question->title}}</td>
  <td>{{$question->discription}}</td>
  <td>{{$question->Qcoin}}</td>
  <td>
<form class = "" action="{{route('question.destroy',$question->id)}}" method="post">
  <input type ="hidden" name="_method" value="delete">
  <input type ="hidden" name="_token" value="{{ csrf_token() }}">
  <a href="{{route('question.edit',$question->id)}}">Edit</a>
  <input type="submit" class = "btn btn-danger" onclick="return confirm('sour')" name="name" value="delete">
</form>
  </td>
</tr>
@endforeach
</table>
</div>
@stop
