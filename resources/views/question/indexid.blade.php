@extends('layouts.app')

@section('content')

@foreach($questions as $question)

<div id="qqq" class="">
  {{$questions->title}}

</div>

@endforeach



@stop




<style media="screen">
#qqq{
  padding: 50px 50px;
}
</style>
